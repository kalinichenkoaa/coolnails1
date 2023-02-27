<?php
    $db_host='localhost'; // ваш хост
    $db_name='diplom'; // ваша бд
    $db_user='root'; // пользователь бд
    $db_pass=''; // пароль к бд
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);// включаем сообщения об ошибках
    $mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name); // коннект с сервером бд
    $mysqli->set_charset("utf8mb4"); // задаем кодировку
?>