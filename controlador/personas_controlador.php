<?php
//Llamada al modelo
require_once("modelo/personas_modelo.php");
$per=new personas_modelo();
$datos=$per->get_personas();
//Llamada a la vista
require_once("vistas/personas_vista.php");

$objtabla = new Modelo_mitabla();
if(isset($_POST['btnguarda'])){
    $nn= $_POST['nombre'];
    $pp= $_POST['peso'];
    $objtabla->instabla($nn,$pp);
}
$vertabla = $objtabla->datostabla();
require_once("vistas/personas_vista.php");

?>