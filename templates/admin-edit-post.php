<?php include 'inc/header.php';?>
<nav aria-label="breadcrumb">
    <div class="container-fluid">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="posts.php">Posts</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit post</li>
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
                        Edit post
                    </div>
                    <div class="card-body">
                        <form action="edit-post.php?edit_id=<?php echo $post->id;?>" method="post">
                            <div class="div formgroup">
                                <label for="post_title">Post Title</label>
                                <input type="text" name="post_title" class="form-control" placeholder="Post Title" value="<?php echo $post->post_title;?>" required>
                            </div>
                            <div class="div formgroup">
                                <label for="post_body">Post Body </label>
                                <textarea name="editor" class="form-control" placeholder="Post Body">
                                    <?php echo $post->post_body;?>
                                </textarea>
                            </div>
                            <?php if($post->is_published ==1):?>
                            <div class="form-group form-check">
                                <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="is_published"  checked> Published</label>
                            </div>
                            <?php else : ?>
                            <div class="form-group form-check">
                                <label class="form-check-label" >    
                                <input class="form-check-input" type="checkbox" name="is_published" >Published</label>
                            </div>
                            <?php endif;?>
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
<script>
    CKEDITOR.replace( 'editor' );
</script>
<?php include 'inc/footer.php';?>
