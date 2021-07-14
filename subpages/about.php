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
        <div class="terminal-about-content-section terminal-about-content-intro">
            <span class="terminal-about-content-intro-text terminal-about-content-intro-text-1">
                I'm a software developer
            </span>
            <img class="terminal-about-content-intro-image terminal-about-content-intro-image-1"
            src="img/code.png" alt="Code">
            <span class="terminal-about-content-intro-text terminal-about-content-intro-text-2">
                from the UK
            </span>
            <img class="terminal-about-content-intro-image terminal-about-content-intro-image-2"
            src="img/united-kingdom.png" alt="UK">
            <span class="terminal-about-content-intro-text terminal-about-content-intro-text-3">
                currently in: Barcelona
            </span>
            <img class="terminal-about-content-intro-image terminal-about-content-intro-image-3"
            src="img/sagrada-familia.png" alt="Barcelona">
        </div>
        <div class="terminal-about-content-section terminal-about-content-languages">
            <span class="terminal-about-content-languages-text terminal-about-content-languages-text-1">
                I speak
            </span>
            <img class="terminal-about-content-languages-image terminal-about-content-languages-image-1"
            src="img/united-kingdom.png" alt="English">
            <span class="terminal-about-content-languages-text terminal-about-content-languages-text-2">
                English 5/5
            </span>
            <img class="terminal-about-content-languages-image terminal-about-content-languages-image-2"
            src="img/spain.png" alt="Spanish">
            <span class="terminal-about-content-languages-text terminal-about-content-languages-text-3">
                Spanish 4/5
            </span>
        </div>
        <div class="terminal-about-content-section terminal-about-content-paragraph">
            <p>
                If you wanted to pin me to a more detailed title,
                "full-stack developer" would be the most accurate.
            </p>
            <p>
                I've mostly worked on systems with JavaScript frontends,
                PHP backends, and SQL databases.
            </p>
            <p>
                Labels are quite restricting, though, and while I'm best atfull-stack at the moment, this may change
                in the future, as I'm interested in many aspects of programming, design, and development.
            </p>
            
        </div>
        <div class="terminal-about-content-section terminal-about-content-mytechnologies">
            myetch
        </div>
        <div class="terminal-about-content-section terminal-about-content-pasttechnologies">
            pasttech
        </div>
        <div class="terminal-about-content-section terminal-about-content-futuretechnologies">
            futuretech
        </div>
        <div class="terminal-about-content-section terminal-about-content-freetime">
            freetime
        </div>
    </div>
</section>