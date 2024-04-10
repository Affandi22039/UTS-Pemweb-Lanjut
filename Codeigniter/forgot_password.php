<!-- application/views/auth/forgot_password.php -->

<h2>Forgot Password</h2>
<?php echo form_open('auth/forgot_password'); ?>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required><br>

    <button type="submit">Submit</button>
<?php echo form_close(); ?>
