<?php

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM db_usuario");

print json_encode($usuarios);
