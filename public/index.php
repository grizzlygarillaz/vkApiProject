<?php
use Classes\Users\Users as User;

unset($errorMessage);

if (isset($_POST["exit"])) {
    unset($_SESSION["user"]);
}

if (isset($_POST["submit"])) {
    $user = new User();
    $login = $_POST["login"];
    $password = $_POST["password"];

    try {
        if ($user->verifyUser($login, $password))
            $_SESSION["user"] = true;
    }
    catch (Exception $e){
        $errorMessage = $e->getMessage();
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ad app</title>
    <link rel="stylesheet" href="/public/css/bootstrap.css">
    <link rel="stylesheet" href="/public/css/style.css">
    <script src="/public/js/bootstrap.js"></script>
</head>
<body>
<header>

</header>
    <?php
        if (isset($_SESSION["user"])) :
    ?>
        <form action="/" method="post" class="m-2">
            <button class="btn btn-secondary" type="submit" name="exit">Выйти</button>
        </form>
    <?php
    endif;
    ?>
<div class="content justify-content-center d-flex">
    <?php
        isset($_SESSION["user"]) ?
            require_once $_SERVER["DOCUMENT_ROOT"] . "/public/pages/table/index.php" :
            require_once $_SERVER["DOCUMENT_ROOT"] . "/public/pages/auth/index.php";
    ?>
</div>

<footer>

</footer>
</body>
</html>