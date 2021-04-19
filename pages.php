<?php include_once 'config/init.php'; ?>
<?php
$admin = new Admin;
$del_id = isset($_POST['del_id'])?$_POST['del_id']:null;
if($del_id){
    $result = $admin->deletePage($del_id);
    if($result==true){
        redirect('pages.php', 'Your page is  Deleted','success');
    }else{
        redirect('pages.php', 'Your page is not Deleted','error');
    }
}
$template = new Template('templates/admin-pages.php');
$template->pages = $admin->getPages();
echo $template;
?>