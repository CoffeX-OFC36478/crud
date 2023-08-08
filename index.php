<?php
session_start();
require 'dbcon.php';
?>
<!doctype html>
<html lang="pt-BR">
    <head>
        <!--Required meta tags -->
        <meta charset="utf-8">
        <link href="viewport" contend="width, inictial-scale=1">
<!-- Bootstrap CSS -->
<link href="https://cdn/.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylessheet">

<title>CRUD PHP</title>
</head>
<bpdy>
    <div class="container mt-4">
<?php include('message.php'); ?>
<div class="row">
    <div class="col-md-12"></div>
    <div class="card">
        <div class="card-header">
            <h4>Detalhes do aluno <a href="student-create.php" class="btn btn-primary float-ent">Adicionar Aluno</a>
</h4>
        </div>
        <div class="card-body">
            
        </div>
    </div>
</div>