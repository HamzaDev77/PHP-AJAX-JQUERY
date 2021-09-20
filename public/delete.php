<?php
    require_once "list.php";
    include "msgs.php";
    $_SESSION['msg']="";
    $id = $_POST['supprimer'];
    if ($_POST['supprimer'] != 1) 
    {
        $reqte = "DELETE FROM profil WHERE id='$id'";
        $reqte_1 = "UPDATE `services` 
                            SET `number_emp`= 
                                (SELECT COUNT(id_s) 
                                    FROM profil 
                                        WHERE profil.id_s = services.id_s)";
        $exe = $base->query($reqte);
        $exe_1 = $base->query($reqte_1);
        if ($exe && $exe_1)
        {
            $_SESSION['msg']=$_SESSION["_deleted"];
        }
    } 
    
    else {
       $_SESSION['msg']=$_SESSION["_n_deleted"];
        }
        
?>
