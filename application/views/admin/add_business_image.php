<script type="text/javascript" src="<?php echo base_url() ?>assets/js/ckeditor/ckeditor.js"></script>
<div class="right-d">
    <div class="card">
        <h4>ADD BUSINESS IMAGE</h4>
        <p style="color: red;font-weight:bold;"> <?php if (isset($err)) echo $err; ?></p>
    </div>
    <h4 class="heading-2"></h4>
    <div class="blog-list">
        <form style="width: 100%;" action="<?php echo base_url() ?>admin/submit_business_image" method="POST" enctype="multipart/form-data">
            <div class="form-block">
                <label for="">SELECT BUSINESS</label>
                <select name="business" id="" style="width:600px;">
                    <?php foreach ($business->result() as $row) {
                        echo '  <option value="' . $row->business_id . '">' . $row->business_name . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="form-block">
                <label for="">IMAGES</label>
                <input type="file" placeholder="CHOOSE IMAGES" name="files[]" multiple>
            </div>
            <div class="form-block">
                <label for="">IMG ALT (Seperate by ,) Eg. (ALT1,ALT2,ALT3)</label>
                <input type="text" placeholder="ALT1, ALT2, ALT3" name="img_alt" required>
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