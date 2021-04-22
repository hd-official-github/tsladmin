<script type="text/javascript" src="<?php echo base_url() ?>assets/js/ckeditor/ckeditor.js"></script>
<div class="right-d">
    <div class="card">
        <h4>ADD LOCATION</h4>
        <p style="color: red;font-weight:bold;"> <?php if (isset($err)) echo $err; ?></p>
    </div>
    <h4 class="heading-2"></h4>
    <div class="blog-list">
        <form style="width: 100%;" action="<?php echo base_url() ?>admin/submit_location" method="POST">

            <div class="form-block">
                <label for="">LOCATION NAME</label>
                <input type="text" placeholder="LOCATION NAME" name="location" required>
            </div>
            <div class=" form-block">
                <label for="">META TITLE</label>
                <input type="text" placeholder="Meta Title" name="meta_title" required>
                <label for="">META DESCRIPTION</label>
                <input type="text" placeholder="Meta Description" name="meta_desc" required>
            </div>

            <div class="form-block">
                <label for="">FOOTER CONTENT</label>
                <textarea id="textarea_id" class="textarea_id" name="footer_location_content" required>FOOTER DATA</textarea>
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