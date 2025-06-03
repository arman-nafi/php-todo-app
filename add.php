<?php
require 'db.php';
$task = $_POST['task'];
$pdo->prepare("INSERT INTO todos (task) VALUES (?)")->execute([$task]);
header("Location: index.php");

