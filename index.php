<?php include_once 'config/init.php'; ?>
<?php
$admin = new Admin;
$pages_count = $admin->getPagesCount();
$posts_count = $admin->getPostsCount();
$users_count = $admin->getUsersCount();

$template = new Template('templates/frontpage.php');
$template->pages_count =$pages_count;
$template->posts_count =$posts_count;
$template->users_count =$users_count;
$template->users = $admin->getUsers();
echo $template;
?>
