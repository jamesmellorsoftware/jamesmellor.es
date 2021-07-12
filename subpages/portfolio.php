<section class="terminal terminal-portfolio">
    <div class="terminal-topbar terminal-portfolio-topbar terminal-topbar__dark">
        <?php foreach (SECTION_PORTFOLIO_TITLE as $lang => $output) { ?>
            <span class="terminal-topbar-text terminal-topbar-portfolio-text" lang="<?php echo $lang; ?>">
                <?php echo $output; ?>
            </span>
        <?php } ?>
        <?php require("includes/terminal_topbar.php"); ?>
    </div>

    <div class="terminal-content terminal-portfolio-content">
        <h1>Portfolio</h1>
    </div>
</section>