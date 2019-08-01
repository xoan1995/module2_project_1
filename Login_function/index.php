<?php
$url = "tsconfig.json";
$data = file_get_contents($url);
$character = json_decode($data, true);
foreach ($character as $character) {
    echo $character['username'] . '<br>';
} ?>
<html>
<head>
    <title>Chuc nang dang nhap</title>
</head>
<style type="text/css">
    .login {
        height: 180px;
        width: 230px;
        margin: 0;
        padding: 10px;
        border: 1px #CCC solid;

    }

    .login input {
        padding: 4px;
        margin: 4px
    }
</style>
<body>
<form method="post">
    <div class="login">
        <h2>Login</h2>
        <input type="text" name="username" size="30" placeholder="username"/>
        <input type="password" name="password" size="30" placeholder="password"/>
        <input type="submit" value="Sign in"/>
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $user = [
            'username' => $username,
            'password' => $password
        ];
        array_push($character, $username);
        $dataNewJson = json_decode($character, $user);
        file_put_contents($url, $dataNewJson);
        header('Location:tsconfig.json');
    }
    ?>
</form>
</body>
</html>
