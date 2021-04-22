<script type="text/javascript" src="<?php echo base_url() ?>assets/js/ckeditor/ckeditor.js"></script>
<div class="right-d">
    <div class="card">
        <h4>ADD CATEGORY</h4>
        <p style="color: red;font-weight:bold;"> <?php if (isset($err)) echo $err; ?></p>
    </div>
    <h4 class="heading-2"></h4>
    <div class="blog-list">
        <form style="width: 100%;" action="<?php echo base_url() ?>admin/submit_category" method="POST" enctype="multipart/form-data">
            <div class="form-block">
                <label for="">URL SLUG</label>
                <input type="text" placeholder="SLUG" name="slug" required>
            </div>
            <div class='form-group'>
            
            <select name="location" id="">
            <?php foreach($location->result() as $row) {?>

            <option value="<?php echo $row->location_name;?>" > <?php echo $row->location_name;?> </option>
            <?php } ?>

            </select>
            </div>
            <div class="form-block">
                <label for="">CATEGORY NAME</label>
                <input type="text" placeholder="CATEGORY NAME" name="category_name" required>
            </div>
            <div class=" form-block">
                <label for="">META TITLE</label>
                <input type="text" placeholder="Meta Title" name="meta_title" required>
                <label for="">META DESCRIPTION</label>
                <input type="text" placeholder="Meta Description" name="meta_desc" required>
            </div>
            <div class="form-block">
                <label for="">CATEGORY ICON</label>
                <input type="file" name="userfile" required>
            </div>
            <div class="form-block">
                <label for="">ICON ALT </label>
                <input type="text" placeholder="ICON ALT" name="icon_alt" required>
            </div>
            <div class="form-block">
                <label for="">FOOTER CONTENT</label>
                <textarea id="textarea_id" class="textarea_id" name="footer_category_content" required>FOOTER DATA</textarea>
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