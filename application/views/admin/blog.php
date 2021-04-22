<div class="right-d">
    <div class="card">
        <h4>ADD BLOG</h4><a href="<?php echo base_url() ?>admin/add_blog" class="link-2">+ ADD</a>
    </div>
    <div class="card">
        <h4>ADD FEATURE BLOG</h4><a href="<?php echo base_url() ?>admin/add_feature_blog" class="link-2">+ ADD</a>
    </div>
    <h4 class="heading-2" style="font-family:Arial, Helvetica, sans-serif;">Blog List</h4>
    <?php
    foreach ($blogs->result() as $row) {
        echo '<div class="blog-list">
                    <div class="bleft">
                        <h5>Date created : XXX</h5>
                        <p class="paragraph-5">' . substr($row->blog_title, 0, 50) . '....</p>
                    </div>
                    <div class="bright">
                        <a href="' . base_url() . 'admin/edit_blog/' . $row->id . '" class="actions w-inline-block"><img src="' . base_url() . 'assets/images/edit.png" loading="lazy" width="33" alt="" /></a>
                        <a href="' . base_url() . 'admin/delete_blog/' . $row->id . '" class="actions w-inline-block"><img src="' . base_url() . 'assets/images/delete.png" loading="lazy" width="32" sizes="(max-width: 479px) 100vw, 32px" alt="" /></a>
                    </div>
                </div>';
    }
    ?>

</div>