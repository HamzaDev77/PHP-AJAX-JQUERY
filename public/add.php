<html>
<head>
    <meta charset="utf-8">
    <title>EDITING</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/mon_css.css" rel="stylesheet" type="text/css">
    <script src="js/jquery.min.js"></script>
    <script src="js/ajax.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        form{
            font-size : 13px;
            font-family : consolas;
        }
        .form-control{
            font-size : 15px;
            font-family : consolas;
        }
        .form-control:focus{
            font-size : 15px;
            font-family : consolas;
            background : #444;
            color : white;
            border:none;
        }
        pre#ok{
            color:green;
        }
    </style>

</head>

       <small id="small">
       </small>
            <form  method="post" action="public/store.php" class="container col-lg-8">
                    <label  class="col-lg-12"> login :</label>
                    <input type="text" class="form-control col-lg-4 " placeholder="Entrez votre login"
                        name="login" required>
                    <label class="col-lg-4 ">Nom :</label>
                    <input class="col-lg-4 form-control" type="text" placeholder="Entrez votre nom"
                        name="nom">
                    <label class="col-lg-4">Prénom :</label>
                    <input type="text" class="form-control col-lg-4 center-block" placeholder="Entrez votre prénom"
                        name="prenom">
                    <label class="col-lg-12"> E-mail :</label>
                    <input type="email" class="form-control col-lg-4 " placeholder="Entrez votre email "
                        name="email" required>
                    <label class="col-lg-12"> profession :</label>
                    <input type="text" class="form-control col-lg-4 " placeholder="Entrez votre profession"
                           name="profession" required>
                    <label class="col-lg-12"> service :</label>
                   <select id="id_s" name="service"  class="form-control col-lg-4 ">
                      <option disabled="true" selected="selected">--Service--</option>
                      <?php
                      require_once "database/connection.php";
                                $rel="SELECT * FROM services";
                                $exe=$base->query($rel);
                                while($ligne=$exe->fetch(PDO::FETCH_OBJ))
                                    {?>
                                <option value="<?=$ligne->id_s?>">
                                        <?=$ligne->name?>
                                </option>
                    <?php } ?>
                   </select>
                    <legend class=" col-lg-12"></legend>
                    <div class="col-lg-5 col-lg-push-4">
                        <button type="submit" name="insert" class="btn btn-default ok col-xs-4">
                        <img src="GallerieApplication/add.png" width="24" height="24"/>
                        </button>

                        <a class="btn btn-default col-xs-4" href="public/show.php"><span>
                        <img  src="GallerieApplication/menu.png" width="24" height="24">
                        </span></a>
                    </div>
            </form>