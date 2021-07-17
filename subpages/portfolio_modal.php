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
        <div class="terminal-portfolio_modal-content-imagecontainer">
            <img src="img/portfolio/galleri/main.jpg" alt="Big image"
            class="terminal-portfolio_modal-content-imagecontainer-image">
            <div class="terminal-portfolio_modal-content-imagecontainer-buttons">
                <button class="terminal-portfolio_modal-content-imagecontainer-buttons-button
                terminal-portfolio_modal-content-imagecontainer-buttons-button_prev">
                    &lt;
                </button>
                <button class="terminal-portfolio_modal-content-imagecontainer-buttons-button
                terminal-portfolio_modal-content-imagecontainer-buttons-button_next">
                    &gt;
                </button>
            </div>
        </div>
        
        <h2 class="terminal-portfolio_modal-content-title">
            Title
        </h2>
        <?php // foreach($portfolio_row['subtitle'] as $lang => $output) { ?>
            <h3 class="terminal-portfolio_modal-content-subtitle" lang="<?php // echo $lang; ?>">
                Subtitle
            </h3>
        <?php // } ?>
        <div class="terminal-portfolio_modal-content-technologies">
            <?php // foreach($portfolio_row['technologies'] as $technology) { ?>
                <span class="terminal-portfolio-content-row-text-technologies-technology">
                    tech <?php // echo $technology; ?>
                </span>
            <?php // } ?>
        </div>
        <p class="terminal-portfolio_modal-content-longdesc">
            big long description
        </p>
    </div>
</section>