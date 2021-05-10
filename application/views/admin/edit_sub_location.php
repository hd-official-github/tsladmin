<div class="right-d">
    <div class="card">
        <h4>ADD SUB-LOCATION</h4>
        <p style="color: red;font-weight:bold;"> <?php if (isset($err)) echo $err; ?></p>
    </div>
    <h4 class="heading-2"></h4>
    <div class="blog-list">
        <form style="width: 100%;" action="<?php echo base_url() ?>admin/update_sub_location" method="POST" enctype="multipart/form-data">
            <div class="form-block">
                <label for="">LOCATION NAME</label>
                <?php foreach ($subloc_data->result() as $data) { ?>
                    <select name="location" style="padding-left: 10px;padding-right: 30px;">
                        <option default selected value="<?php echo $data->location_name ?>"><?php echo $data->location_name ?></option>
                        <?php
                        if ($location->num_rows() > 0) {
                            foreach ($location->result() as $row) {
                                echo '<option value="' . $row->location_name . '">' . $row->location_name . '</option>';
                            }
                        } else {
                            echo '<option default>NO LOCATION FOUND</option>';
                        }
                        ?>
                    </select>
            </div>
            <div class="form-block">
                <label for="">SUB-LOCATION </label>
                <input type="text" placeholder="Sub-location Name (ex. Indiranagar,Kormangala etc)" name="sub_loc" required value="<?php echo $data->sub_loc_name ?>">
            </div>
            <div class="form-block">
                <label for="">SUBLOCATION IMAGE</label>
                <input type="file" name="userfile" required>
                <img src="<?php echo $data->subloc_img; ?>" alt="" width="42">
                <input type="text" placeholder="IC URL" name="subloc_img" hidden value="<?php echo $data->subloc_img; ?>">
                <input type="text" placeholder="IC NAME" name="sublocimg_name" hidden value="<?php echo $data->sublocimg_name ?>">
            </div>
            <div class=" form-block">
                <label for="">META TITLE</label>
                <input type="text" placeholder="Meta Title" name="meta_title" required value="<?php echo $data->meta_title ?>">
                <label for="">META DESCRIPTION</label>
                <input type="text" placeholder="Meta Description" name="meta_desc" required value="<?php echo $data->meta_desc ?>">
                <input type="text" placeholder="ID" name="ide" required value="<?php echo $data->id ?>" hidden>
            </div>
        <?php } ?>
        <div class="form-block">
            <input type="submit" name="submit" value="SUBMIT" class="button">
        </div>
        </form>
    </div>
</div>
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