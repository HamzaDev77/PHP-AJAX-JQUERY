<?php
require ('../template/template.php')
?>
<table class="table table-condensed" >

    <tr>
        <th>Nom </th>
        <th>Prénom </th>
        <th>E-mail </th>
        <th>Profession</th>
        <th>Actions</th>
    </tr>
    <?php
    if(isset($_POST['id_service'])){
        $id_s = $_POST['id_service']; /*----------------id service is used in Ajax scripts ---------------------------*/
        $_SESSION['count']=0;
        require "../database/connection.php";
        $reqte="SELECT * 
                    FROM services,profil
                        WHERE services.id_s= '$id_s'
                            AND profil.id_s='$id_s'
                                ORDER BY profil.id_s
                                    DESC";
        $exe=$base->query($reqte);
        while($ligne=$exe->fetch(PDO::FETCH_OBJ))
        {
            ?>
            <td> <?= $ligne->adm_nom ?></td>
            <td><?= $ligne->adm_prenom ?></td>
            <td><?= $ligne->adm_email ?></td>
            <td><?= $ligne->profession ?></td>
                <?php
                $_SESSION['count']=$ligne->number_emp
                ?>
            <td>
              <form class="col-lg-3" action='options.php' method="post">
                    <button name="supprimer" class="btn btn-default" value='<?= $ligne->id ?>'
                            onclick="return(confirm('Are You Sur ?'));">
                        <img src="../GallerieApplication/delete.png" width="12" height="12"/>
                    </button>
                </form>
                <form class="col-lg-3" action='options.php' method="get">
                    <button data-toggle="modal" data-target="#edit_form" id="editer" name="editer" class="btn btn-default" value='<?= $ligne->id ?>'
                            onclick="return(confirm('Continue ... ?'));">
                        <img src="../GallerieApplication/edit.png" width="12" height="12"/>
                    </button>
                </form>
            </td>
            </tr>
            <?php
        }
    }
    ?>
</table>
                                    <!--Render the number of emplyee per service-->
                                    <pre>Nomre d'employés <?= $_SESSION['count']?></pre>
