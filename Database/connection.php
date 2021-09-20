<?php

try
{
    $base = new PDO('mysql:dbname=ajax_php;host=localhost','root','');
    $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
}
catch(PDOException $e)
{
    echo "NOT FOUND";
}

?>