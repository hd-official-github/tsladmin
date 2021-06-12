<script type="text/javascript" src="<?php echo base_url() ?>assets/js/ckeditor/ckeditor.js"></script>
<div class="right-d">
    <div class="card ">
        <h4>Approval Details</h4>
        <p style="color: red;font-weight:bold;"> <?php if (isset($err)) echo $err; ?></p>
    </div>
    <?php foreach ($bid_details->result() as $data) { ?>
        <section class="sec bg-white px-4">
            <form style="width: 100%;" action="<?php echo base_url() ?>admin/submit_verified_business" method="POST">
                <div class="form-block py-2">
                    <label for="">Business ID</label>
                    <input type="text" placeholder="Business Name" name="business_id" class="form-control" required value="<?php echo $data->business_id; ?>">
                </div>
                <div class="form-block py-2">
                    <label for="">Business name</label>
                    <input type="text" placeholder="Business Name" name="business_name" class="form-control" required value="<?php echo $data->business_name; ?>">
                </div>
                <div class="form-block py-2">
                    <label for="">Email</label>
                    <input type="text" placeholder="Email" name="email" class="form-control" required value="<?php echo $data->email_id; ?>">
                </div>
                <div class='form-group py-2'>
                    <label for="">Location </label>
                    <select id="loc" name="location" class="form-control">
                        <option default value="<?php echo $data->location; ?>"><?php echo ucwords($data->location); ?></option>
                        <?php foreach ($location->result() as $row) { ?>
                            <option value="<?php echo $row->location_name; ?>"> <?php echo $row->location_name; ?> </option>
                        <?php } ?>
                    </select>
                </div>
                <div class='form-group py-2'>
                    <label for="">Sub Location </label>
                    <select id="subloc" name="sub_location" class="form-control">
                        <option default value="<?php echo $data->sub_location; ?>"><?php echo $data->sub_location; ?></option>
                        <?php foreach ($location->result() as $row) { ?>
                            <option value="<?php echo $row->location_name; ?>"> <?php echo $row->location_name; ?> </option>
                        <?php } ?>
                    </select>
                </div>
                <div class='form-group py-2'>
                    <label for="">Category </label>
                    <select id="" name="category_id" id="" class="form-control">
                        <option default value="<?php echo $data->category; ?>"><?php echo $data->category; ?></option>
                        <?php foreach ($category->result() as $row) { ?>
                            <option value="<?php echo $row->id; ?>"> <?php echo $row->category_name; ?> </option>
                        <?php } ?>
                    </select>
                </div>
                <div class=" form-block py-2 alert alert-danger">
                    <label for="">META TITLE</label>
                    <input type="text" placeholder="Meta Title" name="meta_title" class="form-control" required>
                    <label for="">META DESCRIPTION</label>
                    <input type="text" placeholder="Meta Description" name="meta_desc" class="form-control" required>
                </div>

                <div class=" form-block py-2 alert alert-danger">
                    <label for="">GIVE RATING</label>
                    <input type="text" placeholder="Rating" name="rating" class="form-control" required>
                </div>
                <div class=" form-block py-2 alert alert-danger">
                    <label for="">IFRAME MAP LOCATION</label>
                    <input type="text" placeholder="Map Location" name="map_loc" class="form-control" required>
                </div>

                <div class="form-block py-2">
                    <label for="">Features</label>
                    <textarea id="textarea_id" class="textarea_id" name="features" required><?php echo $data->features; ?></textarea>
                </div>
                <div class="form-block py-2">
                    <label for="">About </label>
                    <textarea id="textarea_id2" class="textarea_id2" name="about" required><?php echo $data->about; ?></textarea>
                </div>
                <div class=" form-block py-2 ">
                    <label for="">PHONE</label>
                    <input type="text" placeholder="Phone" name="mobno" class="form-control" required value="<?php echo $data->phone; ?>">
                    <label for="">ADDRESS</label>
                    <input type="text" placeholder="Address" name="address" class="form-control" required value="<?php echo $data->address; ?>">
                </div>
                <div class=" form-block py-2 ">
                    <label for="">FACEBOOK</label>
                    <input type="text" placeholder="FACEBOOK" name="facebook" class="form-control" required value="<?php echo $data->facebook; ?>">
                    <label for="">INSTA</label>
                    <input type="text" placeholder="INSTA" name="instagram" class="form-control" required value="<?php echo $data->insta; ?>">
                    <label for="">TWITTER</label>
                    <input type="text" placeholder="TWITTER" name="twitter" class="form-control" required value="<?php echo $data->twitter; ?>">
                </div>
                <div class=" form-block py-2 ">
                    <label for="">Opening Hours</label>
                    <input type="text" placeholder="Opening hours" name="opening_hours" class="form-control" required value="<?php echo $data->opening; ?>">
                </div>
                <div class=" form-block py-2 ">
                    <label for="">Pricing</label>
                    <input type="text" placeholder="Pricing" name="price_range" class="form-control" required value="<?php echo $data->pricing; ?>">
                </div>
                <div class=" form-block py-2 ">
                    <label for="">Website</label>
                    <input type="text" placeholder="Website" name="website" class="form-control" required value="<?php echo $data->website; ?>">
                </div>
                <div class=" form-block py-2 alert alert-danger">
                    <img src="<?php echo $data->image_url ?>" width="200" height="200"><br>
                    <label for="">IMAGE URL</label>
                    <input type="text" placeholder="Image URL" name="main_image" class="form-control" required value="<?php echo $data->image_url; ?>">
                    <label for="">IMAGE NAME</label>
                    <input type="text" placeholder="Image Name" name="main_img_name" class="form-control" required value="<?php echo $data->img_name; ?>">
                    <label for="">IMAGE ALT REQUIRED</label>
                    <input type="text" placeholder="Image alt" name="main_img_alt" class="form-control" required value="">
                </div>
                <div class=" form-block py-2 alert alert-danger">
                    <div class="d-flex">
                        <?php foreach ($bid_images->result() as $img) { ?>
                            <img src="<?php echo $img->image_url ?>" width="100" height="100" class="px-2">
                        <?php } ?>
                    </div>
                    <label for="">ADDON IMAGE ALT SEPERATED by , Requried</label>
                    <input type="text" placeholder="Image alt" name="addon_img_alt" class="form-control" required value="">
                </div>
                <div class="form-block py-2">
                    <input type="submit" name="submit" value="APPROVE" class="btn btn-primary btn-large">
                    <input type="submit" name="submit" value="REJECT" class="btn btn-danger btn-large">
                </div>
            </form>
        </section>
    <?php } ?>
</div>
<script>
    CKEDITOR.replace('textarea_id');
    CKEDITOR.replace('textarea_id2');
    CKEDITOR.replace('textarea_id3');
</script>
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
<style>
    .sec {
        padding: 10px;
        padding-right: 20px;
    }

    .row {
        padding: 10px;
        background-color: #fff;
    }
</style>