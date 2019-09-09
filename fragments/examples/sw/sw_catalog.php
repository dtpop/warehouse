<?php /*  Ausgabe der Katalog-Seite (Übersicht) */ ?>
<section class="pt30 pb50 bg_grey">
	<div class="container">
		<div class="row">
	        <?php foreach ($this->tree as $main_item) : ?>
	           <div class="col-lg-4 col-md-6 col-sm-12 mb30">
		          <div class="ab bg_white pt20 b_grey">
		              <h3 class="">
			              <a class="fontred" href="<?= rex_getUrl('', '', ['category_id' => $main_item['id']]) ?>"><?= $main_item['name_raw'] ?></a>
	                   </h3>
	
	                 <?php if ($main_item['image']) : ?>
	                  <a href="<?= rex_getUrl('', '', ['category_id' => $main_item['id']]) ?>">
		                <img src="/media/<?= $main_item['image'] ?>" alt="<?= $main_item['name_raw'] ?>" class="img-responsive mt20">
	                  </a>
	                  <?php else : ?>
	                  <a href="<?= rex_getUrl('', '', ['category_id' => $main_item['id']]) ?>">
		                <img src="/media/blind.jpg" alt="<?= $main_item['name_raw'] ?>" class="img-responsive mt20">
	                  </a>
	                  
	                  <?php endif ?>
					   <?php if (isset($main_item['level'])) : ?>
	                      <ul class="">
	                        <?php foreach ($main_item['level'] as $sub_item) : ?>
	                           <li class=""><a href="<?= rex_getUrl('', '', ['category_id' => $sub_item['id']]) ?>"><?= $sub_item['name_raw'] ?></a></li>
	                        <?php endforeach ?>
	                        </ul>
	                    <?php endif ?>
				 <div class="row pricebut">
				 	<div class="col-lg-12">
				 		<a class="btn btn-lg btn-sw btn-block checkout-btn mt20" href="<?= rex_getUrl('', '', ['category_id' => $main_item['id']]) ?>"><i class="fa fa-arrow-right"></i> Ansehen</a>
					</div>
 				 </div>                                                  
		          </div>
	                	</div>
	                <?php endforeach ?>
	    </div>
	</div>
</section>

