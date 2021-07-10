$(document).ready(function(){
    var about     = $(".terminal-about");
    var contact   = $(".terminal-contact");
    var home      = $(".terminal-home");
    var portfolio = $(".terminal-portfolio");

    var minimise_bar = $(".minimise_bar");
    var landing_container_overlay = $(".landing-container-overlay");


    // Section classes
    const section_about = {
        grid_column: about.css("grid-column"),
        grid_row: about.css("grid-row")
    }

    const section_contact = {
        grid_column: contact.css("grid-column"),
        grid_row: contact.css("grid-row")
    }

    const section_home = {
        grid_column: home.css("grid-column"),
        grid_row: home.css("grid-row")
    }

    const section_portfolio = {
        grid_column: portfolio.css("grid-column"),
        grid_row: portfolio.css("grid-row")
    }

    $(".navbar-icons").on("click", function(){
        openWindow($(this).children(".navbar-icons-icon"));
        
    });

    $(".close").on("click", function(){
        closeWindow($(this));
    });

    $(".maximise").on("click", function(){
        maximiseWindow($(this));
    });

    $(".minimise").on("click", function(){
        minimiseWindow($(this));
    });

    $(".restore").on("click", function(){
        restoreWindow($(this));
    });


    function openWindow(icon_clicked) {
        section_to_open = "terminal-" + icon_clicked.attr("id");
        $("."+section_to_open).css("display", "grid");
        $("."+section_to_open).css("z-index", "4000");
        restoreWindow($("."+section_to_open).find(".restore"));
    }
    
    function closeWindow(button_clicked) {
        button_clicked.closest(".terminal").css("display", "none");
    }
    
    function maximiseWindow(button_clicked) {
        button_clicked.css("display", "none");
        button_clicked.siblings(".restore").css("display", "inline");

        let parent_section = button_clicked.closest(".terminal");
        parent_section.css("grid-column", "1 / -1");
        parent_section.css("grid-row", "1 / -1");
    }
    
    function minimiseWindow(button_clicked) {
        button_clicked.siblings(".restore").css("display", "inline");
        button_clicked.siblings(".maximise").css("display", "none");
        button_clicked.css("display", "none");
        let parent_section = button_clicked.closest(".terminal");
        parent_section.find(".terminal-content").css("display", "none");
        parent_section.css("height", "1.8rem");
        minimise_bar.append(parent_section);
        minimised = true;
    }

    function restoreWindow(button_clicked) {
        button_clicked.siblings(".minimise").css("display", "inline");
        button_clicked.css("display", "none");
        button_clicked.siblings(".maximise").css("display", "inline");
        
        let parent_section = button_clicked.closest(".terminal");
        
        parent_section.closest(".terminal").css("grid-column", section_home.grid_column);
        parent_section.closest(".terminal").css("grid-row", section_home.grid_row);

        parent_section.find(".terminal-content").css("display", "block");
        parent_section.css("height", "100%");
        landing_container_overlay.append(parent_section);
    }

});


