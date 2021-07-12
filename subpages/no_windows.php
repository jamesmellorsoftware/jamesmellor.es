<section class="no_windows">
    <p><?php echo PAGE_URL; ?></p>
    <?php foreach (SECTION_NOWINDOWS as $lang => $output) { ?>
        <p lang="<?php echo $lang; ?>"><?php echo $output; ?></p>
    <?php } ?>
</section>