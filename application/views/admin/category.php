<div class="right-d">
    <div class="card">
        <h4>ADD CATEGORY</h4><a href="<?php echo base_url() ?>admin/add_category" class="link-2">+ ADD</a>
    </div>
    <div class="card">
        <h4>ADD SUBCATEGORY</h4><a href="<?php echo base_url() ?>admin/add_sub_category" class="link-2">+ ADD</a>
    </div>
    <h4>CATEGORY</h4>
    <div id="card2">
        <select name="" id="cat">
            <?php
            foreach ($category->result() as $row) {
                echo '<option value="' . $row->category_name . '">' . $row->category_name . '</option>';
            } ?>
        </select>
        <button id="cat_del" style="background-color: red;color:#fff;">DELETE CATEGORY</button>
        <button id="cat_edt" style="background-color: grey;color:#fff;">EDIT CATEGORY</button>
    </div>
    <div id="card">

    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    // console.log($('#loc').val());
    // // $('#loc').on('change', function() {
    // //     console.log($('#loc').val());
    // // })
    $(document).ready(function() {


        $('#cat').change(function() {
            $.ajax({
                url: "<?php echo base_url() ?>admin/get_sub_category",
                data: {
                    category: $('#cat').val()
                },
                method: 'POST',
                success: function(result) {
                    $("#card").html(result);
                }
            });
        })
        $.ajax({
            url: "<?php echo base_url() ?>admin/get_sub_category",
            data: {
                category: $('#cat').val()
            },
            method: 'POST',
            success: function(result) {
                $("#card").html(result);
            }
        });
        $("#cat_del").click(function() {
            $.ajax({
                url: "<?php echo base_url() ?>admin/delete_category",
                data: {
                    category: $('#cat').val()
                },
                method: 'POST',
                success: function(result) {
                    window.location.reload();
                }
            });
        });
        $("#cat_edt").click(function() {
            var cat = $('#cat').val();
            window.location.href = "<?php echo base_url() ?>admin/edit_category/" + cat.replace(' ', '-');
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