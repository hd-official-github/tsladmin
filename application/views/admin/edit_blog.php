<script type="text/javascript" src="<?php echo base_url() ?>assets/js/ckeditor/ckeditor.js"></script>
<div class="right-d">
    <div class="card">
        <h4>UPDATE BLOG CONTENT</h4>
        <p style="color: red;font-weight:bold;"> <?php if (isset($err)) echo $err; ?></p>
    </div>
    <h4 class="heading-2"></h4>
    <div class="blog-list">
        <form style="width: 100%;" action="<?php echo base_url() ?>admin/update_blog" method="POST" enctype="multipart/form-data">
            <div class="form-block">
                <label for="">URL SLUG</label>
                <input type="text" placeholder="SLUG" name="slug" required value="<?php echo $arr['slug']; ?>">
                <input type="text" placeholder="SLUG" name="id" required value="<?php echo $arr['id']; ?>" hidden>
                <input type="text" placeholder="SLUG" name="blog_img_name" required value="<?php echo $arr['blog_img_name']; ?>" hidden>
            </div>
            <div class=" form-block">
                <label for="">META TITLE</label>
                <input type="text" placeholder="Meta Title" name="meta_title" required value="<?php echo $arr['meta_title']; ?>">
                <label for="">META DESCRIPTION</label>
                <input type="text" placeholder="Meta Description" name="meta_desc" required value="<?php echo $arr['meta_desc']; ?>">
            </div>
            <div class="form-block">
                <label for="">SELECT LOCATION</label>
                <select name="loc" id="">
                    <option value="<?php echo $arr['loc']; ?>"><?php echo $arr['loc']; ?></option>
                    <?php foreach ($location->result() as $row) {
                        echo '<option value="' . $row->location_name . '">' . $row->location_name . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="form-block">
                <label for="">BLOG TITLE</label>
                <input type="text" placeholder="BLOG TITLE" name="blog_title" required value="<?php echo $arr['blog_title']; ?>">
            </div>
            <div class="form-block">
                <label for="">BLOG DESCRIPTION</label>
                <textarea id="textarea_id" class="textarea_id" name="blogdesc" required><?php echo $arr['blog_desc']; ?> </textarea>
            </div>
            <div class="form-block">
                <label for="">CHOOSE IMAGE FOR BLOG BANNER</label>
                <input type="file" name="userfile">
                <img src="<?php echo $arr['blog_img']; ?>" alt="" srcset="" width="32px">
                <input type="text" placeholder="BLOG TITLE" name="blog_img_url" value="<?php echo $arr['blog_img']; ?>" disabled>
            </div>

            <div class="form-block">
                <label for="">ALT FOR BLOG IMAGE</label>
                <input type="text" name="imgalt" required placeholder="IMAGE ALT" value="<?php echo $arr['image_alt']; ?>">
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