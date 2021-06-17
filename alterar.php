<?php
include("conexao.php");
$pessoa = SelectIDPessoa($_POST["id"]);
var_dump($pessoa);
?>
<meta charset="UTF-8">
<form name = "dadoPessoas" action = "conexao.php" method = "POST">
<table border = "1">

<tbody>
<tr>
    <td>Nome:</td>
    <td><input type="text" name="nome" value="<?=$pessoa["nome"]?>" size="20" /></td>

</tr>
<tr>
<td>Nascimento:</td>
    <td><input type="date" name="nascimento" value="<?=$pessoa["nascimento"]?>" /></td>
</tr>
<tr>
 <td>Telefone:</td>
    <td><input type="text" name="telefone" value="<?=$pessoa["telefone"]?>" size="20"/></td>
</tr>
<tr>
 <td>Endereço:</td>
    <td><input type="text" name="endereço" value="<?=$pessoa["endereço"]?>" size="20" /></td>
</tr>
<tr>

    <td><input type="hidden" name="acao" value="alterar" /></td>
<input type="hidden" name="id" value="<?= $pessoa["id"] ?>" />
    <td><input type="submit" value="Enviar" /></td>
</tr>
</tbody>
</table>
        </form>


