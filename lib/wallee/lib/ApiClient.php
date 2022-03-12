<?php
/**
 * wallee SDK
 *
 * This library allows to interact with the wallee payment service.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */


namespace Wallee\Sdk;

use Wallee\Sdk\ApiException;
use Wallee\Sdk\VersioningException;
use Wallee\Sdk\Http\HttpRequest;
use Wallee\Sdk\Http\HttpClientFactory;

/**
 * This class sends API calls to the endpoint.
 *
 * @category Class
 * @package  Wallee\Sdk
 * @author   customweb GmbH
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
final class ApiClient {

	/**
	 * The base path of the API endpoint.
	 *
	 * @var string
	 */
	private $basePath = 'https://app-wallee.com:443/api';

	/**
	 * An array of headers that are added to every request.
	 *
	 * @var array
	 */
	private $defaultHeaders = [];

	/**
	 * The user agent that is sent with any request.
	 *
	 * @var string
	 */
	private $userAgent = 'PHP-Client/3.0.1/php';

	/**
	 * The path to the certificate authority file.
	 *
	 * @var string
	 */
	private $certificateAuthority;

	/**
	 * Defines whether the certificate authority should be checked.
	 *
	 * @var boolean
	 */
	private $enableCertificateAuthorityCheck = true;

	/**
	 * The connection timeout in seconds.
	 *
	 * @var integer
	 */
	private $connectionTimeout = 20;
	CONST CONNECTION_TIMEOUT = 20;

	/**
	 * The http client type to use for communication.
	 *
	 * @var string
	 */
	private $httpClientType = null;

	/**
	 * Defined whether debug information should be logged.
	 *
	 * @var boolean
	 */
	private $enableDebugging = false;

	/**
	 * The path to the debug file.
	 *
	 * @var string
	 */
	private $debugFile = 'php://output';

	/**
	 * The application user's id.
	 *
	 * @var integer
	 */
	private $userId;

	/**
	 * The application user's security key.
	 *
	 * @var string
	 */
	private $applicationKey;

	/**
	 * The object serializer.
	 *
	 * @var ObjectSerializer
	 */
	private $serializer;

	/**
	 * Constructor.
	 *
	 * @param integer $userId the application user's id
	 * @param string $applicationKey the application user's security key
	 */
	public function __construct($userId, $applicationKey) {
		if (empty($applicationKey)) {
			throw new \InvalidArgumentException('The application key cannot be empty or null.');
		}

		$this->userId = $userId;
        $this->applicationKey = $applicationKey;

		$this->certificateAuthority = dirname(__FILE__) . '/ca-bundle.crt';
		$this->serializer = new ObjectSerializer();
		$this->isDebuggingEnabled() ? $this->serializer->enableDebugging() : $this->serializer->disableDebugging();
		$this->serializer->setDebugFile($this->getDebugFile());
	}

	/**
	 * Returns the base path of the API endpoint.
	 *
	 * @return string
	 */
	public function getBasePath() {
		return $this->basePath;
	}

	/**
	 * Sets the base path of the API endpoint.
	 *
	 * @param string $basePath the base path
	 * @return ApiClient
	 */
	public function setBasePath($basePath) {
		$this->basePath = rtrim($basePath, '/');
		return $this;
	}

	/**
	 * Returns the path to the certificate authority file.
	 *
	 * @return string
	 */
	public function getCertificateAuthority() {
		return $this->certificateAuthority;
	}

	/**
	 * Sets the path to the certificate authority file. The certificate authority is used to verify the identity of the
	 * remote server. By setting this option the default certificate authority file will be overridden.
	 *
	 * To deactivate the check please use disableCertificateAuthorityCheck()
	 *
	 * @param string $certificateAuthorityFile the path to the certificate authority file
	 * @return ApiClient
	 */
	public function setCertificateAuthority($certificateAuthorityFile) {
		if (!file_exists($certificateAuthorityFile)) {
			throw new \InvalidArgumentException('The certificate authority file does not exist.');
		}

		$this->certificateAuthority = $certificateAuthorityFile;
		return $this;
	}

	/**
	 * Returns true, when the authority check is enabled. See enableCertificateAuthorityCheck() for more details about
	 * the authority check.
	 *
	 * @return boolean
	 */
	public function isCertificateAuthorityCheckEnabled() {
		return $this->enableCertificateAuthorityCheck;
	}

	/**
	 * Enables the check of the certificate authority. By checking the certificate authority the whole certificate
	 * chain is checked. the authority check prevents an attacker to use a man-in-the-middle attack.
	 *
	 * @return ApiClient
	 */
	public function enableCertificateAuthorityCheck() {
		$this->enableCertificateAuthorityCheck = true;
		return $this;
	}

	/**
	 * Disables the check of the certificate authority. See enableCertificateAuthorityCheck() for more details.
	 *
	 * @return ApiClient
	 */
	public function disableCertificateAuthorityCheck() {
		$this->enableCertificateAuthorityCheck = false;
		return $this;
	}

	/**
	 * Returns the connection timeout.
	 *
	 * @return int
	 */
	public function getConnectionTimeout() {
		return $this->connectionTimeout;
	}

	/**
	 * Sets the connection timeout in seconds.
	 *
	 * @param int $connectionTimeout the connection timeout in seconds
	 * @return ApiClient
	 */
	public function setConnectionTimeout($connectionTimeout) {
		if (!is_numeric($connectionTimeout) || $connectionTimeout < 0) {
			throw new \InvalidArgumentException('Timeout value must be numeric and a non-negative number.');
		}

		$this->connectionTimeout = $connectionTimeout;
		return $this;
	}

	/**
	 * Resets the connection timeout in seconds.
	 *
	 * @return ApiClient
	 */
	public function resetConnectionTimeout() {
		$this->connectionTimeout = self::CONNECTION_TIMEOUT;
		return $this;
	}

	/**
	 * Return the http client type to use for communication.
	 *
	 * @return string
	 * @see \Wallee\Sdk\Http\HttpClientFactory
	 */
	public function getHttpClientType() {
		return $this->httpClientType;
	}

	/**
	 * Set the http client type to use for communication.
	 * If this is null, all client are considered and the one working in the current environment is used.
	 *
	 * @param string $httpClientType the http client type
	 * @return ApiClient
	 * @see \Wallee\Sdk\Http\HttpClientFactory
	 */
	public function setHttpClientType($httpClientType) {
		$this->httpClientType = $httpClientType;
		return $this;
	}

	/**
	 * Returns the user agent header's value.
	 *
	 * @return string
	 */
	public function getUserAgent() {
		return $this->userAgent;
	}

	/**
	 * Sets the user agent header's value.
	 *
	 * @param string $userAgent the HTTP request's user agent
	 * @return ApiClient
	 */
	public function setUserAgent($userAgent) {
		if (!is_string($userAgent)) {
			throw new \InvalidArgumentException('User-agent must be a string.');
		}

		$this->userAgent = $userAgent;
		return $this;
	}

	/**
	 * Adds a default header.
	 *
	 * @param string $key the header's key
	 * @param string $value the header's value
	 * @return ApiClient
	 */
	public function addDefaultHeader($key, $value) {
		if (!is_string($key)) {
			throw new \InvalidArgumentException('The header key must be a string.');
		}

		$defaultHeaders[$key] = $value;
		return $this;
	}

	/**
	 * Returns true, when debugging is enabled.
	 *
	 * @return boolean
	 */
	public function isDebuggingEnabled() {
		return $this->enableDebugging;
	}

	/**
	 * Enables debugging.
	 *
	 * @return ApiClient
	 */
	public function enableDebugging() {
		$this->enableDebugging = true;
		$this->serializer->enableDebugging();
		return $this;
	}

	/**
	 * Disables debugging.
	 *
	 * @return ApiClient
	 */
	public function disableDebugging() {
		$this->enableDebugging = false;
		$this->serializer->disableDebugging();
		return $this;
	}

	/**
	 * Returns the path to the debug file.
	 *
	 * @return string
	 */
	public function getDebugFile() {
		return $this->debugFile;
	}

	/**
	 * Sets the path to the debug file.
	 *
	 * @param string $debugFile the debug file
	 * @return ApiClient
	 */
	public function setDebugFile($debugFile) {
		$this->debugFile = $debugFile;
		$this->serializer->setDebugFile($debugFile);
		return $this;
	}

	/**
	 * Returns the serializer.
	 *
	 * @return ObjectSerializer
	 */
	public function getSerializer() {
		return $this->serializer;
	}

	/**
	 * Return the path of the temporary folder used to store downloaded files from endpoints with file response. By
	 * default the system's default temporary folder is used.
	 *
	 * @return string
	 */
	public function getTempFolderPath() {
		return $this->serializer->getTempFolderPath();
	}

	/**
	 * Sets the path to the temporary folder (for downloading files).
	 *
	 * @param string $tempFolderPath the temporary folder path
	 * @return ApiClient
	 */
	public function setTempFolderPath($tempFolderPath) {
		$this->serializer->setTempFolderPath($tempFolderPath);
		return $this;
	}

	/**
	 * Returns the 'Accept' header based on an array of accept values.
	 *
	 * @param string[] $accept the array of headers
	 * @return string
	 */
	public function selectHeaderAccept($accept) {
		if (empty($accept[0])) {
			return null;
		} elseif (preg_grep('/application\/json/i', $accept)) {
			return 'application/json';
		} else {
			return implode(',', $accept);
		}
	}

	/**
	 * Returns the 'Content Type' based on an array of content types.
	 *
	 * @param string[] $contentType the array of content types
	 * @return string
	 */
	public function selectHeaderContentType($contentType) {
		if (empty($contentType[0])) {
			return 'application/json';
		} elseif (preg_grep('/application\/json/i', $contentType)) {
			return 'application/json';
		} else {
			return implode(',', $contentType);
		}
	}

	/**
	 * Make the HTTP call (synchronously).
	 *
	 * @param string $resourcePath the path to the endpoint resource
	 * @param string $method	   the method to call
	 * @param array  $queryParams  the query parameters
	 * @param array  $postData	 the body parameters
	 * @param array  $headerParams the header parameters
	 * @param string $responseType the expected response type
	 * @param string $endpointPath the path to the method endpoint before expanding parameters
	 *
	 * @return \Wallee\Sdk\ApiResponse
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @throws \Wallee\Sdk\VersioningException
	 */
	public function callApi($resourcePath, $method, $queryParams, $postData, $headerParams, $responseType = null, $endpointPath = null) {
		$request = new HttpRequest($this->getSerializer(), $this->buildRequestUrl($resourcePath, $queryParams), $method, $this->generateUniqueToken());
		$request->setUserAgent($this->getUserAgent());
		$request->addHeaders(array_merge(
			(array)$this->defaultHeaders,
			(array)$headerParams,
			(array)$this->getAuthenticationHeaders($request)
		));
		$request->setBody($postData);

		$response = HttpClientFactory::getClient($this->httpClientType)->send($this, $request);

		if ($response->getStatusCode() >= 200 && $response->getStatusCode() <= 299) {
			// return raw body if response is a file
			if (in_array($responseType, ['\SplFileObject', 'string'])) {
				return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $response->getBody());
			}

			$data = json_decode($response->getBody());
			if (json_last_error() > 0) { // if response is a string
				$data = $response->getBody();
			}
		} else {
			if ($response->getStatusCode() == 409) {
				throw new VersioningException($resourcePath);
			}

			$data = json_decode($response->getBody());
			if (json_last_error() > 0) { // if response is a string
				$data = $response->getBody();
			}
            throw new ApiException(
                'Error ' . $response->getStatusCode() . ' connecting to the API (' . $request->getUrl() . ') : ' . $response->getBody(),
                $response->getStatusCode(),
                $response->getHeaders(),
                $data
            );
		}
		return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $data);
	}

	/**
	 * Returns the request url.
	 *
	 * @param string $path the request path
	 * @param array $queryParams an array of query parameters
	 * @return string
	 */
	private function buildRequestUrl($path, $queryParams) {
		$url = $this->getBasePath() . $path;
		if (!empty($queryParams)) {
			$url = ($url . '?' . http_build_query($queryParams, '', '&'));
		}
		return $url;
	}

	/**
	 * Returns the headers used for authentication.
	 *
	 * @param HttpRequest $request
	 * @return array
	 */
	private function getAuthenticationHeaders(HttpRequest $request) {
		$timestamp = time();
		$version = 1;
		$path = $request->getPath();
		$securedData = implode('|', [$version, $this->userId, $timestamp, $request->getMethod(), $path]);

		$headers = [];
		$headers['x-mac-version'] = $version;
		$headers['x-mac-userid'] = $this->userId;
		$headers['x-mac-timestamp'] = $timestamp;
		$headers['x-mac-value'] = $this->calculateHmac($securedData);
		return $headers;
	}

	/**
	 * Calculates the hmac of the given data.
	 *
	 * @param string $securedData the data to calculate the hmac for
	 * @return string
	 */
	private function calculateHmac($securedData) {
		$decodedSecret = base64_decode($this->applicationKey);
		return base64_encode(hash_hmac('sha512', $securedData, $decodedSecret, true));
	}

	/**
	 * Generates a unique token to assign to the request.
	 *
	 * @return string
	 */
	private function generateUniqueToken() {
		$s = strtoupper(md5(uniqid(rand(),true)));
    	return substr($s,0,8) . '-' .
	        substr($s,8,4) . '-' .
	        substr($s,12,4). '-' .
	        substr($s,16,4). '-' .
	        substr($s,20);
	}

    // Builder pattern to get API instances for this client.
    
    protected $accountService;

    /**
     * @return \Wallee\Sdk\Service\AccountService
     */
    public function getAccountService() {
        if(is_null($this->accountService)){
            $this->accountService = new \Wallee\Sdk\Service\AccountService($this);
        }
        return $this->accountService;
    }
    
    protected $applicationUserService;

    /**
     * @return \Wallee\Sdk\Service\ApplicationUserService
     */
    public function getApplicationUserService() {
        if(is_null($this->applicationUserService)){
            $this->applicationUserService = new \Wallee\Sdk\Service\ApplicationUserService($this);
        }
        return $this->applicationUserService;
    }
    
    protected $bankAccountService;

    /**
     * @return \Wallee\Sdk\Service\BankAccountService
     */
    public function getBankAccountService() {
        if(is_null($this->bankAccountService)){
            $this->bankAccountService = new \Wallee\Sdk\Service\BankAccountService($this);
        }
        return $this->bankAccountService;
    }
    
    protected $bankTransactionService;

    /**
     * @return \Wallee\Sdk\Service\BankTransactionService
     */
    public function getBankTransactionService() {
        if(is_null($this->bankTransactionService)){
            $this->bankTransactionService = new \Wallee\Sdk\Service\BankTransactionService($this);
        }
        return $this->bankTransactionService;
    }
    
    protected $cardProcessingService;

    /**
     * @return \Wallee\Sdk\Service\CardProcessingService
     */
    public function getCardProcessingService() {
        if(is_null($this->cardProcessingService)){
            $this->cardProcessingService = new \Wallee\Sdk\Service\CardProcessingService($this);
        }
        return $this->cardProcessingService;
    }
    
    protected $chargeAttemptService;

    /**
     * @return \Wallee\Sdk\Service\ChargeAttemptService
     */
    public function getChargeAttemptService() {
        if(is_null($this->chargeAttemptService)){
            $this->chargeAttemptService = new \Wallee\Sdk\Service\ChargeAttemptService($this);
        }
        return $this->chargeAttemptService;
    }
    
    protected $chargeBankTransactionService;

    /**
     * @return \Wallee\Sdk\Service\ChargeBankTransactionService
     */
    public function getChargeBankTransactionService() {
        if(is_null($this->chargeBankTransactionService)){
            $this->chargeBankTransactionService = new \Wallee\Sdk\Service\ChargeBankTransactionService($this);
        }
        return $this->chargeBankTransactionService;
    }
    
    protected $chargeFlowLevelPaymentLinkService;

    /**
     * @return \Wallee\Sdk\Service\ChargeFlowLevelPaymentLinkService
     */
    public function getChargeFlowLevelPaymentLinkService() {
        if(is_null($this->chargeFlowLevelPaymentLinkService)){
            $this->chargeFlowLevelPaymentLinkService = new \Wallee\Sdk\Service\ChargeFlowLevelPaymentLinkService($this);
        }
        return $this->chargeFlowLevelPaymentLinkService;
    }
    
    protected $chargeFlowLevelService;

    /**
     * @return \Wallee\Sdk\Service\ChargeFlowLevelService
     */
    public function getChargeFlowLevelService() {
        if(is_null($this->chargeFlowLevelService)){
            $this->chargeFlowLevelService = new \Wallee\Sdk\Service\ChargeFlowLevelService($this);
        }
        return $this->chargeFlowLevelService;
    }
    
    protected $chargeFlowService;

    /**
     * @return \Wallee\Sdk\Service\ChargeFlowService
     */
    public function getChargeFlowService() {
        if(is_null($this->chargeFlowService)){
            $this->chargeFlowService = new \Wallee\Sdk\Service\ChargeFlowService($this);
        }
        return $this->chargeFlowService;
    }
    
    protected $conditionTypeService;

    /**
     * @return \Wallee\Sdk\Service\ConditionTypeService
     */
    public function getConditionTypeService() {
        if(is_null($this->conditionTypeService)){
            $this->conditionTypeService = new \Wallee\Sdk\Service\ConditionTypeService($this);
        }
        return $this->conditionTypeService;
    }
    
    protected $countryService;

    /**
     * @return \Wallee\Sdk\Service\CountryService
     */
    public function getCountryService() {
        if(is_null($this->countryService)){
            $this->countryService = new \Wallee\Sdk\Service\CountryService($this);
        }
        return $this->countryService;
    }
    
    protected $countryStateService;

    /**
     * @return \Wallee\Sdk\Service\CountryStateService
     */
    public function getCountryStateService() {
        if(is_null($this->countryStateService)){
            $this->countryStateService = new \Wallee\Sdk\Service\CountryStateService($this);
        }
        return $this->countryStateService;
    }
    
    protected $currencyBankAccountService;

    /**
     * @return \Wallee\Sdk\Service\CurrencyBankAccountService
     */
    public function getCurrencyBankAccountService() {
        if(is_null($this->currencyBankAccountService)){
            $this->currencyBankAccountService = new \Wallee\Sdk\Service\CurrencyBankAccountService($this);
        }
        return $this->currencyBankAccountService;
    }
    
    protected $currencyService;

    /**
     * @return \Wallee\Sdk\Service\CurrencyService
     */
    public function getCurrencyService() {
        if(is_null($this->currencyService)){
            $this->currencyService = new \Wallee\Sdk\Service\CurrencyService($this);
        }
        return $this->currencyService;
    }
    
    protected $customerAddressService;

    /**
     * @return \Wallee\Sdk\Service\CustomerAddressService
     */
    public function getCustomerAddressService() {
        if(is_null($this->customerAddressService)){
            $this->customerAddressService = new \Wallee\Sdk\Service\CustomerAddressService($this);
        }
        return $this->customerAddressService;
    }
    
    protected $customerCommentService;

    /**
     * @return \Wallee\Sdk\Service\CustomerCommentService
     */
    public function getCustomerCommentService() {
        if(is_null($this->customerCommentService)){
            $this->customerCommentService = new \Wallee\Sdk\Service\CustomerCommentService($this);
        }
        return $this->customerCommentService;
    }
    
    protected $customerService;

    /**
     * @return \Wallee\Sdk\Service\CustomerService
     */
    public function getCustomerService() {
        if(is_null($this->customerService)){
            $this->customerService = new \Wallee\Sdk\Service\CustomerService($this);
        }
        return $this->customerService;
    }
    
    protected $debtCollectionCaseService;

    /**
     * @return \Wallee\Sdk\Service\DebtCollectionCaseService
     */
    public function getDebtCollectionCaseService() {
        if(is_null($this->debtCollectionCaseService)){
            $this->debtCollectionCaseService = new \Wallee\Sdk\Service\DebtCollectionCaseService($this);
        }
        return $this->debtCollectionCaseService;
    }
    
    protected $debtCollectorConfigurationService;

    /**
     * @return \Wallee\Sdk\Service\DebtCollectorConfigurationService
     */
    public function getDebtCollectorConfigurationService() {
        if(is_null($this->debtCollectorConfigurationService)){
            $this->debtCollectorConfigurationService = new \Wallee\Sdk\Service\DebtCollectorConfigurationService($this);
        }
        return $this->debtCollectorConfigurationService;
    }
    
    protected $debtCollectorService;

    /**
     * @return \Wallee\Sdk\Service\DebtCollectorService
     */
    public function getDebtCollectorService() {
        if(is_null($this->debtCollectorService)){
            $this->debtCollectorService = new \Wallee\Sdk\Service\DebtCollectorService($this);
        }
        return $this->debtCollectorService;
    }
    
    protected $deliveryIndicationService;

    /**
     * @return \Wallee\Sdk\Service\DeliveryIndicationService
     */
    public function getDeliveryIndicationService() {
        if(is_null($this->deliveryIndicationService)){
            $this->deliveryIndicationService = new \Wallee\Sdk\Service\DeliveryIndicationService($this);
        }
        return $this->deliveryIndicationService;
    }
    
    protected $documentTemplateService;

    /**
     * @return \Wallee\Sdk\Service\DocumentTemplateService
     */
    public function getDocumentTemplateService() {
        if(is_null($this->documentTemplateService)){
            $this->documentTemplateService = new \Wallee\Sdk\Service\DocumentTemplateService($this);
        }
        return $this->documentTemplateService;
    }
    
    protected $documentTemplateTypeService;

    /**
     * @return \Wallee\Sdk\Service\DocumentTemplateTypeService
     */
    public function getDocumentTemplateTypeService() {
        if(is_null($this->documentTemplateTypeService)){
            $this->documentTemplateTypeService = new \Wallee\Sdk\Service\DocumentTemplateTypeService($this);
        }
        return $this->documentTemplateTypeService;
    }
    
    protected $externalTransferBankTransactionService;

    /**
     * @return \Wallee\Sdk\Service\ExternalTransferBankTransactionService
     */
    public function getExternalTransferBankTransactionService() {
        if(is_null($this->externalTransferBankTransactionService)){
            $this->externalTransferBankTransactionService = new \Wallee\Sdk\Service\ExternalTransferBankTransactionService($this);
        }
        return $this->externalTransferBankTransactionService;
    }
    
    protected $humanUserService;

    /**
     * @return \Wallee\Sdk\Service\HumanUserService
     */
    public function getHumanUserService() {
        if(is_null($this->humanUserService)){
            $this->humanUserService = new \Wallee\Sdk\Service\HumanUserService($this);
        }
        return $this->humanUserService;
    }
    
    protected $installmentPaymentService;

    /**
     * @return \Wallee\Sdk\Service\InstallmentPaymentService
     */
    public function getInstallmentPaymentService() {
        if(is_null($this->installmentPaymentService)){
            $this->installmentPaymentService = new \Wallee\Sdk\Service\InstallmentPaymentService($this);
        }
        return $this->installmentPaymentService;
    }
    
    protected $installmentPaymentSliceService;

    /**
     * @return \Wallee\Sdk\Service\InstallmentPaymentSliceService
     */
    public function getInstallmentPaymentSliceService() {
        if(is_null($this->installmentPaymentSliceService)){
            $this->installmentPaymentSliceService = new \Wallee\Sdk\Service\InstallmentPaymentSliceService($this);
        }
        return $this->installmentPaymentSliceService;
    }
    
    protected $installmentPlanCalculationService;

    /**
     * @return \Wallee\Sdk\Service\InstallmentPlanCalculationService
     */
    public function getInstallmentPlanCalculationService() {
        if(is_null($this->installmentPlanCalculationService)){
            $this->installmentPlanCalculationService = new \Wallee\Sdk\Service\InstallmentPlanCalculationService($this);
        }
        return $this->installmentPlanCalculationService;
    }
    
    protected $installmentPlanConfigurationService;

    /**
     * @return \Wallee\Sdk\Service\InstallmentPlanConfigurationService
     */
    public function getInstallmentPlanConfigurationService() {
        if(is_null($this->installmentPlanConfigurationService)){
            $this->installmentPlanConfigurationService = new \Wallee\Sdk\Service\InstallmentPlanConfigurationService($this);
        }
        return $this->installmentPlanConfigurationService;
    }
    
    protected $installmentPlanSliceConfigurationService;

    /**
     * @return \Wallee\Sdk\Service\InstallmentPlanSliceConfigurationService
     */
    public function getInstallmentPlanSliceConfigurationService() {
        if(is_null($this->installmentPlanSliceConfigurationService)){
            $this->installmentPlanSliceConfigurationService = new \Wallee\Sdk\Service\InstallmentPlanSliceConfigurationService($this);
        }
        return $this->installmentPlanSliceConfigurationService;
    }
    
    protected $internalTransferBankTransactionService;

    /**
     * @return \Wallee\Sdk\Service\InternalTransferBankTransactionService
     */
    public function getInternalTransferBankTransactionService() {
        if(is_null($this->internalTransferBankTransactionService)){
            $this->internalTransferBankTransactionService = new \Wallee\Sdk\Service\InternalTransferBankTransactionService($this);
        }
        return $this->internalTransferBankTransactionService;
    }
    
    protected $labelDescriptionGroupService;

    /**
     * @return \Wallee\Sdk\Service\LabelDescriptionGroupService
     */
    public function getLabelDescriptionGroupService() {
        if(is_null($this->labelDescriptionGroupService)){
            $this->labelDescriptionGroupService = new \Wallee\Sdk\Service\LabelDescriptionGroupService($this);
        }
        return $this->labelDescriptionGroupService;
    }
    
    protected $labelDescriptionService;

    /**
     * @return \Wallee\Sdk\Service\LabelDescriptionService
     */
    public function getLabelDescriptionService() {
        if(is_null($this->labelDescriptionService)){
            $this->labelDescriptionService = new \Wallee\Sdk\Service\LabelDescriptionService($this);
        }
        return $this->labelDescriptionService;
    }
    
    protected $languageService;

    /**
     * @return \Wallee\Sdk\Service\LanguageService
     */
    public function getLanguageService() {
        if(is_null($this->languageService)){
            $this->languageService = new \Wallee\Sdk\Service\LanguageService($this);
        }
        return $this->languageService;
    }
    
    protected $legalOrganizationFormService;

    /**
     * @return \Wallee\Sdk\Service\LegalOrganizationFormService
     */
    public function getLegalOrganizationFormService() {
        if(is_null($this->legalOrganizationFormService)){
            $this->legalOrganizationFormService = new \Wallee\Sdk\Service\LegalOrganizationFormService($this);
        }
        return $this->legalOrganizationFormService;
    }
    
    protected $manualTaskService;

    /**
     * @return \Wallee\Sdk\Service\ManualTaskService
     */
    public function getManualTaskService() {
        if(is_null($this->manualTaskService)){
            $this->manualTaskService = new \Wallee\Sdk\Service\ManualTaskService($this);
        }
        return $this->manualTaskService;
    }
    
    protected $merticUsageService;

    /**
     * @return \Wallee\Sdk\Service\MerticUsageService
     */
    public function getMerticUsageService() {
        if(is_null($this->merticUsageService)){
            $this->merticUsageService = new \Wallee\Sdk\Service\MerticUsageService($this);
        }
        return $this->merticUsageService;
    }
    
    protected $paymentConnectorConfigurationService;

    /**
     * @return \Wallee\Sdk\Service\PaymentConnectorConfigurationService
     */
    public function getPaymentConnectorConfigurationService() {
        if(is_null($this->paymentConnectorConfigurationService)){
            $this->paymentConnectorConfigurationService = new \Wallee\Sdk\Service\PaymentConnectorConfigurationService($this);
        }
        return $this->paymentConnectorConfigurationService;
    }
    
    protected $paymentConnectorService;

    /**
     * @return \Wallee\Sdk\Service\PaymentConnectorService
     */
    public function getPaymentConnectorService() {
        if(is_null($this->paymentConnectorService)){
            $this->paymentConnectorService = new \Wallee\Sdk\Service\PaymentConnectorService($this);
        }
        return $this->paymentConnectorService;
    }
    
    protected $paymentLinkService;

    /**
     * @return \Wallee\Sdk\Service\PaymentLinkService
     */
    public function getPaymentLinkService() {
        if(is_null($this->paymentLinkService)){
            $this->paymentLinkService = new \Wallee\Sdk\Service\PaymentLinkService($this);
        }
        return $this->paymentLinkService;
    }
    
    protected $paymentMethodBrandService;

    /**
     * @return \Wallee\Sdk\Service\PaymentMethodBrandService
     */
    public function getPaymentMethodBrandService() {
        if(is_null($this->paymentMethodBrandService)){
            $this->paymentMethodBrandService = new \Wallee\Sdk\Service\PaymentMethodBrandService($this);
        }
        return $this->paymentMethodBrandService;
    }
    
    protected $paymentMethodConfigurationService;

    /**
     * @return \Wallee\Sdk\Service\PaymentMethodConfigurationService
     */
    public function getPaymentMethodConfigurationService() {
        if(is_null($this->paymentMethodConfigurationService)){
            $this->paymentMethodConfigurationService = new \Wallee\Sdk\Service\PaymentMethodConfigurationService($this);
        }
        return $this->paymentMethodConfigurationService;
    }
    
    protected $paymentMethodService;

    /**
     * @return \Wallee\Sdk\Service\PaymentMethodService
     */
    public function getPaymentMethodService() {
        if(is_null($this->paymentMethodService)){
            $this->paymentMethodService = new \Wallee\Sdk\Service\PaymentMethodService($this);
        }
        return $this->paymentMethodService;
    }
    
    protected $paymentProcessorConfigurationService;

    /**
     * @return \Wallee\Sdk\Service\PaymentProcessorConfigurationService
     */
    public function getPaymentProcessorConfigurationService() {
        if(is_null($this->paymentProcessorConfigurationService)){
            $this->paymentProcessorConfigurationService = new \Wallee\Sdk\Service\PaymentProcessorConfigurationService($this);
        }
        return $this->paymentProcessorConfigurationService;
    }
    
    protected $paymentProcessorService;

    /**
     * @return \Wallee\Sdk\Service\PaymentProcessorService
     */
    public function getPaymentProcessorService() {
        if(is_null($this->paymentProcessorService)){
            $this->paymentProcessorService = new \Wallee\Sdk\Service\PaymentProcessorService($this);
        }
        return $this->paymentProcessorService;
    }
    
    protected $paymentTerminalService;

    /**
     * @return \Wallee\Sdk\Service\PaymentTerminalService
     */
    public function getPaymentTerminalService() {
        if(is_null($this->paymentTerminalService)){
            $this->paymentTerminalService = new \Wallee\Sdk\Service\PaymentTerminalService($this);
        }
        return $this->paymentTerminalService;
    }
    
    protected $paymentTerminalTillService;

    /**
     * @return \Wallee\Sdk\Service\PaymentTerminalTillService
     */
    public function getPaymentTerminalTillService() {
        if(is_null($this->paymentTerminalTillService)){
            $this->paymentTerminalTillService = new \Wallee\Sdk\Service\PaymentTerminalTillService($this);
        }
        return $this->paymentTerminalTillService;
    }
    
    protected $permissionService;

    /**
     * @return \Wallee\Sdk\Service\PermissionService
     */
    public function getPermissionService() {
        if(is_null($this->permissionService)){
            $this->permissionService = new \Wallee\Sdk\Service\PermissionService($this);
        }
        return $this->permissionService;
    }
    
    protected $refundBankTransactionService;

    /**
     * @return \Wallee\Sdk\Service\RefundBankTransactionService
     */
    public function getRefundBankTransactionService() {
        if(is_null($this->refundBankTransactionService)){
            $this->refundBankTransactionService = new \Wallee\Sdk\Service\RefundBankTransactionService($this);
        }
        return $this->refundBankTransactionService;
    }
    
    protected $refundCommentService;

    /**
     * @return \Wallee\Sdk\Service\RefundCommentService
     */
    public function getRefundCommentService() {
        if(is_null($this->refundCommentService)){
            $this->refundCommentService = new \Wallee\Sdk\Service\RefundCommentService($this);
        }
        return $this->refundCommentService;
    }
    
    protected $refundRecoveryBankTransactionService;

    /**
     * @return \Wallee\Sdk\Service\RefundRecoveryBankTransactionService
     */
    public function getRefundRecoveryBankTransactionService() {
        if(is_null($this->refundRecoveryBankTransactionService)){
            $this->refundRecoveryBankTransactionService = new \Wallee\Sdk\Service\RefundRecoveryBankTransactionService($this);
        }
        return $this->refundRecoveryBankTransactionService;
    }
    
    protected $refundService;

    /**
     * @return \Wallee\Sdk\Service\RefundService
     */
    public function getRefundService() {
        if(is_null($this->refundService)){
            $this->refundService = new \Wallee\Sdk\Service\RefundService($this);
        }
        return $this->refundService;
    }
    
    protected $shopifyRecurringOrderService;

    /**
     * @return \Wallee\Sdk\Service\ShopifyRecurringOrderService
     */
    public function getShopifyRecurringOrderService() {
        if(is_null($this->shopifyRecurringOrderService)){
            $this->shopifyRecurringOrderService = new \Wallee\Sdk\Service\ShopifyRecurringOrderService($this);
        }
        return $this->shopifyRecurringOrderService;
    }
    
    protected $shopifySubscriberService;

    /**
     * @return \Wallee\Sdk\Service\ShopifySubscriberService
     */
    public function getShopifySubscriberService() {
        if(is_null($this->shopifySubscriberService)){
            $this->shopifySubscriberService = new \Wallee\Sdk\Service\ShopifySubscriberService($this);
        }
        return $this->shopifySubscriberService;
    }
    
    protected $shopifySubscriptionProductService;

    /**
     * @return \Wallee\Sdk\Service\ShopifySubscriptionProductService
     */
    public function getShopifySubscriptionProductService() {
        if(is_null($this->shopifySubscriptionProductService)){
            $this->shopifySubscriptionProductService = new \Wallee\Sdk\Service\ShopifySubscriptionProductService($this);
        }
        return $this->shopifySubscriptionProductService;
    }
    
    protected $shopifySubscriptionService;

    /**
     * @return \Wallee\Sdk\Service\ShopifySubscriptionService
     */
    public function getShopifySubscriptionService() {
        if(is_null($this->shopifySubscriptionService)){
            $this->shopifySubscriptionService = new \Wallee\Sdk\Service\ShopifySubscriptionService($this);
        }
        return $this->shopifySubscriptionService;
    }
    
    protected $shopifySubscriptionSuspensionService;

    /**
     * @return \Wallee\Sdk\Service\ShopifySubscriptionSuspensionService
     */
    public function getShopifySubscriptionSuspensionService() {
        if(is_null($this->shopifySubscriptionSuspensionService)){
            $this->shopifySubscriptionSuspensionService = new \Wallee\Sdk\Service\ShopifySubscriptionSuspensionService($this);
        }
        return $this->shopifySubscriptionSuspensionService;
    }
    
    protected $shopifySubscriptionVersionService;

    /**
     * @return \Wallee\Sdk\Service\ShopifySubscriptionVersionService
     */
    public function getShopifySubscriptionVersionService() {
        if(is_null($this->shopifySubscriptionVersionService)){
            $this->shopifySubscriptionVersionService = new \Wallee\Sdk\Service\ShopifySubscriptionVersionService($this);
        }
        return $this->shopifySubscriptionVersionService;
    }
    
    protected $shopifyTransactionService;

    /**
     * @return \Wallee\Sdk\Service\ShopifyTransactionService
     */
    public function getShopifyTransactionService() {
        if(is_null($this->shopifyTransactionService)){
            $this->shopifyTransactionService = new \Wallee\Sdk\Service\ShopifyTransactionService($this);
        }
        return $this->shopifyTransactionService;
    }
    
    protected $spaceService;

    /**
     * @return \Wallee\Sdk\Service\SpaceService
     */
    public function getSpaceService() {
        if(is_null($this->spaceService)){
            $this->spaceService = new \Wallee\Sdk\Service\SpaceService($this);
        }
        return $this->spaceService;
    }
    
    protected $staticValueService;

    /**
     * @return \Wallee\Sdk\Service\StaticValueService
     */
    public function getStaticValueService() {
        if(is_null($this->staticValueService)){
            $this->staticValueService = new \Wallee\Sdk\Service\StaticValueService($this);
        }
        return $this->staticValueService;
    }
    
    protected $subscriberService;

    /**
     * @return \Wallee\Sdk\Service\SubscriberService
     */
    public function getSubscriberService() {
        if(is_null($this->subscriberService)){
            $this->subscriberService = new \Wallee\Sdk\Service\SubscriberService($this);
        }
        return $this->subscriberService;
    }
    
    protected $subscriptionAffiliateService;

    /**
     * @return \Wallee\Sdk\Service\SubscriptionAffiliateService
     */
    public function getSubscriptionAffiliateService() {
        if(is_null($this->subscriptionAffiliateService)){
            $this->subscriptionAffiliateService = new \Wallee\Sdk\Service\SubscriptionAffiliateService($this);
        }
        return $this->subscriptionAffiliateService;
    }
    
    protected $subscriptionChargeService;

    /**
     * @return \Wallee\Sdk\Service\SubscriptionChargeService
     */
    public function getSubscriptionChargeService() {
        if(is_null($this->subscriptionChargeService)){
            $this->subscriptionChargeService = new \Wallee\Sdk\Service\SubscriptionChargeService($this);
        }
        return $this->subscriptionChargeService;
    }
    
    protected $subscriptionLedgerEntryService;

    /**
     * @return \Wallee\Sdk\Service\SubscriptionLedgerEntryService
     */
    public function getSubscriptionLedgerEntryService() {
        if(is_null($this->subscriptionLedgerEntryService)){
            $this->subscriptionLedgerEntryService = new \Wallee\Sdk\Service\SubscriptionLedgerEntryService($this);
        }
        return $this->subscriptionLedgerEntryService;
    }
    
    protected $subscriptionMetricService;

    /**
     * @return \Wallee\Sdk\Service\SubscriptionMetricService
     */
    public function getSubscriptionMetricService() {
        if(is_null($this->subscriptionMetricService)){
            $this->subscriptionMetricService = new \Wallee\Sdk\Service\SubscriptionMetricService($this);
        }
        return $this->subscriptionMetricService;
    }
    
    protected $subscriptionMetricUsageService;

    /**
     * @return \Wallee\Sdk\Service\SubscriptionMetricUsageService
     */
    public function getSubscriptionMetricUsageService() {
        if(is_null($this->subscriptionMetricUsageService)){
            $this->subscriptionMetricUsageService = new \Wallee\Sdk\Service\SubscriptionMetricUsageService($this);
        }
        return $this->subscriptionMetricUsageService;
    }
    
    protected $subscriptionPeriodBillService;

    /**
     * @return \Wallee\Sdk\Service\SubscriptionPeriodBillService
     */
    public function getSubscriptionPeriodBillService() {
        if(is_null($this->subscriptionPeriodBillService)){
            $this->subscriptionPeriodBillService = new \Wallee\Sdk\Service\SubscriptionPeriodBillService($this);
        }
        return $this->subscriptionPeriodBillService;
    }
    
    protected $subscriptionProductComponentGroupService;

    /**
     * @return \Wallee\Sdk\Service\SubscriptionProductComponentGroupService
     */
    public function getSubscriptionProductComponentGroupService() {
        if(is_null($this->subscriptionProductComponentGroupService)){
            $this->subscriptionProductComponentGroupService = new \Wallee\Sdk\Service\SubscriptionProductComponentGroupService($this);
        }
        return $this->subscriptionProductComponentGroupService;
    }
    
    protected $subscriptionProductComponentService;

    /**
     * @return \Wallee\Sdk\Service\SubscriptionProductComponentService
     */
    public function getSubscriptionProductComponentService() {
        if(is_null($this->subscriptionProductComponentService)){
            $this->subscriptionProductComponentService = new \Wallee\Sdk\Service\SubscriptionProductComponentService($this);
        }
        return $this->subscriptionProductComponentService;
    }
    
    protected $subscriptionProductFeeTierService;

    /**
     * @return \Wallee\Sdk\Service\SubscriptionProductFeeTierService
     */
    public function getSubscriptionProductFeeTierService() {
        if(is_null($this->subscriptionProductFeeTierService)){
            $this->subscriptionProductFeeTierService = new \Wallee\Sdk\Service\SubscriptionProductFeeTierService($this);
        }
        return $this->subscriptionProductFeeTierService;
    }
    
    protected $subscriptionProductMeteredFeeService;

    /**
     * @return \Wallee\Sdk\Service\SubscriptionProductMeteredFeeService
     */
    public function getSubscriptionProductMeteredFeeService() {
        if(is_null($this->subscriptionProductMeteredFeeService)){
            $this->subscriptionProductMeteredFeeService = new \Wallee\Sdk\Service\SubscriptionProductMeteredFeeService($this);
        }
        return $this->subscriptionProductMeteredFeeService;
    }
    
    protected $subscriptionProductPeriodFeeService;

    /**
     * @return \Wallee\Sdk\Service\SubscriptionProductPeriodFeeService
     */
    public function getSubscriptionProductPeriodFeeService() {
        if(is_null($this->subscriptionProductPeriodFeeService)){
            $this->subscriptionProductPeriodFeeService = new \Wallee\Sdk\Service\SubscriptionProductPeriodFeeService($this);
        }
        return $this->subscriptionProductPeriodFeeService;
    }
    
    protected $subscriptionProductRetirementService;

    /**
     * @return \Wallee\Sdk\Service\SubscriptionProductRetirementService
     */
    public function getSubscriptionProductRetirementService() {
        if(is_null($this->subscriptionProductRetirementService)){
            $this->subscriptionProductRetirementService = new \Wallee\Sdk\Service\SubscriptionProductRetirementService($this);
        }
        return $this->subscriptionProductRetirementService;
    }
    
    protected $subscriptionProductService;

    /**
     * @return \Wallee\Sdk\Service\SubscriptionProductService
     */
    public function getSubscriptionProductService() {
        if(is_null($this->subscriptionProductService)){
            $this->subscriptionProductService = new \Wallee\Sdk\Service\SubscriptionProductService($this);
        }
        return $this->subscriptionProductService;
    }
    
    protected $subscriptionProductSetupFeeService;

    /**
     * @return \Wallee\Sdk\Service\SubscriptionProductSetupFeeService
     */
    public function getSubscriptionProductSetupFeeService() {
        if(is_null($this->subscriptionProductSetupFeeService)){
            $this->subscriptionProductSetupFeeService = new \Wallee\Sdk\Service\SubscriptionProductSetupFeeService($this);
        }
        return $this->subscriptionProductSetupFeeService;
    }
    
    protected $subscriptionProductVersionRetirementService;

    /**
     * @return \Wallee\Sdk\Service\SubscriptionProductVersionRetirementService
     */
    public function getSubscriptionProductVersionRetirementService() {
        if(is_null($this->subscriptionProductVersionRetirementService)){
            $this->subscriptionProductVersionRetirementService = new \Wallee\Sdk\Service\SubscriptionProductVersionRetirementService($this);
        }
        return $this->subscriptionProductVersionRetirementService;
    }
    
    protected $subscriptionProductVersionService;

    /**
     * @return \Wallee\Sdk\Service\SubscriptionProductVersionService
     */
    public function getSubscriptionProductVersionService() {
        if(is_null($this->subscriptionProductVersionService)){
            $this->subscriptionProductVersionService = new \Wallee\Sdk\Service\SubscriptionProductVersionService($this);
        }
        return $this->subscriptionProductVersionService;
    }
    
    protected $subscriptionService;

    /**
     * @return \Wallee\Sdk\Service\SubscriptionService
     */
    public function getSubscriptionService() {
        if(is_null($this->subscriptionService)){
            $this->subscriptionService = new \Wallee\Sdk\Service\SubscriptionService($this);
        }
        return $this->subscriptionService;
    }
    
    protected $subscriptionSuspensionService;

    /**
     * @return \Wallee\Sdk\Service\SubscriptionSuspensionService
     */
    public function getSubscriptionSuspensionService() {
        if(is_null($this->subscriptionSuspensionService)){
            $this->subscriptionSuspensionService = new \Wallee\Sdk\Service\SubscriptionSuspensionService($this);
        }
        return $this->subscriptionSuspensionService;
    }
    
    protected $subscriptionVersionService;

    /**
     * @return \Wallee\Sdk\Service\SubscriptionVersionService
     */
    public function getSubscriptionVersionService() {
        if(is_null($this->subscriptionVersionService)){
            $this->subscriptionVersionService = new \Wallee\Sdk\Service\SubscriptionVersionService($this);
        }
        return $this->subscriptionVersionService;
    }
    
    protected $tokenService;

    /**
     * @return \Wallee\Sdk\Service\TokenService
     */
    public function getTokenService() {
        if(is_null($this->tokenService)){
            $this->tokenService = new \Wallee\Sdk\Service\TokenService($this);
        }
        return $this->tokenService;
    }
    
    protected $tokenVersionService;

    /**
     * @return \Wallee\Sdk\Service\TokenVersionService
     */
    public function getTokenVersionService() {
        if(is_null($this->tokenVersionService)){
            $this->tokenVersionService = new \Wallee\Sdk\Service\TokenVersionService($this);
        }
        return $this->tokenVersionService;
    }
    
    protected $transactionCommentService;

    /**
     * @return \Wallee\Sdk\Service\TransactionCommentService
     */
    public function getTransactionCommentService() {
        if(is_null($this->transactionCommentService)){
            $this->transactionCommentService = new \Wallee\Sdk\Service\TransactionCommentService($this);
        }
        return $this->transactionCommentService;
    }
    
    protected $transactionCompletionService;

    /**
     * @return \Wallee\Sdk\Service\TransactionCompletionService
     */
    public function getTransactionCompletionService() {
        if(is_null($this->transactionCompletionService)){
            $this->transactionCompletionService = new \Wallee\Sdk\Service\TransactionCompletionService($this);
        }
        return $this->transactionCompletionService;
    }
    
    protected $transactionIframeService;

    /**
     * @return \Wallee\Sdk\Service\TransactionIframeService
     */
    public function getTransactionIframeService() {
        if(is_null($this->transactionIframeService)){
            $this->transactionIframeService = new \Wallee\Sdk\Service\TransactionIframeService($this);
        }
        return $this->transactionIframeService;
    }
    
    protected $transactionInvoiceCommentService;

    /**
     * @return \Wallee\Sdk\Service\TransactionInvoiceCommentService
     */
    public function getTransactionInvoiceCommentService() {
        if(is_null($this->transactionInvoiceCommentService)){
            $this->transactionInvoiceCommentService = new \Wallee\Sdk\Service\TransactionInvoiceCommentService($this);
        }
        return $this->transactionInvoiceCommentService;
    }
    
    protected $transactionInvoiceService;

    /**
     * @return \Wallee\Sdk\Service\TransactionInvoiceService
     */
    public function getTransactionInvoiceService() {
        if(is_null($this->transactionInvoiceService)){
            $this->transactionInvoiceService = new \Wallee\Sdk\Service\TransactionInvoiceService($this);
        }
        return $this->transactionInvoiceService;
    }
    
    protected $transactionLightboxService;

    /**
     * @return \Wallee\Sdk\Service\TransactionLightboxService
     */
    public function getTransactionLightboxService() {
        if(is_null($this->transactionLightboxService)){
            $this->transactionLightboxService = new \Wallee\Sdk\Service\TransactionLightboxService($this);
        }
        return $this->transactionLightboxService;
    }
    
    protected $transactionMobileSdkService;

    /**
     * @return \Wallee\Sdk\Service\TransactionMobileSdkService
     */
    public function getTransactionMobileSdkService() {
        if(is_null($this->transactionMobileSdkService)){
            $this->transactionMobileSdkService = new \Wallee\Sdk\Service\TransactionMobileSdkService($this);
        }
        return $this->transactionMobileSdkService;
    }
    
    protected $transactionPaymentPageService;

    /**
     * @return \Wallee\Sdk\Service\TransactionPaymentPageService
     */
    public function getTransactionPaymentPageService() {
        if(is_null($this->transactionPaymentPageService)){
            $this->transactionPaymentPageService = new \Wallee\Sdk\Service\TransactionPaymentPageService($this);
        }
        return $this->transactionPaymentPageService;
    }
    
    protected $transactionService;

    /**
     * @return \Wallee\Sdk\Service\TransactionService
     */
    public function getTransactionService() {
        if(is_null($this->transactionService)){
            $this->transactionService = new \Wallee\Sdk\Service\TransactionService($this);
        }
        return $this->transactionService;
    }
    
    protected $transactionTerminalService;

    /**
     * @return \Wallee\Sdk\Service\TransactionTerminalService
     */
    public function getTransactionTerminalService() {
        if(is_null($this->transactionTerminalService)){
            $this->transactionTerminalService = new \Wallee\Sdk\Service\TransactionTerminalService($this);
        }
        return $this->transactionTerminalService;
    }
    
    protected $transactionVoidService;

    /**
     * @return \Wallee\Sdk\Service\TransactionVoidService
     */
    public function getTransactionVoidService() {
        if(is_null($this->transactionVoidService)){
            $this->transactionVoidService = new \Wallee\Sdk\Service\TransactionVoidService($this);
        }
        return $this->transactionVoidService;
    }
    
    protected $userAccountRoleService;

    /**
     * @return \Wallee\Sdk\Service\UserAccountRoleService
     */
    public function getUserAccountRoleService() {
        if(is_null($this->userAccountRoleService)){
            $this->userAccountRoleService = new \Wallee\Sdk\Service\UserAccountRoleService($this);
        }
        return $this->userAccountRoleService;
    }
    
    protected $userSpaceRoleService;

    /**
     * @return \Wallee\Sdk\Service\UserSpaceRoleService
     */
    public function getUserSpaceRoleService() {
        if(is_null($this->userSpaceRoleService)){
            $this->userSpaceRoleService = new \Wallee\Sdk\Service\UserSpaceRoleService($this);
        }
        return $this->userSpaceRoleService;
    }
    
    protected $webAppService;

    /**
     * @return \Wallee\Sdk\Service\WebAppService
     */
    public function getWebAppService() {
        if(is_null($this->webAppService)){
            $this->webAppService = new \Wallee\Sdk\Service\WebAppService($this);
        }
        return $this->webAppService;
    }
    
    protected $webhookListenerService;

    /**
     * @return \Wallee\Sdk\Service\WebhookListenerService
     */
    public function getWebhookListenerService() {
        if(is_null($this->webhookListenerService)){
            $this->webhookListenerService = new \Wallee\Sdk\Service\WebhookListenerService($this);
        }
        return $this->webhookListenerService;
    }
    
    protected $webhookUrlService;

    /**
     * @return \Wallee\Sdk\Service\WebhookUrlService
     */
    public function getWebhookUrlService() {
        if(is_null($this->webhookUrlService)){
            $this->webhookUrlService = new \Wallee\Sdk\Service\WebhookUrlService($this);
        }
        return $this->webhookUrlService;
    }
    

}
