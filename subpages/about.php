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
                <p>I'm James, and I'm a software developer.</p>
                <p>I use programming languages and development tools to produce computer applications.</p>
                <p>"Full-stack developer" is more accurate - I've mostly worked on systems with
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
                <p>However, I believe labels are restricting.</p>
                <p>While I'm best at full-stack at the moment, this may change in the future.</p>
                <p>I'm interested in many aspects of programming, design, and development.</p>
                <p>In the past, I've used C++, MATLAB, BASIC, and IBM RPG.<p>
                <p>
                    At the moment I'm interested in learning Laravel, improving my JavaScript skills,
                    eventually building some React proejcts, and potentially learning a lower-level
                    language such as C.
                </p>
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
                Languages
                <div>
                    <img class="terminal-about-content-right-languages-img" src="img/uk.png" alt="English">
                    <img class="terminal-about-content-right-languages-img" src="img/spain.png" alt="Spanish">
                </div>
            </div>
        </div>
    </div>
</section>