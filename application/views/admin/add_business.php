<script type="text/javascript" src="<?php echo base_url() ?>assets/js/ckeditor/ckeditor.js"></script>
<div class="right-d">
    <div class="card">
        <h4>ADD BUSINESS</h4>
        <p style="color: red;font-weight:bold;"> <?php if (isset($err)) echo $err; ?></p>
    </div>
    <h4 class="heading-2"></h4>
    <div class="blog-list">
        <form style="width: 100%;" action="<?php echo base_url() ?>admin/submit_business" method="POST" enctype="multipart/form-data">
            <div class=" form-block">
                <label for="">META TITLE</label>
                <input type="text" placeholder="Meta Title" name="meta_title" required>
                <label for="">META DESCRIPTION</label>
                <input type="text" placeholder="Meta Description" name="meta_desc" required>
            </div>
            <div class="form-block">
                <label for="">SELECT CATEGORY</label>
                <select name="category" id="">
                    <?php foreach ($category->result() as $row) {
                        echo '<option value="' . $row->id . '">' . $row->category_name . '</option>';
                    } ?>
                </select>
            </div>
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
                <label for="">SELECT SUB LOCATION</label>
                <select name="sub_location" id="sub_loc">
                    <option value="#" default>PLEASE SELECT SUB LOCATION..</option>
                    <?php foreach ($sub_loc->result() as $row) {
                        echo '<option value="' . $row->sub_loc_name . '">' . $row->sub_loc_name . '</option>';
                    } ?>
                </select>
            </div>
            <div class="form-block">
                <div id="subloc"></div>
            </div>
            <div class="form-block">
                <label for="">BUSINESS NAME</label>
                <input type="text" placeholder="BUSINESS NAME" name="business_name" required>
            </div>
            <div class="form-block">
                <label for="">ABOUT</label>
                <textarea id="textarea_id" class="textarea_id" name="about_business" required>ABOUT DATA</textarea>
            </div>
            <div class="form-block">
                <label for="">MAIN IMAGE</label>
                <input type="file" name="main_img" required>
            </div>
            <div class=" form-block">
                <label for="">IMAGE ALT</label>
                <input type="text" placeholder="IMAGE ALT" name="main_img_alt" required>
            </div>
            <div class=" form-block">
                <label for="">FEATURES</label>
                <textarea id="textarea_id2" class="textarea_id2" name="features" required>FEATURES DATA</textarea>
            </div>
            <div class="form-block">
                <label for="">BUSINESS ADDRESS</label>
                <input type="text" placeholder="BUSINESS ADDRESS" name="business_address" required>
            </div>
            <div class="form-block">
                <label for="">MAP LOCATION EMBEDED CODE</label>
                <input type="text" placeholder="BUSINESS LOCATION EMBED CODE" name="business_map_loc">
            </div>
            <div class="form-block">
                <label for="">MOB. NO.</label>
                <input type="number" placeholder="MOBILE NUMBER" name="mobno">
            </div>
            <div class="form-block">
                <label for="">EMAIL</label>
                <input type="email" placeholder="EMAIL" name="email">
            </div>

            <div class="form-block">
                <label for="">WEBSITE</label>
                <input type="text" placeholder="BUSINESS WEBSITE" name="business_website">
            </div>
            <div class="form-block">
                <label for="">FACEBOOK PAGE LINK</label>
                <input type="text" placeholder="FACEBOOK LINK" name="facebook_link">
            </div>
            <div class="form-block">
                <label for="">TWITTER PAGE LINK</label>
                <input type="text" placeholder="TWITTER LINK" name="twitter_link">
            </div>
            <div class="form-block">
                <label for="">INSTAGRAM PAGE LINK</label>
                <input type="text" placeholder="INSTAGRAM LINK" name="instagram_link">
            </div>
            <div class="form-block">
                <label for="">OPENING HOURS</label>
                <textarea id="textarea_id3" class="textarea_id3" name="opening" required>OPENING HOURS DATA</textarea>
            </div>
            <div class="form-block">
                <label for="">Princing range</label>
                <input type="text" placeholder="Price starting from Rs 999.00" name="pricing">
            </div>
            <div class="form-block">
                <label for="">FAKE RATING</label>
                <input type="text" placeholder="Rsting (eg. 4.0,5.0)" name="rating">
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