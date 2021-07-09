<main class="landing">
    <div class="landing-container">
        <video autoplay muted loop class="landing-container-video">
            <source src="img/bgvideo.mp4" type="video/mp4">
        </video>
        <div class="landing-container-overlay">
            <?php
                require_once("nav.php");
                require_once("home.php");
                require_once("about.php");
                require_once("contact.php");
                require_once("portfolio.php");
                require_once("minimise_bar.php")
            ?>
        </div>
    </div>
</main>