<div class="right-d">
    <div class="card">
        <h4>ADD A LOCATION</h4><a href="<?php echo base_url() ?>admin/add_location" class="link-2">+ ADD</a>
    </div>
    <div class="card">
        <h4>ADD SUB LOCATION</h4><a href="<?php echo base_url() ?>admin/add_sub_location" class="link-2">+ ADD</a>
    </div>
    <h4>LOCATIONS</h4>
    <div id="card2">
        <select name="" id="loc">
            <?php
            foreach ($location->result() as $row) {
                echo '<option value="' . $row->location_name . '">' . $row->location_name . '</option>';
            } ?>
        </select>
        <button id="loc_del" style="background-color: red;color:#fff;">DELETE LOCATION</button>
        <button id="loc_edt" style="background-color: grey;color:#000;">EDIT LOCATION</button>
    </div>
    <div id="card">
        <!-- <div class="card-content">
            Kormanagala
            <div class="options">
                <a href="#" class="actions w-inline-block"><img src="<?php #echo base_url();
                                                                        ?>assets/images/edit.png" loading="lazy" width="33" alt="" /></a>
                <a href="#" class="actions w-inline-block"><img src="<?php #echo base_url();
                                                                        ?>assets/images/delete.png" loading="lazy" width="33" alt="" /></a>
            </div>
        </div> -->
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    // console.log($('#loc').val());
    // // $('#loc').on('change', function() {
    // //     console.log($('#loc').val());
    // // })
    $(document).ready(function() {
        $('#loc').change(function() {
            $.ajax({
                url: "<?php echo base_url() ?>admin/get_sub_location",
                data: {
                    city: $('#loc').val()
                },
                method: 'POST',
                success: function(result) {
                    $("#card").html(result);
                }
            });
        })
        $.ajax({
            url: "<?php echo base_url() ?>admin/get_sub_location",
            data: {
                city: $('#loc').val()
            },
            method: 'POST',
            success: function(result) {
                $("#card").html(result);
            }
        });
        $("#loc_del").click(function() {
            $.ajax({
                url: "<?php echo base_url() ?>admin/delete_location",
                data: {
                    location: $('#loc').val()
                },
                method: 'POST',
                success: function(result) {
                    window.location.reload();
                }
            });
        });
        $("#loc_edt").click(function() {
            window.location.href = "<?php echo base_url() ?>admin/edit_location/" + $('#loc').val();
        });
    });
</script>
<style>
    #card {
        margin-left: 10px;
        margin-right: 10px;
        background-color: #fff;
        padding: 20px;
        width: 90%;
        margin-bottom: 10px;
    }

    #card2 {
        margin-left: 10px;
        margin-right: 10px;
        background-color: #fff;
        padding: 20px;
        width: 90%;
        margin-bottom: 10px;
    }

    .card-content {
        width: 100%;
        border-bottom: 1px solid #f1f1f1;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
</style>