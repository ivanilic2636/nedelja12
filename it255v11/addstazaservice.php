<?php
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token ,
Authorization, Token, token, TOKEN');
include("functions.php");
if(isset($_POST['ime_staze']) && isset($_POST['grad']) && isset($_POST['drzava'])){
$ime_staze = $_POST['ime_staze'];
$grad = intval($_POST['grad']);
$drzava = intval($_POST['drzava']);
echo addVozac($ime_staze,$grad,$drzava);
}
?>