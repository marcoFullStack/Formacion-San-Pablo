
<?
extract($_POST);
require_once("conectar.php");
$cnx->query("DELETE FROM marco_alumno WHERE dni = '$identificador'");
if($cnx->error){
    echo 1;
}
else {
    echo 0;
}


