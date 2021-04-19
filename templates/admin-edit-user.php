<?php include 'inc/header.php';?>
<nav aria-label="breadcrumb">
    <div class="container-fluid">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="users.php">Users</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit user</li>
        </ol>
    </div>
</nav>
<section id="main">
    <div class="container-fluid">
        <div class="row">
        <?php include 'inc/left-panel.php';?>
            <div class="col-md-9">
                <div class="card  bg-light">
                    <div class="card-header main-color-bg">
                        Edit User
                    </div>
                    <div class="card-body">
                        <form id="edit_user" action="edit-user.php?edit_id=<?php echo $user->id;?>" method="post">
                            <div class="div formgroup">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo $user->name;?>" required>
                            </div>
                            <div class="div formgroup">
                                <label for="user_email">Email</label>
                                <input type="email" id="user_email" name="user_email" class="form-control" placeholder="Email" value="<?php echo $user->email;?>" required>
                                <div id="status"></div>
                            </div>
                            <div class="div formgroup">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo $user->password;?>" required>
                            </div>
                            <div class="div formgroup">
                                <label for="notes">Notes</label>
                                <textarea name="notes" class="form-control" placeholder="User details"> <?php echo $user->notes;?></textarea >
                            </div>
                            <div class="div form-group">
                                <input type="submit" name ="submit" class="btn btn-primary mt-2" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- 9 COL-MD-9 -->
        </div><!-- ROW FIRST -->
    </div>
</section>
<?php include 'inc/footer.php';?>
<!-- to check if user_email already exist By JS -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    document.getElementById('user_email').addEventListener("input", function(event){
        //prevent enter to submit
        if(event.keyCode==13){
            event.preventDefault();
        }else{
            user_email = document.getElementById('user_email').value;
                user_id = document.getElementById('user_id').value;
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        if(this.responseText == 'email ok'){
                            document.getElementById("status").innerHTML='';
                            } else {
                            document.getElementById("status").innerHTML = this.responseText;
                            document.getElementById("user_email").focus();
                        }
                    }   
                };
            xhttp.open("POST", "edit-user.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            //xhttp.open("GET", "edit-user.php?user_email="+usr, true);
            xhttp.send("user_id="+user_id+"&user_email="+user_email);
        }
    });
    document.getElementById('edit_user').addEventListener("submit", function(e){
        if(document.getElementById('status').innerHTML!==''){
            document.getElementById("user_email").focus();
            e.preventDefault();
        }
    });  
});
</script>