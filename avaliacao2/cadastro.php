<?php 
require 'conexao.php';
if (isset($_POST['filme']) && isset($_POST['tempolocacao'])&& isset($_POST['devolucao'])) {
   $filme = $_POST["filme"];
   $tempo_locacao = $_POST["tempolocacao"];
   $devolucao = $_POST["devolucao"];

   // Create connection
$conn = mysqli_connect($hostname, $usuario, $senha, $bancodedados);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql="INSERT INTO locacao_filmes (filme, tempo_locacao, devolucao) VALUES('". $filme . "', '" . $tempo_locacao . "', '" . $devolucao. "')";
if(mysqli_query($conn,$sql)){
    echo "inseriu";
}
mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 20px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Escolha seu filme</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Filme</label>
                <input type="text" name="filme" class="form-control">
            
            </div>    
            <div class="form-group">
                <label>Tempo locacao </label>
                <input type="text" name="tempolocacao" class="form-control">

            </div>
               
            <div class="form-group">
                <label>Devolucao </label>
                <input type="text" name="devolucao" class="form-control">
               
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Locar">
            </div>
        </form>
    </div>   
    <a href="logout.php" class="btn btn-danger">Sair da conta</a>
    <a href="listagem.php" class="btn btn-success">Lista de Filmes</a>
</body>
</html>