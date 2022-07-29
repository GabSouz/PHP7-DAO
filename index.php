<?php
require_once "config.php";

$sql = new Sql();

$usuario = $sql->select("SELECT * FROM db_usuario");

print json_encode($usuario);
