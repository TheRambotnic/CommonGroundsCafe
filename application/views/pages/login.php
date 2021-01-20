<main id="insert">
	<?php
		/**
		 * Syntax: form_open_multipart("controller/method", array("name" => "name_of_the_form"))
		 * @requires $autoload['helper'] = array('form');
		 */
		echo form_open_multipart("users/login", array("name" => "login"));
	?>
		<h2>LOGIN TO YOUR ACCOUNT</h2>
		<br/>
		<hr/>
		<br/>

		<label>Username: </label>
		<input type="text" required="" name="username" />

		<br/><br/>

		<label>Password: </label>
		<input type="password" required="" id="pwd" name="password" />
		<label><input type="checkbox" id="show-pwd" onclick="showPassword();" /> Show password</label>

		<br/><br/>
		<input type="submit" value="LOGIN" />
	</form>

	<script type="text/javascript">
		function showPassword() {
			var input = document.getElementById("pwd");

			if (input.type == "password")
				input.type = "text";
			else
				input.type = "password";
		}
	</script>
</main>