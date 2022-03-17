<?php
//importando o arquivo da conexão com o BD(connect)
require ("connect.php");

//obtendo os valores dos campos
$codigo_livro = $_POST['c_codigo'];

// Inserindo os dados
$sql = "DELETE FROM `ITEM` WHERE codigo_item = $codigo_livro";

|$resultado = mysqli_query($conexao, $sql);

echo "Livro excluido com sucesso";

?>
<p><a href="form_cadastrar_livro.html">voltar</a>
