<?php

require_once "crudconfig.php";

header("Content-Type: application/json");
$data = [];

$fn = $_GET["fn"] ?? null;
$id = $_GET["id"] ?? 0;
$email = $_GET["email"] ?? null;
$senha = $_GET["senha"] ?? null;

$person = new Person();

if ($fn === "create" && $email !== null && $senha !== null) {
    $person->setEmail($email);
    $person->setSenha($senha);
    $data["person"] = $person->create();
}

if ($fn === "read") {
    $data["person"] = $person->read();
}

if ($fn === "update" && $id > 0 && $email !== null && $senha !== null) {
    $person->setId($id); // Certifique-se de configurar o ID
    $person->setEmail($email);
    $person->setSenha($senha);
    $data["person"] = $person->update();
}

if ($fn === "delete" && $id > 0) {
    $person->setId($id); // Certifique-se de configurar o ID
    $data["person"] = $person->delete();
}

echo json_encode($data);
?>
