<?php

require_once('main.php');
$db = Db::getInstance();

if ($_POST["type"] == "addq") {
    $record = $db->first("SELECT * FROM `main` WHERE id=:id", array(
        'id' => $_POST["id"],
    ));

    if (count($record) == 0) {
        $rrr = $db->insert("INSERT INTO main (id, showone, showtwo) VALUE (:id, :showone, :showtwo)", array(
            'id' => $_POST["id"],
            'showone' => $_POST["showone"],
            'showtwo' => $_POST["showtwo"],
        ));

        echo $rrr;
    } else {
        echo 'قبلا این ایدی وجود دارد';
    }
} else if ($_POST["type"] == "addc") {
    $record = $db->first("SELECT * FROM `main` WHERE id=:id", array(
        'id' => $_POST["id"],
    ));

    if (count($record) == 0) {
        $rrr = $db->insert("INSERT INTO main (id, showone) VALUE (:id, :showone)", array(
            'id' => $_POST["id"],
            'showone' => $_POST["showone"],
        ));


        echo $rrr;
    } else {
        echo 'قبلا این ایدی وجود دارد';
    }
} else if ($_POST["type"] == "show") {
    $rrr = $db->query("SELECT * FROM `main` WHERE id=:id", array(
        'id' => $_POST["id"],
    ));


    echo json_encode($rrr);
} else if ($_POST["type"] == "del") {
    $rrr = $db->modify("DELETE FROM `main` WHERE id=:id", array(
        'id' => $_POST["id"],
    ));


    echo $rrr;
} else if ($_POST["type"] == "updq") {
    $rrr = $db->modify("UPDATE `main` SET `showone`=:showone,`showtwo`=:showtwo WHERE id=:id", array(
        'id' => $_POST["id"],
        'showone' => $_POST["showone"],
        'showtwo' => $_POST["showtwo"],
    ));


    echo $rrr;
} else if ($_POST["type"] == "updc") {
    $rrr = $db->modify("UPDATE `main` SET `showone`=:showone WHERE id=:id", array(
        'id' => $_POST["id"],
        'showone' => $_POST["showone"],
    ));


    echo $rrr;
}