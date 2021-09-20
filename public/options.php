<?php require("../database/connection.php");
$_SESSION = null;
    if (isset($_GET['editer'])) 
    {
        require_once "edit.php";
    }
    if(isset($_POST['supprimer'])) 
    {
        require "delete.php";
        print($_SESSION['msg']);
    }
    if(isset($_POST['id_service']))
    {
        require_once "list.php";
    }
    if(isset($_POST['insert']))
    {
        require_once "add.php";
    }