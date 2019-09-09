<section class="bg_grey pt30 pb30">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
	    		<a class="mb20 mt20 btn btn-default btn-sm fontred" href="<?= rex_getUrl(rex_config::get('warehouse','cart_page')) ?>"><i class="fa fa-arrow-left"></i>{{ Return to cart }}</a>
		        <div class="page-title mb20">
		          <h2>{{ Checkout }}</h2>
		        </div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8">
	        	<?= html_entity_decode($this->form); ?>
			</div>
			<div class="col-lg-4">
				<h3>Rechts</h3>            
			</div>
		</div>
	</div>
</section>