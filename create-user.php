<?php include_once 'config/init.php'; ?>
<?php
$admin = new Admin;
if(isset($_REQUEST['user_email'])) {
    $email = $_REQUEST['user_email'];
    $exist = $admin->checkUser($email);
    if($exist==true){
        echo '<font color="red">The email <strong>'.$email.'</strong>'.' is already in use.</font>';
    } else {
        echo 'email ok';
    }
}    

if(isset($_POST['submit'])){
    $data = array();
    $data['name'] =$_POST['name'];
    $data['email'] =$_POST['email'];
    $data['password'] =$_POST['password'];
    $data['notes'] =$_POST['notes'];
    $data['is_admin'] =0;
    $data['created_by'] = $_SESSION['user_id'];
    
    $result = $admin->addUser($data); 
        if($result==true){
            redirect('users.php', 'User is added','success');
        }else{
            redirect('users.php', 'user is not added','error');
        }
       
}
?>