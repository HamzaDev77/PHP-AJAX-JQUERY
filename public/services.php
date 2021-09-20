<?php
require_once "../database/connection.php";
$rel="SELECT * FROM services";
$exe=$base->query($rel);
while($ligne=$exe->fetch(PDO::FETCH_OBJ))
{?>
    <option value="<?= $ligne->id_s ?>">
        <?=$ligne->name?>
    </option>

<?php } ?>