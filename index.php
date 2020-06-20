
<?PHP
require "clsUsuario.php";
require "classes.php";
require "Looping.php";
$usr = new Usuario('Cida', '123456');
echo $usr->validarSenha('123456')? 'Usuário logado com sucesso' : 'Senha do usuário invalida';
?>
