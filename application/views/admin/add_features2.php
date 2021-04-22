<script type="text/javascript" src="<?php echo base_url() ?>assets/js/ckeditor/ckeditor.js"></script>
<div class="right-d">
    
    <h4 class="heading-2"></h4>
    <div class="blog-list">
        <form style="width: 100%;" action="<?php echo base_url() ?>admin/submit_features2" method="POST" enctype="multipart/form-data">
           
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
                <label for="">SELECT BUSINESS</label>
                <select name="business" id="" style="width:600px;">
                    <?php foreach ($business->result() as $row) {
                        echo '  <option value="' . $row->business_id . '">' . $row->business_name . '</option>';
                    }
                    ?>
                </select>
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