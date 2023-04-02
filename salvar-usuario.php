<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["password"]);
            $data_nasc = $_POST["data_nasc"];

            $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}')";

            $resultado = $conexao->query($sql);

            if($resultado == true){
                print "<script>alert('Usuário cadastrado');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Usuário não cadastrado');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;

        case 'editar':  
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["password"]);
            $data_nasc = $_POST["data_nasc"];

            $sql = "UPDATE usuarios SET '{$nome}', '{$email}', '{$senha}', '{$data_nasc}' WHERE id=".$_REQUEST["id"];

            $resultado = $conexao->query($sql);

            if($resultado == true){
                print "<script>alert('Usuário editado');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Usuário não editado');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;

        case 'excluir':  
            $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

            $resultado = $conexao->query($sql);

            if($resultado == true){
                print "<script>alert('Usuário excluido');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Usuário não excluido');</script>";
                print "<script>location.href='?page=listar';</script>";
            }

            break;    

           
    }
?>