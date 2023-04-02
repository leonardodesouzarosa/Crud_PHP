<h1>Editar Usuário</h1>
<?php
    $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];

    $resultado = $conexao->query($sql);

    $row = $resultado->fetch_object();

?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label class="form-label">Nome</label>
        <input type="text" class="form-control" id="form_nome" name="nome" placeholder="Digite seu nome" value="<?php print $row->nome;?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" id="form_email" name="email" placeholder="Digite seu email" value="<?php print $row->email;?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Senha</label>
        <input type="password" class="form-control" id="form_password" name="password" placeholder="Digite sua senha" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Data de nascimento</label>
        <input type="date" class="form-control" id="form_data_nascimento" name="data_nasc" placeholder="Digite sua data de nascimento"value="<?php print $row->data_nasc;?>">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>