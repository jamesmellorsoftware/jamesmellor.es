<section href="about" class="terminal terminal-about">
    <div class="terminal-topbar terminal-about-topbar terminal-topbar__dark">
        <?php foreach (SECTION_ABOUT_TITLE as $lang => $output) { ?>
            <span class="terminal-topbar-text terminal-about-topbar-text" lang="<?php echo $lang; ?>">
                <?php echo $output; ?>
            </span>
        <?php } ?>
        <?php require("includes/terminal_topbar.php"); ?>
    </div>

    <div class="terminal-content terminal-about-content">

        <div class="terminal-about-content-left">
            <h1 class="terminal-about-content-left-heading">
                Hello.
            </h1>
            <div class="terminal-about-content-left-paragraph">
                <p>I'm James Mellor, a software developer from the UK.</p>
                <p>"Full-stack developer" would be more accurate as I've mostly worked on systems with
                JavaScript frontends, PHP backends, and SQL databases.</p>
                <p>Here are some of my skills and my confidence level with them.</p>
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
                <p>Labels are quite restricting, though, and while I'm best at full-stack at the moment, this may change
                in the future, as I'm interested in many aspects of programming, design, and development.</p>
                <p>I've also used C++, MATLAB, BASIC, and IBM RPG.<p>
                <p>I'm interested in Laravel aaaa others</p>
            </div>
        </div>

        <div class="terminal-about-content-right">
            <div class="terminal-about-content-right-location">
                <img class="terminal-about-content-right-location-img" src="img/passport.png" alt="Passport">
                United Kingdom<br>
                <img class="terminal-about-content-right-location-img" src="img/pin.png" src="Location">
                Barcelona, ES
            </div>
            <div class="terminal-about-content-right-languages">
                I speak
                <div>
                    <img class="terminal-about-content-right-languages-img" src="img/uk.png" alt="English">
                    <img class="terminal-about-content-right-languages-img" src="img/spain.png" alt="Spanish">
                </div>
            </div>
        </div>
    </div>
</section>