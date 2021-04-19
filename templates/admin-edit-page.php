<?php include 'inc/header.php';?>
<nav aria-label="breadcrumb">
    <div class="container-fluid">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="pages.php">Pages</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit page</li>
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
                        Edit page
                    </div>
                    <div class="card-body">
                        <form action="edit-page.php?edit_id=<?php echo $page->id;?>" method="post">
                            <div class="div formgroup">
                                <label for="page_title">Page Title</label>
                                <input type="text" name="page_title" class="form-control" placeholder="Page Title" value="<?php echo $page->page_title;?>" required>
                            </div>
                            <div class="div formgroup">
                                <label for="page_body">Page Body </label>
                                <textarea name="editor" class="form-control" placeholder="Page Body">
                                    <?php echo $page->page_body;?>
                                </textarea>
                            </div>
                            <?php if($page->is_published ==1):?>
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
                                <label for="meta_tag">Meta Tags </label>
                                <input type="text" name="meta_tag" class="form-control" placeholder="Add some Tags.." value="<?php echo $page->meta_tag;?>">
                            </div>
                            <div class="div form-group">
                                <label for="meta_description">Meta Description </label>
                                <textarea type="text" name="meta_description" class="form-control" placeholder="Add Meta Description.."> <?php echo $page->meta_description;?></textarea>
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
<script>
    CKEDITOR.replace( 'editor' );
</script>
<?php include 'inc/footer.php';?>
