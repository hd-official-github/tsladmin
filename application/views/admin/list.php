<div class="right-d">
    <div class="card">
        <h4>ADD A BUSINESS</h4><a href="<?php echo base_url() ?>admin/add_business" class="link-2">+ ADD</a>
    </div>
    <div class="card">
        <h4>ADD REVIEWS</h4><a href="<?php echo base_url() ?>admin/add_reviews" class="link-2">+ ADD</a>
    </div>
    <div class="card">
        <h4>ADD IMAGES</h4><a href="<?php echo base_url() ?>admin/add_business_image" class="link-2">+ ADD</a>
    </div>
    <div class="card">
        <h4>ADD FAQ</h4><a href="<?php echo base_url() ?>admin/add_faq" class="link-2">+ ADD</a>
    </div>
    <h2 class="heading-2">Business List</h2>
    <?php
    foreach ($business->result() as $row) {
        echo '<div class="blog-list">
                    <div class="bleft">
                        <p class="paragraph-5">' . $row->business_name . '</p>
                    </div>
                    <div class="bright">
                        <a href="' . base_url() . 'admin/edit_business/' . $row->business_id . '" class="actions w-inline-block"><img src="' . base_url() . 'assets/images/edit.png" loading="lazy" width="33" alt="" /></a>
                        <a href="' . base_url() . 'admin/delete_business/' . $row->business_id . '" class="actions w-inline-block"><img src="' . base_url() . 'assets/images/delete.png" loading="lazy" width="32" sizes="(max-width: 479px) 100vw, 32px" alt="" /></a>
                    </div>
               </div>';
    }
    ?>

</div>