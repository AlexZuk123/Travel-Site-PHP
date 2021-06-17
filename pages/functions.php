<?php
function connect($host = 'localhost', $user = 'root', $pass = 'root', $dbname = 'travels-db')
{
    $link = mysqli_connect($host, $user, $pass) or die('connection error');
    mysqli_select_db($link, $dbname) or die('DB open error');
    mysqli_query($link, "set names 'utf8'");
    return $link;
}

function IntoDB()
{
    $link = connect();
    $db_selected = mysqli_select_db($link, '');
}

function register($userLogin, $userMail, $userPass1)
{
    preg_match("/^[a-zA-Z0-9]+$/", $userLogin, $matches);

    if (!$matches) {
        echo "Логин может состоять только из букв английского алфавита и цифр";
    }
    if (strlen($userLogin) < 3 or strlen($userLogin) > 30) {
        echo "Логин должен быть не меньше 3-х символов и не больше 30";
    }
}