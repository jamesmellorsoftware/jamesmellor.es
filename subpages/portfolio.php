<section href="portfolio" class="terminal terminal-portfolio">
    <div class="terminal-topbar terminal-portfolio-topbar terminal-topbar__dark">
        <?php foreach (SECTION_PORTFOLIO_TITLE as $lang => $output) { ?>
            <span class="terminal-topbar-text terminal-topbar-portfolio-text" lang="<?php echo $lang; ?>">
                <?php echo $output; ?>
            </span>
        <?php } ?>
        <?php require("includes/terminal_topbar.php"); ?>
    </div>

    <div class="terminal-content terminal-portfolio-content">
        
        <?php $i = 0; ?>
        <?php foreach (SECTION_PORTFOLIO_ROWS as $portfolio_row) : ?>
            <div class="terminal-portfolio-content-row portfolio_row
            <?php echo ($i === 1) ? "terminal-portfolio-content-row-even" : "terminal-portfolio-content-row-odd"; ?>">
                <div class="terminal-portfolio-content-row-image">
                    <img class="terminal-portfolio-content-row-image-img"
                    src="<?php echo "img/portfolio/".$portfolio_row['title']."/main.jpg"; ?>"
                    alt="<?php echo $portfolio_row['title']; ?>">
                </div>
                <div class="terminal-portfolio-content-row-text">
                    <h2 class="terminal-portfolio-content-row-text-title">
                        <?php echo $portfolio_row['title']; ?>
                    </h2>
                    <?php foreach($portfolio_row['subtitle'] as $lang => $output) { ?>
                        <h3 class="terminal-portfolio-content-row-text-subtitle" lang="<?php echo $lang; ?>">
                            <?php echo $output; ?>
                        </h3>
                    <?php } ?>
                    <div class="terminal-portfolio-content-row-text-technologies">
                        <?php foreach($portfolio_row['technologies'] as $technology) { ?>
                            <span class="terminal-portfolio-content-row-text-technologies-technology">
                                <?php echo $technology; ?>
                            </span>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <?php $i === 0 ? $i = 1 : $i = 0; ?>
        <?php endforeach; ?>

    </div>
</section>