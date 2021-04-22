<script type="text/javascript" src="<?php echo base_url() ?>assets/js/ckeditor/ckeditor.js"></script>
<div class="right-d">
    <div class="card">
        <h4>EDIT BUSINESS</h4>
        <p style="color: red;font-weight:bold;"> <?php if (isset($err)) echo $err; ?></p>
    </div>
    <h4 class="heading-2"></h4>
    <div class="blog-list">
        <form style="width: 100%;" action="<?php echo base_url() ?>admin/update_business" method="POST" enctype="multipart/form-data">
            <div class=" form-block">
                <input type="text" placeholder="" name="business_id" required value="<?php echo $business_id; ?>" hidden>
                <input type="text" placeholder="" name="main_image" required value="<?php echo $main_image; ?>" hidden>
                <input type="text" placeholder="" name="main_img_name" required value="<?php echo $main_img_name; ?>" hidden>
                <label for="">META TITLE</label>
                <input type="text" placeholder="Meta Title" name="meta_title" required value="<?php echo $meta_title; ?>">
                <label for="">META DESCRIPTION</label>
                <input type="text" placeholder="Meta Description" name="meta_desc" required value="<?php echo $meta_desc; ?>">
            </div>
            <div class="form-block">
                <label for="">SELECT CATEGORY</label>
                <select name="category" id="">
                    <option value="<?php echo $category_id ?>" default selected><?php echo $cat_name; ?></option>
                    <?php foreach ($category->result() as $row) {
                        echo '<option value="' . $row->id . '">' . $row->category_name . '</option>';
                    } ?>
                </select>
            </div>
            <div class="form-block">
                <label for="">SELECT LOCATION</label>
                <select name="location" id="loc">
                    <option value="<?php echo $location ?>" default selected><?php echo $location; ?></option>
                    <?php foreach ($loc_list->result() as $row) {
                        echo '<option value="' . $row->location_name . '">' . $row->location_name . '</option>';
                    } ?>
                </select>
            </div>
            <div class="form-block">
                <label for="">SELECT SUB LOCATION</label>
            </div>
            <div class="form-block">

                <div id="subloc">
                    <select name="sub_location" id="">
                        <option value="<?php echo $sub_location; ?>" default><?php echo $sub_location; ?></option>
                    </select>
                </div>
            </div>
            <div class="form-block">
                <label for="">BUSINESS NAME</label>
                <input type="text" placeholder="BUSINESS NAME" name="business_name" required value="<?php echo $business_name; ?>">
            </div>
            <div class="form-block">
                <label for="">ABOUT</label>
                <textarea id="textarea_id" class="textarea_id" name="about_business" required><?php echo $about; ?></textarea>
            </div>
            <div class="form-block">
                <label for="">MAIN IMAGE</label>
                <input type="file" name="main_img">
                <img src="<?php echo $main_image; ?>" alt="" srcset="" width="32">
            </div>
            <div class=" form-block">
                <label for="">IMAGE ALT</label>
                <input type="text" placeholder="IMAGE ALT" name="main_img_alt" required value="<?php echo $main_img_alt; ?>">
            </div>
            <div class=" form-block">
                <label for="">FEATURES</label>
                <textarea id="textarea_id2" class="textarea_id2" name="features" required><?php echo $features; ?></textarea>
            </div>
            <div class="form-block">
                <label for="">BUSINESS ADDRESS</label>
                <input type="text" placeholder="BUSINESS ADDRESS" name="business_address" required value="<?php echo $address; ?>">
            </div>
            <div class="form-block">
                <label for="">MAP LOCATION EMBEDED CODE</label>
                <input type="text" placeholder="BUSINESS LOCATION EMBED CODE" name="business_map_loc" value="<?php echo $map_loc; ?>">
            </div>
            <div class="form-block">
                <label for="">WEBSITE</label>
                <input type="text" placeholder="BUSINESS WEBSITE" name="business_website" value="<?php echo $website; ?>">
            </div>
            <div class="form-block">
                <label for="">FACEBOOK PAGE LINK</label>
                <input type="text" placeholder="FACEBOOK LINK" name="facebook_link" value="<?php echo $facebook; ?>">
            </div>
            <div class="form-block">
                <label for="">TWITTER PAGE LINK</label>
                <input type="text" placeholder="TWITTER LINK" name="twitter_link" value="<?php echo $twitter; ?>">
            </div>
            <div class="form-block">
                <label for="">INSTAGRAM PAGE LINK</label>
                <input type="text" placeholder="INSTAGRAM LINK" name="instagram_link" value="<?php echo $instagram; ?>">
            </div>
            <div class="form-block">
                <label for="">OPENING HOURS</label>
                <textarea id="textarea_id3" class="textarea_id3" name="opening" required><?php echo $opening_hours; ?></textarea>
            </div>
            <div class="form-block">
                <label for="">Princing range</label>
                <input type="text" placeholder="Price starting from Rs 999.00" name="pricing" value="<?php echo $price_range; ?>">
            </div>
            <div class="form-block">
                <label for="">FAKE RATING</label>
                <input type="text" placeholder="Rsting (eg. 4.0,5.0)" name="rating" value="<?php echo $rating; ?>">
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

        });

    });
</script>