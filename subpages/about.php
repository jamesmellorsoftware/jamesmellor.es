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
        <h1>About me</h1>
        <p>
            From a very young age, I have always been interested in computers.
            I was obsessed with the old Windows 95 computer in my classroom at infant school
            - I actually learned to type before I learned to write using a pen and paper.
        </p>
        <p>
            Unfortunately this now means that everyone in my family asks me to fix their broken devices,
            which is probably one of the reasons why I moved out of my home country in the end.
        </p>
        <p>
            People still request strange things from me - one acquaintance of mine from Cuba even offered to pay me half of the profit gained from a Trojan virus if I agreed to develop it - I didn’t end up doing this for him, but this didn’t stop my obsession, which has carried on until today.
        </p>
        
        <h1>Who am I?</h1>
        <p>
            I'm a software developer based in Barcelona, Spain.
        </p>
        <p>
            If you wanted to pin me to a more detailed title "full-stack developer" would be the most accurate.
            I've mostly worked on systems with JavaScript frontends, PHP backends, and SQL databases.
            Labels are quite restricting, though, and while I'm best at full-stack at the moment, this may change
            in the future, as I'm interested in many aspects of programming, design, and development.
        </p>
        <p>
            Technologies I know and my confidence with them:
            <ul>
                <li>PHP 4/5</li>
                <li>SQL 4/5</li>
                <li>JavaScript 3/5</li>
                <li>jQuery 4/5</li>
                <li>HTML 5/5</li>
                <li>CSS 4/5</li>
                <li>SCSS / Sass 5/5</li>
                <li>GIT 2/5</li>
                <li>UI Design 2/5</li>
            </ul>

            Technologies I've touched in the past:
            <ul>
                <li>MATLAB</li>
                <li>C++</li>
                <li>ZX Spectrum BASIC</li>
                <li>Microsoft Visual BASIC</li>
            </ul>

            Technologies I'm interested in learning in the future:
            <ul>
                <li>Python</li>
                <li>C</li>
                <li>React.js</li>
                <li>Node.js</li>
                <li>MongoDB</li>
            </ul>
        </p>
    </div>
</section>