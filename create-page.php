<?php include_once 'config/init.php'; ?>
<?php
$admin = new Admin;
if(isset($_POST['submit'])){
    $data = array();
    $data['page_title'] =$_POST['page_title'];
    $data['page_body'] =$_POST['page_body'];
    $data['meta_tag'] =$_POST['meta_tag'];
    $data['meta_description'] =$_POST['meta_description'];
    $data['is_published'] = isset($_POST['is_published']) ? 1 : 0;
    $data['admin_id'] = $_SESSION['user_id'];
    $result = $admin->addPage($data); 
    if($result==true){
        redirect('pages.php', 'Your page is created','success');
    }else{
        redirect('pages.php', 'Your page is not created','error');
    }
}

//echo $template;
?>