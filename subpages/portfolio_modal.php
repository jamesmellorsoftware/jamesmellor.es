<section href="portfolio_modal" class="terminal terminal-portfolio_modal" id="portfolio_modal">
    <div class="terminal-topbar terminal-portfolio_modal-topbar terminal-topbar__dark">
        <?php // foreach (SECTION_PORTFOLIO_TITLE as $lang => $output) { ?>
            <span class="terminal-topbar-text terminal-topbar-portfolio_modal-text">
                <?php // echo $output; ?>title
            </span>
        <?php // } ?>
        <span class="terminal-topbar-controls">
            <span class="terminal-topbar-controls-control
            terminal-topbar-contact-controls-control close">
                &times;
            </span>
        </span>
    </div>

    <div class="terminal-content terminal-portfolio_modal-content">
        <div class="terminal-portfolio_modal-content-imagecontainer portfolio_modal_imagecontainer">

            <img src="img/portfolio/galleri/main.jpg" alt="Big image"
            class="terminal-portfolio_modal-content-imagecontainer-image
            portfolio_modal_image terminal-portfolio_modal-content-imagecontainer-image--active">

            <img src="img/portfolio/galleri/addesk1.jpg" alt="Big image 2"
            class="terminal-portfolio_modal-content-imagecontainer-image
            portfolio_modal_image">

            <img src="img/portfolio/galleri/addesk2.jpg" alt="Big image 3"
            class="terminal-portfolio_modal-content-imagecontainer-image
            portfolio_modal_image">

            <img src="img/portfolio/galleri/admob1.jpg" alt="Big image 4"
            class="terminal-portfolio_modal-content-imagecontainer-image
            portfolio_modal_image">

            <div class="terminal-portfolio_modal-content-imagecontainer-buttons">
                <span class="terminal-portfolio_modal-content-imagecontainer-buttons-button
                terminal-portfolio_modal-content-imagecontainer-buttons-button_prev
                portfolio_modal_image_button prev">
                    &lt;
                </span>
                <span class="terminal-portfolio_modal-content-imagecontainer-buttons-button
                terminal-portfolio_modal-content-imagecontainer-buttons-button_next
                portfolio_modal_image_button next">
                    &gt;
                </span>
            </div>
            
        </div>
        
        <h2 class="terminal-portfolio_modal-content-title portfolio_modal_title">
            Title
        </h2>
        <?php // foreach($portfolio_row['subtitle'] as $lang => $output) { ?>
            <h3 class="terminal-portfolio_modal-content-subtitle portfolio_modal_subtitle"
            lang="<?php // echo $lang; ?>">
                Subtitle
            </h3>
        <?php // } ?>
        <div class="terminal-portfolio_modal-content-technologies portfolio_modal_technologies">
            <?php // foreach($portfolio_row['technologies'] as $technology) { ?>
                <span class="terminal-portfolio-content-row-text-technologies-technology">
                    tech <?php // echo $technology; ?>
                </span>
            <?php // } ?>
        </div>
        <p class="terminal-portfolio_modal-content-longdesc portfolio_modal_description">
            big long description
        </p>
    </div>
</section>