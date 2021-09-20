<?php
$id = $_GET['editer'];
if (isset($_POST['update']))
{
$_SESSION['msg'] = "";
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$login = trim($_POST['login']);
$email = $_POST['email'];
//------------------------------------verification des mos de pass s'ils sont saisis----------//
//---------------------------------sinon si
$reqte_up = "UPDATE profil SET adm_nom='$nom',
adm_prenom='$prenom',adm_email='$email',login='$login'
WHERE id='$id'";
$exe = $base->query($reqte_up);
include "msgs.php";
if ($exe)
{
$_SESSION['msg']=$_SESSION["_updated"];
}
else   $_SESSION['msg']=$_SESSION["_n_updated"];
}
?>