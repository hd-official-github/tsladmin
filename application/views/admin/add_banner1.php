<script type="text/javascript" src="<?php echo base_url() ?>assets/js/ckeditor/ckeditor.js"></script>
<div class="right-d">
    <?php if (isset($err)) {
        echo $err;
    } ?>
    <h4 class="heading-2"></h4>
    <div class="blog-list">

        <form style="width: 100%;" action="<?php echo base_url() ?>admin/submit_banner1" method="POST" enctype="multipart/form-data">
            <h4>If category is left empty. The banner will be added to the location page and not on the location->category page</h4>
            <div class="form-block">
                <label for="">SELECT LOCATION</label>
                <select name="location" id="loc">
                    <option value="#" default>PLEASE SELECT LOCATION..</option>
                    <?php foreach ($loc_list->result() as $row) {
                        echo '<option value="' . $row->location_name . '">' . $row->location_name . '</option>';
                    } ?>
                </select>
            </div>
            <div class="form-block">
                <label for="">IMAGE FOR DESKTOP</label>
                <input type="file" placeholder="CHOOSE IMAGES" name="main_img_desktop">
            </div>
            <div class="form-block">
                <label for="">IMG ALT FOR DESKTOP (Seperate by ,) Eg. (ALT1,ALT2,ALT3)</label>
                <input type="text" placeholder="ALT1, ALT2, ALT3" name="img_alt_desktop" required>
            </div>

            <div class="form-block">
                <label for="">IMAGE FOR MOBILE </label>
                <input type="file" placeholder="CHOOSE IMAGES" name="main_img_mobile">
            </div>
            <div class="form-block">
                <label for="">IMG ALT FOR MOBILE (Seperate by ,) Eg. (ALT1,ALT2,ALT3)</label>
                <input type="text" placeholder="ALT1, ALT2, ALT3" name="img_alt_mobile" required>
            </div>
            <div class="form-block">
                <input type="submit" name="submit" value="SUBMIT" class="button">
            </div>

        </form>
    </div>
</div>
<script>
    CKEDITOR.replace('textarea_id');
    CKEDITOR.replace('textarea_id2');
    CKEDITOR.replace('textarea_id3');
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

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function() {

        $("#loc").change(function() {
            $.ajax({
                url: "<?php echo base_url() ?>admin/get_sub_loc",
                data: {
                    location: $('#loc').val()
                },
                method: 'POST',
                success: function(result) {
                    $("#subloc").html(result);
                }
            });
            console.log($('#loc').val());
        });

    });
</script>