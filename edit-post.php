<?php include_once 'config/init.php'; ?>
<?php
$admin = new Admin;
$id = isset($_GET['id'])?$_GET['id']:null;
$edit_id = isset($_GET['edit_id'])?$_GET['edit_id']:null;
if($id){
    $template = new Template('templates/admin-edit-post.php');
    $template->post = $admin->getPostById($id);
}
if($edit_id){
    $data = array();
    $data['post_title'] = $_POST['post_title'];
    $data['post_body'] = $_POST['editor'];
    $data['is_published'] = isset($_POST['is_published']) ? 1 : 0;
    $data['updated_at'] = date("Y-m-d H:i:s");
    $data['updated_by'] = $_SESSION['user_id'];
    //print_r($data); exit;
    $result = $admin->updatePost($data,$edit_id);
    if($result==true){
        redirect('posts.php', 'Your post is  updated','success');
    }else{
        redirect('posts.php', 'Your post is not updated','error');
    }
}
echo $template;
?>