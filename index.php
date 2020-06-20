
<?PHP
require "clsUsuario.php";
require "classes.php";
require "Looping.php";
$usr = new Usuario('Cida', '123456');
echo $usr->validarSenha('teste')? 'Senha do usuário invalida': 'Usuário logado com sucesso';
?>