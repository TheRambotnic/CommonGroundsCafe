<p>
	<img src="<?= base_url(); ?>assets/uploads/<?= $returned_products['p_img_id']; ?>" height="150" width="150" />
	<br/>
	<strong><?= $returned_products["p_name"]; ?></strong>
	<br/>
	$<?= $returned_products["p_price"]; ?>
	<br/>
	<u><?= $returned_products["cat_name"]; ?></u>
</p>