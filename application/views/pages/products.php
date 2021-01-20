<main id="products">
	<div class="cold-beverages">
		<div class="category">COLD BEVERAGES</div>

		<section class="container">
			<?php
				foreach ($returned_products as $prod) :
					if ($prod["id_category"] == 1) :
			?>
				<div class="item">
					<img src="<?php echo base_url(); ?>assets/uploads/<?= $prod['p_img_id'] ?>" height="170" width="170" />
					<h3><?= $prod["p_name"]; ?></h3>
					<hr/>
					<p><?= "$".$prod["p_price"]; ?></h3>
					
					<br/><br/>

					<a href="<?php echo base_url(); ?>product/view_info/<?php echo $prod["id_product"] ?>">VIEW INFO</a>
				</div>
			<?php
					endif;
				endforeach;
			?>
		</section>
	</div>
	
	<div class="hot-beverages">
		<div class="category">HOT BEVERAGES</div>

		<section class="container">
			<?php
				foreach ($returned_products as $prod) :
					if ($prod["id_category"] == 2) :
			?>
				<div class="item">
					<img src="<?php echo base_url(); ?>assets/uploads/<?= $prod['p_img_id'] ?>" height="170" width="170" />
					<h3><?= $prod["p_name"]; ?></h3>
					<hr/>
					<p><?= "$".$prod["p_price"]; ?></h3>
					
					<br/><br/>

					<a href="<?php echo base_url(); ?>product/view_info/<?php echo $prod["id_product"] ?>">VIEW INFO</a>
				</div>
			<?php
					endif;
				endforeach;
			?>
		</section>
	</div>
	
	<div class="extras">
		<div class="category">EXTRAS</div>

		<section class="container">
			<?php
				foreach ($returned_products as $prod) :
					if ($prod["id_category"] == 3) :
			?>
				<div class="item">
					<img src="<?php echo base_url(); ?>assets/uploads/<?= $prod['p_img_id'] ?>" height="170" width="170" />
					<h3><?= $prod["p_name"]; ?></h3>
					<hr/>
					<p><?= "$".$prod["p_price"]; ?></h3>
					
					<br/><br/>

					<a href="<?php echo base_url(); ?>product/view_info/<?php echo $prod["id_product"] ?>">VIEW INFO</a>
				</div>
			<?php
					endif;
				endforeach;
			?>
		</section>
	</div>
</main>