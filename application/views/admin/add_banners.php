<div class="right-d">
    <div class="card">
        <h4>ADD BANNER FIRST</h4><a href="<?php echo base_url() ?>admin/add_banner1" class="link-2">+ ADD</a>
    </div>
    <div class="card">
        <h4>ADD BANNER SECOND</h4><a href="<?php echo base_url() ?>admin/add_banner2" class="link-2">+ ADD</a>
    </div><br>
    

    
    
    


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