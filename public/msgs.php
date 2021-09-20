<?php
session_start();

$_SESSION = null;

$_SESSION["_n_deleted"]= "<pre class='col-md-7 panel panel-warning pull-left'>Message :CANNOT BE DELETED !<a class='btn btn-default pull-right'  href='../'>Return </a></pre>";

$_SESSION["_deleted"]= "<pre id='ok'>Message : DELETED SUCCESSFULLY<a class='btn btn-default pull-right'  href='../'>Return </a></pre>";

$_SESSION["_n_updated"]= "<pre>Message : NOT UPDATED<a class='btn btn-default pull-right'  href='../'>Return </a></pre>";

$_SESSION["_updated"]= "<pre id='ok'>Message : UPDATED !<a class='btn btn-default pull-right'  href='../'>Return </a></pre>";

$_SESSION["_inserted"]= "<pre id='ok'>Message : Inserted !<a class='btn btn-default pull-right'  href='../'>Return </a></pre>";


?>