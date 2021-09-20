
<?php
require ('../template/template.php')
?>
	<body class="container">
                <legend> Selectionner un service </legend>
                <form action="list.php" method="post" class="col-md-3" >
                <select  id="id_service" class="form-control"  onchange="go()" >
                    <option disabled selected="selected">--Service--</option>
                      <?php require('services.php') ?>
                    </select>
                </form>
            <a class="btn btn-default pull-right" href="/Ajax" >EXIT X</a>
            <div id="target" class="col-md-7">
                <!----------Rendering results of Ajax reqs---->
            </div>
	</body>
</html>
