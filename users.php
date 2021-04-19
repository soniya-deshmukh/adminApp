<?php include_once 'config/init.php'; ?>
<?php
$admin = new Admin;
$del_id = isset($_POST['del_id'])?$_POST['del_id']:null;
if($del_id){
    $result = $admin->deleteUser($del_id);
    if($result==true){
        redirect('users.php', 'Your page is  Deleted','success');
    }else{
        redirect('users.php', 'Your page is not Deleted','error');
    }
}
$template = new Template('templates/admin-users.php');
$template->users = $admin->getUsers();
echo $template;
?>