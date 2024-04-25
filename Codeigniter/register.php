<!-- application/views/auth/register.php -->

<h2>Register</h2>
<?php echo form_open('auth/register'); ?>
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required><br>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required><br>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required><br>

    <button type="submit">Register</button>
<?php echo form_close(); ?>
