<?php
	//Redirect to page
	function redirect($page = false, $message=null, $message_type=null){
		if(is_string($page)){
			$location = $page;
		}else{
			$location = $_SERVER['SCRIPT_NAME'];
		}
		if($message != null){
			$_SESSION['message']= $message;
		}
		
		if($message_type != null){
			$_SESSION['message_type']= $message_type;
		}
		header('Location:'.$location);
		exit;
	}
	
	function displayMessage(){
		if(!empty($_SESSION['message'])){
			$message = $_SESSION['message'];
	
			if(!empty($_SESSION['message_type'])){
			$message_type = $_SESSION['message_type'];
			}
			if($message_type=='error'){
				echo '<div id="msg" class="alert alert-danger text-center">'.$message.'</div>';
			}else{
				echo '<div id="msg" class="alert alert-success">'.$message.'</div>';
			}
			echo '<script> 
			$(function() {
			   $("#msg").fadeOut(4000);
		   	});
			/* setTimeout(function(){	
			document.getElementById("msg").style.display="none"},5000);
			 */
			</script>'; 
			unset($_SESSION['message']);
			unset($_SESSION['message_type']);
			}else{
				//echo 'dislpay';
		}
	}
	
?>