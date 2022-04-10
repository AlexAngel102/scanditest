<?php

try {
    $pdo = new PDO("mysql:host=db;dbname=id18582452_scandi_test_app", "id18582452_alexangel102", "Petrik_st536644");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

//try {
//    $con = new mysqli(
//        "db",
//        "id18582452_alexangel102",
//        "Petrik_st536644",
//        "id18582452_scandi_test_app",
//        3306);
//    mysqli_connect(
//        "db",
//        "id18582452_alexangel102",
//        "Petrik_st536644",
//        "id18582452_scandi_test_app");
//} catch (mysqli_sql_exception $e) {
//    echo "Connection failed: " . $e->getMessage();
//}

