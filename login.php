<?php include_once 'config/init.php'; ?>
<?php
$admin = new Admin;
$template = new Template('templates/admin-login.php');
$login = isset($_POST['submit']) ? $_POST['submit'] : null;
if($login){
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $result = $admin->getAdmin($email, $pass);
    if($result){
        $_SESSION['user'] = $result->name;
        $_SESSION['user_id'] = $result->id;

        redirect('index.php');
    }else{
        redirect('login.php', 'Your email or password is incorrect','error');
    }
}
echo $template;
?>
