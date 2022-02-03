<?php
include_once("conecl.php");
//Criando tabela e cabeçalho de dados
echo "<table border=1";
echo "<tr>";
echo "<th>Nome</th>";
echo "<th>MAC</th>";
echo "<th>NPP</th>";
echo "<th>NPT</th>";
echo "<th>MT</th>";
echo "</tr>";
//Pauta1
//Conectando ao banco de dados:

$sql = "SELECT * FROM pauta4";
$resultado_usuario = mysqli_query($conn, $sql) or die ("Erro ao tentar cadastrar registro") ;
// Obtendo os dados por meio de um loop while
while ($registro = mysqli_fetch_array($resultado_usuario)) 
{
$Nome = $registro ['Nome'];
$MAC = $registro ['MAC'];
$NPP = $registro ['NPP'];
$NPT = $registro ['NPT'];
$MT = $registro ['MT'];

echo "<tr>";
echo "<td>".$Nome."</td>";
echo "<td>".$MAC."</td>";
echo "<td>".$NPP."</td>";
echo "<td>".$NPT."</td>";
echo "<td>".$MT."</td>";
echo "</tr>";	
}
mysqli_close ($conn);
echo "</table>"
?>


