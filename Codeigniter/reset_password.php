<!-- application/views/auth/reset_password.php -->

<h2>Reset Password</h2>
<?php echo form_open('auth/reset_password/' . $token); ?>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required><br>

    <label for="password_confirmation">Confirm Password:</label>
    <input type="password" name="password_confirmation" id="password_confirmation" required><br>

    <button type="submit">Reset Password</button>
<?php echo form_close(); ?>
