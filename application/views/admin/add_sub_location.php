<div class="right-d">
    <div class="card">
        <h4>ADD SUB-LOCATION</h4>
        <p style="color: red;font-weight:bold;"> <?php if (isset($err)) echo $err; ?></p>
    </div>
    <h4 class="heading-2"></h4>
    <div class="blog-list">
        <form style="width: 100%;" action="<?php echo base_url() ?>admin/submit_sub_location" method="POST">
            <div class="form-block">
                <label for="">LOCATION NAME</label>
                <select name="location" style="padding-left: 10px;padding-right: 30px;">
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
                <input type="text" placeholder="Sub-location Name (ex. Indiranagar,Kormangala etc)" name="sub_loc" required>
            </div>
            <div class=" form-block">
                <label for="">META TITLE</label>
                <input type="text" placeholder="Meta Title" name="meta_title" required>
                <label for="">META DESCRIPTION</label>
                <input type="text" placeholder="Meta Description" name="meta_desc" required>
            </div>
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