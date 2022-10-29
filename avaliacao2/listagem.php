<?php 
require 'conexao.php';

   // Create connection
$conn = mysqli_connect($hostname, $usuario, $senha, $bancodedados);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql="SELECT* FROM locacao_filmes";
$result=mysqli_query($conn,$sql);
if($result){
    while($date=$result->fetch_object()){
        echo $date -> filme . " ";
        echo $date -> tempo_locacao . " ";
        echo $date -> devolucao. " " ; 
        echo "<br>";
    }
}
mysqli_close($conn);

 
