<?php
require_once('main.php');


$db = Db::getInstance();

$rrr = $db->query("SELECT * FROM `main` WHERE `id`=:id", array(
    'id' => $_POST["id"],
));


//echo $rrr[0]['showone'];

//print_r($rrr);

echo json_encode($rrr);