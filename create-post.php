<?php include_once 'config/init.php'; ?>
<?php
$admin = new Admin;
if(isset($_POST['submit'])){
    $data = array();
    $data['post_title'] =$_POST['post_title'];
    $data['post_body'] =$_POST['post_body'];
    $data['is_published'] = isset($_POST['is_published']) ? 1 : 0;
    $data['created_by'] = $_SESSION['user_id'];
    $result = $admin->addPost($data); 
    if($result==true){
        redirect('posts.php', 'Your post is created','success');
    }else{
        redirect('posts.php', 'Your post is not created','error');
    }
}
?>