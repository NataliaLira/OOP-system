<h1>Contato</h1>

<form action="index.php?Pessoas" method="post">
    <input type="text" name="nome" placeholder="Seu Nome">
    <input type="number" name="idade" placeholder="Idade Pessoa">
    <input type="number" name="cpf" placeholder="cpf">
    <select name="tipoPessoa">
        <option selected desabled>Escolha um tipo</option>
        <option value="usuario">Usuário</option>
        <option value="funcionario">Funcionário</option>
    </select>
    <input type="text" name="usuario" placeholder="Seu usuário">
    <input type="password" name="senha" placeholder="Digite sua senha">
    <button type="submit">Enviar</button>
</form>