<?php include_once 'config/init.php'; ?>
<?php
$admin = new Admin;
$id = isset($_GET['id'])?$_GET['id']:null;
$edit_id = isset($_GET['edit_id'])?$_GET['edit_id']:null;
if($id){
    $template = new Template('templates/admin-edit-page.php');
    $template->page = $admin->getPageById($id);
}
if($edit_id){
    $data = array();
    $data['page_title'] = $_POST['page_title'];
    $data['page_body'] = $_POST['editor'];
    $data['is_published'] = isset($_POST['is_published']) ? 1 : 0;
    $data['meta_tag'] = $_POST['meta_tag'];
    $data['meta_description'] = $_POST['meta_description'];
    $data['updated_at'] = date("Y-m-d H:i:s");
    $data['admin_id'] = $_SESSION['user_id'];
    $result = $admin->updatePage($data,$edit_id);
    if($result==true){
        redirect('pages.php', 'Your page is  updated','success');
    }else{
        redirect('pages.php', 'Your page is not updated','error');
    }
}
echo $template;
?>