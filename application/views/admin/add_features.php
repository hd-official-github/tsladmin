<div class="right-d">
    <div class="card">
        <h4>ADD FEATURES FIRST</h4><a href="<?php echo base_url() ?>admin/add_features1" class="link-2">+ ADD</a>
    </div>
    <div class="card">
        <h4>ADD FEATURES SECOND</h4><a href="<?php echo base_url() ?>admin/add_features2" class="link-2">+ ADD</a>
    </div><br>
    <div class="form-block" style='margin-left:5px;'>
        <label for="">SELECT LOCATION</label>
        <select name="location" class='location_name'>
            <option value="#" default>PLEASE SELECT LOCATION..</option>
            <?php foreach ($loc_list->result() as $row) {
                echo '<option value="' . $row->location_name . '">' . $row->location_name . '</option>';
            } ?>
        </select>
    </div>
<br>
    <div class="form-block" style='margin-left:5px; display:inline-block'>
        <label for="">SELECT FEATURE</label>
        <select name="feature" class='feature_name'>
            <option value="#" default>PLEASE SELECT FEATURE..</option>

            <option value="1">Feature first</option>
            <option value="2">Feature second</option>
        </select>
    </div>
    <div class="form-block" style='margin-left:5px; display:inline-block'>
            <a style='border:1px solid black; padding:10px; border-radius:5px;' class="btn_feature"> Get Feature list</a>
    </div>
    <h2 class="heading-2">Features List</h2>
    <div class="content">

    </div>


</div>
<style>
    .btn_feature:hover{
        background-color:orangered;
        color:white;
        
    }
</style>
<script>
    $(document).ready(function(){
  
    $('.btn_feature').on("click",function(){
      var loc = $('select.location_name').val();
      var feature = $('select.feature_name').val();
      
      $.ajax({
            url:"<?php echo base_url().'admin/getfeature'?>",
            data:"location="+loc+"&feature="+feature,
            type:"post",
            success:function(result){
                $('.content').html(result);
            }
       });
       
    });
});
</script>