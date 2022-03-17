<?php
    //importando o arquivo de conexao com o BD connect
    require ("connect.php");

    //obtendo os valores dos campos
    $descricao = $_POST['descricao'];
    $quantidade = $_POST['quantidade'];
    $autor = $_POST['autor'];
    $tipo_capa = $_POST['tipo_capa'];
    $categoria_livro = $_POST['categoria_livro'];
    $termo = $_POST['c_termo'];
    $data_nascimento = $_POST['data_nascimento'];
    //armazernando o SQL em uma variavel
    $sql = "INSERT INTO item (quantidade, descricao, autor, tipo_capa, categoria_livro, termo, data_nascimento)
    VALUES ('$quantidade', '$descricao','$autor', '$tipo_capa', '$categoria_livro', '$termo', '$data_nascimento')"; 
    //executando a SQL que esta na variavel
    $resultado = mysqli_query($conexao, $sql);
    //imprimindo na tela
    echo "inserido com sucesso";
    var_dump($termo)
?> 
<p><a href="form_cadastrar.html">voltar</a>