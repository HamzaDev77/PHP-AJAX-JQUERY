    <?php
    require ('../template/template.php');
    require ('update.php');
    //--------------------------------------Start of importing Informations from DB--------------------------------//
    $reqte = "SELECT * FROM profil,services WHERE id='$id'";
    $exe = $base->query($reqte);
    $ligne = $exe->fetch(PDO::FETCH_OBJ);
    /*-------------------------------------------$ligne is an array of objects imported--------------------------*/
    ?>
    <?="<p>". $_SESSION['msg']."</p>"?>
    <div  class="well well-sm col-xs-4">
        <b>EDITING ... : </b><pre> NAME : <?= $ligne->adm_nom .' '.$ligne->adm_prenom.'</pre><pre> POSTE : '.$ligne->profession.'  </pre>' ?></div>
    <form  method="post" class=" modal-dialog container col-lg-8">
        <label class="col-lg-4 ">Nom :</label>
        <input class="col-lg-4 form-control" type="text" placeholder="Entrez le nom"
               value='<?php echo $ligne->adm_nom ?>' name="nom">
        <label class="col-lg-4">Prénom :</label>
        <input type="text" class="form-control col-lg-4 center-block" placeholder="Entrez le prénom"
               value='<?php echo $ligne->adm_prenom ?>' name="prenom">

        <label class="col-lg-12"> E-mail :</label>
        <input type="email" class="form-control col-lg-4 " placeholder="Entrez le l'email "
               value='<?php echo $ligne->adm_email ?>' name="email" required>

        <label class="col-lg-12"> login :</label>
        <input type="text" class="form-control col-lg-4 " placeholder="Entrez le login"
               value='<?php echo $ligne->login ?>' name="login" required>
        <label class="col-lg-12"> Profession :</label>
        <input type="text" class="form-control col-lg-4 " placeholder="Entrez votre Profession"
               value='<?php echo $ligne->profession ?>' name="profession" required>
        <label class="col-lg-12"> Service :</label>
        <select  name="service" value="<?php echo$ligne->id_s ?>" class="form-control col-lg-4 ">
            <option disabled="true" selected="selected">--Service--</option>
            <!------------------------------------------------------------------------------>
            <!-- to import all services from DB -->
            <?php
            $rel="SELECT * FROM services";
            $exe=$base->query($rel);
            while($ligne=$exe->fetch(PDO::FETCH_OBJ))
            {?>
                <option value="<?=$ligne->id_s?>">
                    <?=$ligne->name?>
                </option>
            <?php } ?>
        </select>
        <div class="col-lg-12"></div>
        <div class="col-lg-4 col-lg-push-5">
            <input type="submit" name="update" class="btn btn-default ok col-xs-5" value="UPDATE"/ >
            <a type="button" class="btn btn-default col-xs-5" href="show.php">CANCEL</a>
        </div>
    </form>

        
    
    