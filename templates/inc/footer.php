
<footer class="footer">Copy right @ Admin Strip &copy;2020</footer>
</body>
</html>
<!-- The Modal AddPage -->
<div class="modal" id="addPage">
  <div class="modal-dialog">
    <div class="modal-content">
        <!-- Modal Header -->
        <form action="create-page.php" method="POST">
            <div class="modal-header">
            <h5 class="modal-title" >Add page</h5>
            <button type="button" class="close" data-dismiss="modal">&times;</span>
            </button>
            </div>
        <!-- Modal body -->
            <div class="modal-body">
                    <div class="div formgroup">
                        <label for="page_title">Page Title</label>
                        <input type="text" name="page_title" class="form-control" placeholder="Page Title" required>
                    </div>
                    <div class="div formgroup">
                        <label for="page_body">Page Body </label>
                        <textarea name="page_body" class="form-control" placeholder="Page Body"></textarea>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="is_published" id="" class="" >
                        <label>Published</label>
                    </div>
                    <div class="div formgroup">
                        <label for="meta_tag">Meta Tags </label>
                        <input type="text" name="meta_tag" class="form-control" placeholder="Add some Tags..">
                    </div>
                    <div class="div formgroup">
                        <label for="meta_description">Meta Description </label>
                        <textarea type="text" name="meta_description" class="form-control" placeholder="Add Meta Description.."></textarea>
                    </div>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer ">
                <input type="submit" name="submit" class="btn btn-primary" value="Add"> 
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </form>
    </div>
  </div>
</div>
<!-- The Modal AddUser -->
<div class="modal" id="addUser">
  <div class="modal-dialog">
    <div class="modal-content">
        <!-- Modal Header -->
        <form id="add_user" action="create-user.php" method="POST">
            <div class="modal-header">
                <h5 class="modal-title" >Add User</h5>
                <button type="button" class="close" data-dismiss="modal" >&times;</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <div class="div formgroup">
                    <label for="name"> Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                </div>
                <div class="div formgroup">
                    <label for="email">Email name</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                    <div style="left:0px;  padding-top: 10px;" id="status"></div>
                </div>
                <div class="div formgroup">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <div class="div formgroup">
                    <label for="notes">Notes </label>
                    <textarea  name="notes" class="form-control" placeholder="Details about the user" ></textarea>
                </div>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer ">
                <input type="submit"  name="submit" class="btn btn-primary" value="Add"> 
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </form>
    </div>
  </div>
</div>


<!-- The Modal AddPost -->
<div class="modal" id="addPost">
  <div class="modal-dialog">
    <div class="modal-content">
        <!-- Modal Header -->
        <form action="create-post.php" method="POST">
            <div class="modal-header">
                <h5 class="modal-title" >Add post</h5>
                <button type="button" class="close" data-dismiss="modal" >&times;</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <div class="div formgroup">
                    <label for="post_title">Post Title</label>
                    <input type="text" name="post_title" class="form-control" placeholder="Post Title" required>
                </div>
                <div class="div formgroup">
                    <label for="post_body">Post Body </label>
                    <textarea name="post_body" class="form-control" placeholder="Post Body"></textarea>
                </div>
                <div class="checkbox">
                    <input type="checkbox" name="is_published" id="" class="" >
                    <label>Published</label>
                </div>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer ">
                <input type="submit" name="submit" class="btn btn-primary" value="Add"> 
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </form>
    </div>
  </div>
</div>
<script>
    CKEDITOR.replace( 'page_body' );
    CKEDITOR.replace( 'post_body' );
</script>
<!-- to check if email already exist By jQuery -->
<!-- <script>
$(document).ready(function(){
    $("#email").change(function() {
    var usr = $("#email").val();
        $.ajax({ 
        type: "POST", 
        url: "create-user.php", 
        data: "email="+ usr,
        dataType: 'text',
            success: function(msg){
                if(msg == 'email ok'){
                    $("#status").html('');
                } else {
                   $("#status").html(msg);
               }
            }
        });
    });
    $("#add_user").submit(function(e) {
        if($("#status").html()!==''){
        e.preventDefault();
        }
    });
});
</script>-->
<!-- to check if email already exist By JS -->
 <script>
document.addEventListener("DOMContentLoaded", function() {
    document.getElementById('email').addEventListener("input", function(event){
        if(event.keyCode==13){
            event.preventDefault();
        }else{
            user_email = document.getElementById('email').value;
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    if(this.responseText == 'email ok'){
                        document.getElementById("status").innerHTML='';
                        } else {
                        document.getElementById("status").innerHTML = this.responseText;
                        document.getElementById("email").focus();
                    }
                }   
            };
            xhttp.open("POST", "create-user.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            //xhttp.open("GET", "create-user.php?email="+usr, true);
            xhttp.send("user_email="+user_email);
        }
    });
    document.getElementById('add_user').addEventListener("submit", function(e){
        if(document.getElementById('status').innerHTML!==''){
            document.getElementById("email").focus();
            e.preventDefault();
        }
    }); 
});
</script>