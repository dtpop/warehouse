<?php
/**
 * Handles shopping cart object (initially mainly for Paydirekt)
 *
 * @package GiroCheckout
 * @version $Revision: 31 $ / $Date: 2014-06-11 03:55:39 -0400 (Mi, 11 Jun 2014) $
 */


class GiroCheckout_SDK_Request_Cart {
  
  private $m_aItems = array();

  /**
   * Add item to cart.
   * 
   * @param string $p_strName Item name
   * @param integer $p_iQuantity Number of items of this kind in the cart
   * @param integer $p_iGrossAmt Gross amount (value) of the item
   * @param string $p_strEAN (optional) Item id number
   */
  public function addItem( $p_strName, $p_iQuantity, $p_iGrossAmt, $p_strEAN = "" ) {

    if( empty($p_strName) || empty($p_iQuantity) || !isset($p_iGrossAmt) ) {
      throw new GiroCheckout_SDK_Exception_helper('Name, quantity and amount are mandatory for cart items');
    }

    $aItem = array(
      "name" => $p_strName,
      "quantity" => $p_iQuantity,
      "grossAmount" => $p_iGrossAmt 
    );

    if( !empty($p_strEAN) ) {
      $aItem["ean"] = $p_strEAN;
    }
    
    $this->m_aItems[] = $aItem;
  }
  
  /**
   * Returns all items as a JSON string.
   * 
   * @return string JSON encoded item array.
   */
  public function getAllItems() {
    if( version_compare( phpversion(), '5.3.0', '<' ) ) {
      return json_encode($this->m_aItems);
    }
    else {
      return json_encode($this->m_aItems, JSON_UNESCAPED_UNICODE);
    }
  }
}