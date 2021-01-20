<main id="insert">
	<?php
		/**
		 * Syntax: form_open_multipart("controller/method", array("name" => "name_of_the_form"))
		 * @requires $autoload['helper'] = array('form');
		 */
		echo form_open_multipart("products/create", array("name" => "product_insert"));
	?>
		<h2>INSERT NEW PRODUCT</h2>
		<br/>
		<hr/>
		<br/>

		<label>Name: </label>
		<input type="text" required="" name="name" />

		<br/><br/>

		<label>Price: </label>
		<input type="text" required="" name="price" />

		<br/><br/>

		<label>Category: </label><br/>
		<select name="category">
			<?php foreach ($categories as $c) : ?>
				<option value="<?= $c['id_category'] ?>"> <?= $c["cat_name"] ?> </option>
			<?php endforeach; ?>
		</select>

		<br/><br/>

		<label>Image: </label>
		<input type="file" name="userfile" size="32" />

		<br/><br/>
		<input type="submit" value="INSERT PRODUCT" />
	</form>
</main>