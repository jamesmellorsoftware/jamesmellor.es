<nav class="navbar navbar-left">
    <div id="nav-home" class="navbar-icons">
        <img class="navbar-icons-icon" id="home" src="img/command-window.png" alt="Home">
        <?php foreach (NAVBAR_TERMINAL as $lang => $output) { ?>
            <span class="navbar-icons-label" lang="<?php echo $lang; ?>"><?php echo $output; ?></span>
        <?php } ?>
    </div>
    <div id="nav-about" class="navbar-icons">
        <img class="navbar-icons-icon" id="about" src="img/doubts-button.png" alt="About">
        <?php foreach (NAVBAR_ABOUT as $lang => $output) { ?>
            <span class="navbar-icons-label" lang="<?php echo $lang; ?>"><?php echo $output; ?></span>
        <?php } ?>
    </div>
    <div id="nav-portfolio" class="navbar-icons">
        <img class="navbar-icons-icon" id="portfolio" src="img/folder(1).png" alt="Portfolio">
        <?php foreach (NAVBAR_MYWORK as $lang => $output) { ?>
            <span class="navbar-icons-label" lang="<?php echo $lang; ?>"><?php echo $output; ?></span>
        <?php } ?>
    </div>
</nav>
<nav class="navbar navbar-right">
    <div id="nav-contact" class="navbar-icons">
        <img class="navbar-icons-icon" id="contact" src="img/letter.png" alt="Contact">
        <?php foreach (NAVBAR_CONTACT as $lang => $output) { ?>
            <span class="navbar-icons-label" lang="<?php echo $lang; ?>"><?php echo $output; ?></span>
        <?php } ?>
    </div>
    <div id="nav-lang" class="navbar-icons nowindow language">
        <img class="navbar-icons-icon" id="language" src="img/en.png" alt="Language">
        <?php foreach (NAVBAR_LANGUAGE as $lang => $output) { ?>
            <span class="navbar-icons-label" lang="<?php echo $lang; ?>"><?php echo $output; ?></span>
        <?php } ?>
    </div>
</nav>