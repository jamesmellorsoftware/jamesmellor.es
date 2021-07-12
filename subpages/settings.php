<section href="settings" class="terminal terminal-settings">
    <div class="terminal-topbar terminal-settings-topbar terminal-topbar__dark">
        <?php foreach (SECTION_SETTINGS_TITLE as $lang => $output) { ?>
            <span class="terminal-topbar-text terminal-settings-topbar-text" lang="<?php echo $lang; ?>">
                <?php echo $output; ?>
            </span>
        <?php } ?>
        <?php require("includes/terminal_topbar.php"); ?>
    </div>

    <div class="terminal-content terminal-settings-content">
        <h1>Settings</h1>
    </div>
</section>