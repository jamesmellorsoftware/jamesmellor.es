$(document).ready(function(){
    var about     = $(".terminal-about");
    var contact   = $(".terminal-contact");
    var home      = $(".terminal-home");
    var portfolio = $(".terminal-portfolio");

    var minimise_bar = $(".minimise_bar");
    var landing_container_overlay = $(".landing-container-overlay");

    var minimised = false;

    // Set original grid properties in an array
    // grid-column, grid-row
    const gridproperties_about     = [about.css("grid-column"), about.css("grid-row")];
    const gridproperties_contact   = [contact.css("grid-column"), contact.css("grid-row")];
    const gridproperties_home      = [home.css("grid-column"), home.css("grid-row")];
    const gridproperties_portfolio = [portfolio.css("grid-column"), portfolio.css("grid-row")];

    // let original_grid_column = $().css("grid-column");
    // let original_grid_row = section.css("grid-row");

    $(".close").on("click", function(){
        $(this).closest(".terminal").css("display", "none");
    });

    $(".maximise").on("click", function(){
        let button_clicked = $(this);
        let parent_section = button_clicked.closest(".terminal");

        if (minimised) {
            button_clicked.siblings(".minimise").css("display", "inline");
            parent_section.css("grid-column", gridproperties_portfolio[0]);
            parent_section.css("grid-row", gridproperties_portfolio[1]);
            landing_container_overlay.append(parent_section);
            parent_section.find(".terminal-content").css("display", "none");
            parent_section.css("height", "100%");
            minimised = false;
        } else {
            button_clicked.css("display", "none");
            button_clicked.siblings(".restore").css("display", "inline");
            parent_section.css("grid-column", "1 / -1");
            parent_section.css("grid-row", "1 / -1");
        }
    });

    $(".minimise").on("click", function(){
        let button_clicked = $(this);
        button_clicked.css("display", "none");
        let parent_section = button_clicked.closest(".terminal");
        parent_section.find(".terminal-content").css("display", "none");
        parent_section.css("height", "1.8rem");
        minimise_bar.append(parent_section);
        minimised = true;
    });

    $(".restore").on("click", function(){
        let button_clicked = $(this);

        button_clicked.css("display", "none");
        button_clicked.siblings(".maximise").css("display", "inline");
        
        let parent_section = button_clicked.closest(".terminal");
        
        parent_section.closest(".terminal").css("grid-column", gridproperties_portfolio[0]);
        parent_section.closest(".terminal").css("grid-row", gridproperties_portfolio[1]);
    });

});


function highlightIcon() {
    // If user clicks an icon, highlight it like a Windows 95 icon
    // If they click it again after a second or two, de-highlight it
    // If the user double-clicks it, open the corresponding page if it's not already open (openWindow())
}

function openWindow() {
    // If user double-clicks
}

function closeWindow() {
    // If user clicks X, hide the window, i.e. set its display to zero
    // this.style.display = "none";
}



function minimiseWindow() {
    // If user clicks minimise, minimise the window to a small box in the bottom-left of the screen
    // with all controls on it plus a title, just like in Windows when there is no Start bar available
}