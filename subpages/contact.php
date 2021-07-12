<section class="terminal terminal-contact">
    <div class="terminal-topbar terminal-contact-topbar terminal-topbar__dark">
        <?php foreach (SECTION_CONTACT_TITLE as $lang => $output) { ?>
            <span class="terminal-topbar-text terminal-contact-topbar-text" lang="<?php echo $lang; ?>">
                <?php echo $output; ?>
            </span>
        <?php } ?>
        <?php require("includes/terminal_topbar.php"); ?>
    </div>

    <div class="terminal-content terminal-contact-content">
        <h1>Contact me</h1>
        Email - LinkedIn
    </div>
</section>