$(document).ready(function(){
    var about     = $(".terminal-about");
    var contact   = $(".terminal-contact");
    var home      = $(".terminal-home");
    var portfolio = $(".terminal-portfolio");

    var minimise_bar = $(".minimise_bar");
    var landing_container_overlay = $(".landing-container-overlay");

    var minimised = false;

    // Section properties
    const section_about = {
        grid_column: about.css("grid-column"),
        grid_row: about.css("grid-row"),
        minimised: false,
        open: false
    }

    const section_contact = {
        grid_column: contact.css("grid-column"),
        grid_row: contact.css("grid-row"),
        minimised: false,
        open: false
    }

    const section_home = {
        grid_column: home.css("grid-column"),
        grid_row: home.css("grid-row"),
        minimised: false,
        open: false
    }

    const section_portfolio = {
        grid_column: portfolio.css("grid-column"),
        grid_row: portfolio.css("grid-row"),
        minimised: false,
        open: false
    }

    $(".navbar-icon").on("click", function(){
        openWindow($(this));
        
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



    function highlightIcon() {
        // If user clicks an icon, highlight it like a Windows 95 icon
        // If they click it again after a second or two, de-highlight it
        // If the user double-clicks it, open the corresponding page if it's not already open (openWindow())
    }
    
    function openWindow(icon_clicked) {
        // If user double-clicks
        section_to_open = "terminal-" + icon_clicked.attr("id");
        $("."+section_to_open).css("display", "grid");
        $("."+section_to_open).css("z-index", "4000");
    }
    
    function closeWindow(button_clicked) {
        button_clicked.closest(".terminal").css("display", "none");
    }
    
    function maximiseWindow(button_clicked) {
        let parent_section = button_clicked.closest(".terminal");

        if (minimised) {
            button_clicked.siblings(".minimise").css("display", "inline");
            parent_section.css("grid-column", section_home.grid_column);
            parent_section.css("grid-row", section_home.grid_column);
            landing_container_overlay.append(parent_section);
            parent_section.find(".terminal-content").css("display", "block");
            parent_section.css("height", "100%");
            minimised = false;
        } else {
            button_clicked.css("display", "none");
            button_clicked.siblings(".restore").css("display", "inline");
            parent_section.css("grid-column", "1 / -1");
            parent_section.css("grid-row", "1 / -1");
        }
    }
    
    function minimiseWindow(button_clicked) {
        button_clicked.siblings(".maximise").css("display", "inline");
        button_clicked.siblings(".restore").css("display", "none");
        button_clicked.css("display", "none");
        let parent_section = button_clicked.closest(".terminal");
        parent_section.find(".terminal-content").css("display", "none");
        parent_section.css("height", "1.8rem");
        minimise_bar.append(parent_section);
        minimised = true;
    }

    function restoreWindow(button_clicked) {
        button_clicked.css("display", "none");
        button_clicked.siblings(".maximise").css("display", "inline");
        
        let parent_section = button_clicked.closest(".terminal");
        
        parent_section.closest(".terminal").css("grid-column", section_home.grid_column);
        parent_section.closest(".terminal").css("grid-row", section_home.grid_row);
    }

});


