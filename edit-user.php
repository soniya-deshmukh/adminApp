<?php include_once 'config/init.php'; ?>
<?php
$admin = new Admin;
$id = isset($_GET['id'])?$_GET['id']:null;
$edit_id = isset($_GET['edit_id'])?$_GET['edit_id']:null;
//To fetch user info to edit
 
if($id){
    $template = new Template('templates/admin-edit-user.php');
    $template->user = $admin->getUserById($id);
    echo $template;
}
//To update user new info in DB
if($edit_id){
    $data = array();
    $data['name'] = $_POST['name'];
    $data['email'] = $_POST['user_email'];
    $data['password'] = $_POST['password'];
    $data['notes'] = $_POST['notes'];
    $result = $admin->updateUser($data,$edit_id);
    if($result==true){
        redirect('users.php', 'User is  updated','success');
    }else{
        redirect('users.php', 'User is not updated','error');
    }
}
//To update user email and restrict to use already exist emails 
if(isset($_REQUEST['user_id'])) {
    $user_id = $_REQUEST['user_id'];
    $user_email = $_REQUEST['user_email'];
    $emails = $admin->checkUpdatedUser($user_id);
    //To convert object array to string array
    $output = array_map(function ($emails) { return $emails->email; }, $emails);
    $str = implode(', ', $output);
    $search_emails =explode(', ', $str);
    
    $res = in_array($user_email,$search_emails);
   // echo"serach email".print_r( $search_emails);
    //echo "<br>"."emails".var_dump($user_email);
    //echo"res".var_dump($res);
    if(in_array($user_email,$search_emails)){
        echo '<font color="red">The email <strong>'.$user_email.'</strong>'.' is already in use.</font>';
    } else {
        echo 'email ok';
    }
} 


?>