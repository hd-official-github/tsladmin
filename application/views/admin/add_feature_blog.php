<script type="text/javascript" src="<?php echo base_url() ?>assets/js/ckeditor/ckeditor.js"></script>
<div class="right-d">
    <div class="card">
        <h4>ADD FEATURE BLOG</h4>
        <p style="color: red;font-weight:bold;"> <?php if (isset($err)) echo $err; ?></p>
    </div>
    <h4 class="heading-2"></h4>
    <div class="blog-list">
        <form style="width: 100%;" action="<?php echo base_url() ?>admin/submit_feature_blog" method="POST" enctype="multipart/form-data">
        <div class="form-block">
                <label for="">URL SLUG</label>
                <input type="text" placeholder="URL SLUG" name="url_slug" required>
            </div>
            
            <div class="form-block">
                <label for="">SELECT LOCATION</label>
                <select name="loc" id="">
                    <?php foreach ($loc->result() as $row) {
                        echo '<option value="' . $row->location_name . '">' . $row->location_name . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="form-block">
                <label for="">META TITLE</label>
                <input type="text" placeholder="META TITLE" name="meta_title" required>
            </div>
            <div class="form-block">
                <label for="">META DESCRIPTION</label>
                <input type="text" placeholder="MEAT DESCRIPTION" name="meta_desc" required>
            </div>
            <div class="form-block">
                <label for="">BLOG TITLE</label>
                <input type="text" placeholder="BLOG TITLE" name="blog_title" required>
            </div>
            <div class="form-block">
                <label for="">BLOG DESCRIPTION</label>
                <textarea id="textarea_id" class="textarea_id" name="blogdesc" required>Blog data</textarea>
            </div>
            <div class="form-block">
                <label for="">CHOOSE FEATURE IMAGE</label>
                <input type="file" name="userfile" required>
            </div>
            <div class="form-block">
                <label for="">ALT FOR BLOG FEATURE IMAGE</label>
                <input type="text" name="imgalt" required placeholder="IMAGE ALT">
            </div>
            <div class="form-block">
                <input type="submit" name="submit" value="SUBMIT" class="button">
            </div>

        </form>
    </div>
</div>
<script>
    CKEDITOR.replace('textarea_id');
</script>
<style>
    .form-block {
        padding: 10px;
        border-bottom: 1px solid #f1f1f1;
    }

    .form-block label {
        font-size: 10px;
        font-weight: bold;
        margin-top: 10px;
        font-weight: bold;
    }

    input {
        width: 400px;
        height: 30px;
        font-size: 15px;
    }

    .button {
        background-color: #c5c5c5;
        border: none;
    }
</style>