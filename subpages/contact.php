<section href="contact" class="terminal terminal-contact">

    <div class="terminal-topbar terminal-contact-topbar terminal-topbar__dark">

        <?php foreach (SECTION_CONTACT_TITLE as $lang => $output) { ?>
            <span class="terminal-topbar-text
            terminal-contact-topbar-text" lang="<?php echo $lang; ?>">
                <?php echo $output; ?>
            </span>
        <?php } ?>

        <?php require("includes/terminal_topbar.php"); ?>

    </div>

    <div class="terminal-content terminal-contact-content">

        <div class="terminal-contact-content-icons">

            <div class="terminal-contact-content-icons-email fade_element">
                <img src="img/email.png" href="<?php echo SECTION_CONTACT_EMAIL; ?>"
                class="terminal-contact-content-icons-icon" alt="Email">
                <span class="terminal-contact-content-icons-icon-label">
                    <?php echo SECTION_CONTACT_EMAIL; ?>
                </span>
            </div>

            <div class="terminal-contact-content-icons-linkedin fade_element">
                <img src="img/linkedin.png" href="<?php echo SECTION_CONTACT_LINKEDIN_URL; ?>"
                class="terminal-contact-content-icons-icon" alt="LinkedIn">
                <span class="terminal-contact-content-icons-icon-label">
                    <?php echo SECTION_CONTACT_LINKEDIN; ?>
                </span>
            </div>

        </div>

    </div>

</section>