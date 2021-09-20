<?php
$id = $_GET['editer'];
if (isset($_POST['update']))
{
        $_SESSION['msg'] = "";
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $pro = $_POST['profession'];
        $ser = $_POST['service'];
        $login = trim($_POST['login']);
        $email = $_POST['email'];
            //------------------------------------is all inputs are well sets----------//
            //---------------------------------------------------------------------------------//
            $reqte_up = "UPDATE profil 
                            SET adm_nom='$nom',adm_prenom='$prenom',adm_email='$email',login='$login',profession='$pro',id_s='$ser'
                                WHERE id='$id'";
                /*-----------------------------------------Add number of employee per service----------------------------*/
                /*---------------------------------------------------------------------*/
                $reqte_up_1 = "UPDATE `services` 
                                        SET `number_emp`= 
                                            (SELECT COUNT(id_s) 
                                                FROM profil 
                                                    WHERE profil.id_s = services.id_s)";
                /*---------------------------------------------------------------------*/

    $exe = $base->query($reqte_up);
    $exe_1 = $base->query($reqte_up_1);

        include "msgs.php";
        if ($exe && $exe_1)
                {
                    $_SESSION['msg']=$_SESSION["_updated"];
                }
            else   $_SESSION['msg']=$_SESSION["_n_updated"];
        }