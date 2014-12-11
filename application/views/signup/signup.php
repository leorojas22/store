<?php echo form_open("sign-up"); ?>

<label>Email Address: </label>
<input type='text' name='email' value='<?php echo set_value("email"); ?>' class='textBox'>
<br>

<label>Password: </label>
<input type='password' name='password' class='textBox'>
<br>

<label>Confirm Password: </label>
<input type='password' name='confirmpass' class='textBox'>
<br>

<label>First Name: </label>
<input type='text' name='firstname' value='<?php echo set_value("firstname"); ?>' class='textBox'>
<br>

<label>Last Name: </label>
<input type='text' name='lastname' value='<?php echo set_value("lastname"); ?>' class='textBox'>
<br>

<label>Address: </label>
<input type='text' name='address' value='<?php echo set_value("address"); ?>' class='textBox'>
<br>

<label>City: </label>
<input type='text' name='city' value='<?php echo set_value("city"); ?>' class='textBox'>
<br>

<label>State: </label>
<input type='text' name='state' value='<?php echo set_value("state"); ?>' class='textBox'>
<br>

<label>Zip: </label>
<input type='text' name='zip' value='<?php echo set_value("zip"); ?>' class='textBox'>
<br>

<label>Phone: </label>
<input type='text' name='phone' value='<?php echo set_value("phone"); ?>' class='textBox'>
<br>

<p align='center'>
	<input type='submit' name='submit' class='submitButton' value='Sign Up'>
</p>

</form>