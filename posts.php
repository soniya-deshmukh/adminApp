<?php include_once 'config/init.php'; ?>
<?php
$admin = new Admin;
$del_id = isset($_POST['del_id'])?$_POST['del_id']:null;
if($del_id){
    $result = $admin->deletePost($del_id);
    if($result==true){
        redirect('posts.php', 'Your page is  Deleted','success');
    }else{
        redirect('posts.php', 'Your page is not Deleted','error');
    }
}
$template = new Template('templates/admin-posts.php');
$template->posts = $admin->getPosts();

echo $template;
?>