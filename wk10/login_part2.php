<?php
$weakPasswords = [
    "123456",
    "123456789",
    "12345",
    "111111",
    "1234567",
    "sunshine",
    "qwerty",
    "iloveyou",
    "princess",
    "admin"
];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $password = isset($_POST["password"]) ? $_POST["password"] : "";
    $username = isset($_POST["username"]) ? $_POST["username"] : "CyberUser";

    if (in_array($password, $weakPasswords)) {
        echo "<h1>Welcome {$username} to Your Portal</h1>";
        exit;
    }
}
?>

<h1>Weak Password</h1>
<form method="post">
    <input type="hidden" name="username" value="ShadowFox">
    <label>Password</label>
    <input type="password" name="password">
    <br/>
    <input type="submit">
</form>
