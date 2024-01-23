<?php
require($_SERVER['DOCUMENT_ROOT'] . "/friends4sale/env_config/db_connect.php");
include($_SERVER['DOCUMENT_ROOT'] . "/friends4sale/components/header.php");
?>

<style>
.auth-container {
    display: flex;
    justify-content: space-between;
    max-width: 600px;
    margin: auto;
}

.form-container {
    flex: 1;
    margin: 10px;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.form-container input {
    display: block;
    width: 100%;
    margin-bottom: 10px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.form-container button {
    display: block;
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: #007bff;
    color: white;
    cursor: pointer;
}

.or-divider {
    flex: 0.1;
    margin: 10px;
    padding: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
}
</style>

<div class="auth-container">
    <!-- Login form -->
    <div class="form-container">
        <h2>Login</h2>
        <form action="login.php" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>

    <div class="or-divider">
        <span>OR</span>
    </div>

    <!-- Register form -->
    <div class="form-container">
        <h2>Register</h2>
        <form action="register.php" method="post" id="registerForm">
            <input type="text" name="display_name" placeholder="Display Name" required>
            <input type="text" name="email" placeholder="Email" required>
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <input type="password" id="password2" name="password2" placeholder="Re-enter Password" required>
            <button type="submit">Register</button>
        </form>
    </div>
</div>

<script>
document.getElementById('registerForm').addEventListener('submit', function(event) {
    var password = document.getElementById('password').value;
    var password2 = document.getElementById('password2').value;

    if (password !== password2) {
        alert('Passwords do not match.');
        event.preventDefault(); // Prevent form submission
    }
});
</script>