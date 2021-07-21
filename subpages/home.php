<section href="home" class="terminal terminal-home">
    <div class="terminal-topbar terminal-home-topbar">
        <?php foreach (SECTION_TERMINAL_TITLE as $lang => $output) { ?>
            <span class="terminal-topbar-text terminal-home-topbar-text" lang="<?php echo $lang; ?>">
                <?php echo $output; ?>
            </span>
        <?php } ?>
        <?php require("includes/terminal_topbar.php"); ?>
    </div>
    <div class="terminal-content terminal-home-content">

        <div class="terminal-home-content-space cls">&nbsp;</div>

        <pre class="terminal-home-content-ascii cls">
        // ===========================================//
        // ===========================================//

        ░░█ ▄▀█ █▀▄▀█ █▀▀ █▀   █▀▄▀█ █▀▀ █░░ █░░ █▀█ █▀█
        █▄█ █▀█ █░▀░█ ██▄ ▄█   █░▀░█ ██▄ █▄▄ █▄▄ █▄█ █▀▄

        || SOFTWARE DEVELOPER ||

        // ===========================================//
        // ===========================================//
        </pre>

        <div class="terminal-home-content-operations">
            <div class="terminal-home-content-operations-intro cls">
                <?php foreach (SECTION_TERMINAL_OPERATIONS_INTRO as $output) { ?>
                    <p class="terminal-text terminal-home-text"><?php echo $output; ?></p>
                <?php } ?>
            </div>
            <div class="terminal-home-content-operations-welcome cls">
                <?php foreach (SECTION_TERMINAL_OPERATIONS_INSTRUCTIONS as $lang => $outputs) { ?>
                    <?php foreach ($outputs as $output) { ?>
                        <p class="terminal-text terminal-home-text" lang="<?php echo $lang; ?>">
                            &nbsp;
                        </p>
                        <p class="terminal-text terminal-home-text" lang="<?php echo $lang; ?>">
                            <?php echo $output; ?>
                        </p>
                    <?php } ?>
                <?php } ?>
                <p class="terminal-text terminal-home-text">&nbsp;</p>
            </div>
            <div class="terminal-home-content-operations-commands">
                <p class="terminal-text terminal-home-text
                terminal-home-content-operations-commands-command">
                    <?php foreach (SECTION_TERMINAL_COMMAND_PRETEXT as $lang => $output) { ?>
                        <span class="terminal-home-content-operations-commands-pre"
                        lang="<?php echo $lang; ?>">
                            [ <?php echo $output; ?>
                        </span>
                    <?php } ?>
                    <input type="text" class="terminal-home-content-input
                    terminal-home-content-operations-commands-input terminal-input">
                </p>
            </div>
        </div>

        <div class="terminal-home-content-space cls">
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
        </div>

    </div>
</section>