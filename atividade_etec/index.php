<?php
session_start();
include 'usuarios.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    if (isset($usuario[$email]) && $usuario[$email]['password'] === md5($password)) {
        
        $_SESSION['usuario'] = $email;
        setcookie('username', $usuario[$email]['name'], time() + 3600); 
        header('Location: autenticar.php');
        exit();
    } else {
        $error = "Credenciais inválidas!";
    }
}
?>

<?php
$errorMessage = isset($error) ? $error : '';
include 'index.html';
?>
