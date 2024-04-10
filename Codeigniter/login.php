<!-- application/views/auth/login.php -->

<h2>Login</h2>
<?php echo form_open('auth/login'); ?>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required><br>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required><br>

    <button type="submit">Login</button>
<?php echo form_close(); ?>
