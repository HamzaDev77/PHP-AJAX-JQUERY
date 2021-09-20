<?php
require "../database/connection.php";
$var1 = "".(int)rand();
//echo $var1;
//--------------------------------------Storing--------------------------------//
if (isset($_POST['insert']))
{
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $pro = $_POST['profession'];
    $ser = $_POST['service'];
    $login = trim($_POST['login']);
    $pass = $login.$var1.substr($login,3,7);
    $pass_sha = sha1($pass);
    $_SESSION["pass"]= $pass;
    //------------------------------------verification of inputs----------//
    //--------------------------------------------------------------------**//
    $reqte_up = "INSERT INTO `profil` 
                            VALUES('','$nom','$prenom' ,'$email' ,'$pro' ,'$login','$pass_sha','$ser')";
    /*-----------------------------------------Add number of employee per service----------------------------*/
    $reqte_up_1 = "UPDATE `services` 
                            SET `number_emp`= 
                                (SELECT COUNT(id_s) 
                                    FROM profil 
                                        WHERE profil.id_s = services.id_s)";
    $exe = $base->query($reqte_up);
    $exe_1 =$base->query($reqte_up_1);
    if ($exe && $exe_1)
    {
        require("msgs.php");
        $_SESSION["_inserted"];
        ?>
        <div id="msg"><b>Inserting ... : </b><pre> Your Password is : <?=$pass ?><pre></div>
        <?php
    }
    header('location:show.php');
}
?>