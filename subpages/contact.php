<section href="contact" class="terminal terminal-contact">
    <div class="terminal-topbar terminal-contact-topbar terminal-topbar__dark">
        <?php foreach (SECTION_CONTACT_TITLE as $lang => $output) { ?>
            <span class="terminal-topbar-text terminal-contact-topbar-text" lang="<?php echo $lang; ?>">
                <?php echo $output; ?>
            </span>
        <?php } ?>
        <?php require("includes/terminal_topbar.php"); ?>
    </div>

    <div class="terminal-content terminal-contact-content">
        <div class="terminal-contact-content-icons">
            <div class="terminal-contact-content-icons-email">
                <img src="img/email.png" alt="Email" href="<?php echo SECTION_CONTACT_EMAIL; ?>"
                class="terminal-contact-content-icons-icon">
                <span class="terminal-contact-content-icons-icon-label">
                    <?php echo SECTION_CONTACT_EMAIL; ?>
                </span>
            </div>
            <div class="terminal-contact-content-icons-linkedin">
                <img src="img/linkedin.png" alt="Email" href="<?php echo SECTION_CONTACT_LINKEDIN_URL; ?>"
                class="terminal-contact-content-icons-icon">
                <span class="terminal-contact-content-icons-icon-label">
                    <?php echo SECTION_CONTACT_LINKEDIN; ?>
                </span>
            </div>
        </div>
    </div>
</section>