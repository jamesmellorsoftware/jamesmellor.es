<section href="about" class="terminal terminal-about">

    <div class="terminal-topbar terminal-about-topbar terminal-topbar__dark">

        <?php foreach (SECTION_ABOUT_TITLE as $lang => $output) { ?>
            <span class="terminal-topbar-text
            terminal-about-topbar-text" lang="<?php echo $lang; ?>">
                <?php echo $output; ?>
            </span>
        <?php } ?>

        <?php require("includes/terminal_topbar.php"); ?>

    </div>

    <div class="terminal-content terminal-about-content">

        <div class="terminal-about-content-left fade_element">

            <?php foreach (SECTION_ABOUT_LEFT_HEADING as $lang => $output) { ?>
                <h1 class="terminal-about-content-left-heading" lang="<?php echo $lang; ?>">
                    <?php echo $output; ?>
                </h1>
            <?php } ?>

            <div class="terminal-about-content-left-paragraph">
                <?php foreach (SECTION_ABOUT_LEFT_PARAGRAPHS_TOP as $paragraph) { ?>
                    <?php foreach ($paragraph as $lang => $output) { ?>
                        <p lang="<?php echo $lang; ?>"><?php echo $output; ?></p>
                    <?php } ?>
                <?php } ?>
            </div>

            <div class="terminal-about-content-left-presenttech">
                <?php foreach (SECTION_ABOUT_SKILLS as $skill => $percentage) { ?>
                    <div class="terminal-about-content-left-presenttech-skill">

                        <span class="terminal-about-content-left-presenttech-skill-label">
                            <?php echo $skill; ?>
                        </span>

                        <span class="terminal-about-content-left-presenttech-skill-amount"
                        style="width: <?php echo $percentage; ?>%">&nbsp;</span>

                        <span class="terminal-about-content-left-presenttech-skill-percent"
                        style="width: <?php echo 100 - $percentage; ?>%">&nbsp;</span>

                        <span class="terminal-about-content-left-presenttech-skill-percentage">
                            <?php echo $percentage; ?>%
                        </span>

                    </div>
                <?php } ?>
            </div>

            <div class="terminal-about-content-left-paragraph">
                <?php foreach (SECTION_ABOUT_LEFT_PARAGRAPHS_BOTTOM as $paragraph) { ?>
                    <?php foreach ($paragraph as $lang => $output) { ?>
                        <p lang="<?php echo $lang; ?>"><?php echo $output; ?></p>
                    <?php } ?>
                <?php } ?>
            </div>

        </div>

        <div class="terminal-about-content-right fade_element">

            <div class="terminal-about-content-right-location">
                <img class="terminal-about-content-right-location-img"
                src="img/passport.png" alt="Passport">

                <?php foreach (SECTION_ABOUT_RIGHT_FROM as $lang => $output) { ?>
                    <p lang="<?php echo $lang; ?>"><?php echo $output; ?></p>
                <?php } ?>

                <img class="terminal-about-content-right-location-img"
                src="img/pin.png" src="Location">
                
                <p>Barcelona, ES</p>
            </div>

            <div class="terminal-about-content-right-languages">
                <?php foreach (SECTION_ABOUT_RIGHT_LANGUAGES as $lang => $output) { ?>
                    <p lang="<?php echo $lang; ?>"><?php echo $output; ?></p>
                <?php } ?>
                
                <div>
                    <img class="terminal-about-content-right-languages-img"
                    src="img/uk.png" alt="English">
                    <img class="terminal-about-content-right-languages-img"
                    src="img/spain.png" alt="Spanish">
                </div>
            </div>

        </div>
    </div>

</section>