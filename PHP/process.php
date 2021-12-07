<?php 

$message = $_POST["message"]; // pego a msg

$files = scandir("./messages"); // pega o diretorio
$num_files = count($files) - 2; // numero de arquivos; diretorio cria com . e .. por isso -2
// $fileName = "msg-{$num_files}.txt";
$file = fopen("./messages/msg-{$num_files}.txt","a");

fwrite($file,$message); // escreve no arquivo
fclose($file);
header("Location: index.php");


