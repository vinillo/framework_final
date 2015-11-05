<?php
$fNaam = $request->get("functie_naam");
$scenario = $request->get("scenario");
$risco = $request->get("risco");
$remote_ip = $_SERVER['REMOTE_ADDR'];


$mysqli = new mysqli("localhost", "root", "kippen7", "db_model");
$mysqli->query("insert into `functie` (`functie_naam`, `scenario`,
 `risico_factor`, `created`, `ip`) values('$fNaam','$scenario','$risco',NOW(),'$remote_ip')
");
echo "Thx! inserted";