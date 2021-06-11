<div class="right-d">
    <div class="card">
        <h4>Waiting for approval</h4>
        <p style="color: red;font-weight:bold;"> <?php if (isset($err)) echo $err; ?></p>
    </div>
    <h4 class="heading-2"></h4>
    <section class="sec">
        <?php foreach ($approval->result() as $row) { ?>
            <div class="row " style="display:flex;justify-content:space-between;margin-bottom:3px;">
                <div class="name">
                    <?php echo $row->business_name; ?>
                </div>
                <div class="opt">
                    <a href="">Verify Now</a>
                </div>
            </div>
        <?php } ?>
        <div class="row " style="display:flex;justify-content:space-between;margin-bottom:3px;">
            <div class="name">
                Business Name
            </div>
            <div class="opt">
                <a href="">Verify Now</a>
            </div>
        </div>
        <div class="row " style="display:flex;justify-content:space-between;margin-bottom:3px;">
            <div class="name">
                Business Name
            </div>
            <div class="opt">
                <a href="">Verify Now</a>
            </div>
        </div>
    </section>
</div>

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