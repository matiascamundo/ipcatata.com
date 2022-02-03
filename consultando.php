<?php
include_once("conect.php");
//Criando tabela e cabeçalho de dados
echo "<table border=1";
echo "<tr>";
echo "<th>nome</th>";
echo "<th>email</th>";
echo "<th>endereco</th>";
echo "<th>telefone</th>";
echo "<th>classe</th>";
echo "<th>curso</th>";
echo "<th>lectivo</th>";
echo "</tr>";
//Index3
//Conectando ao banco de dados:

$sql = "SELECT * FROM estuda";
$resultado_usuario = mysqli_query($conn, $sql) or die ("Erro ao tentar cadastrar registro") ;
// Obtendo os dados por meio de um loop while
while ($registro = mysqli_fetch_array($resultado_usuario)) 
{
$nome = $registro ['nome'];
$email = $registro ['email'];
$endereco = $registro ['endereco'];
$telefone = $registro ['telefone'];
$classe = $registro ['classe'];
$curso = $registro ['curso'];
$lectivo = $registro ['lectivo'];
echo "<tr>";
echo "<td>".$nome."</td>";
echo "<td>".$email."</td>";
echo "<td>".$endereco."</td>";
echo "<td>".$telefone."</td>";
echo "<td>".$classe."</td>";
echo "<td>".$curso."</td>";
echo "<td>".$lectivo."</td>";
echo "</tr>";	
}
mysqli_close ($conn);
echo "</table>"
?>


