$(document).ready(function(){

    var lang_selector = 0;
    var languages = ["en", "es"];
    hideLanguageElements();

    const section = { grid_column: "2 / 3", grid_row: "2 / 3" }

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

    $(".language").on("click", function(){
        changeLanguage($(this).children("#language"));
    });


    function changeLanguage(language_button) {
        lang_selector = lang_selector + 1;
        if (typeof languages[lang_selector] === "undefined") lang_selector = 0;
        let next_language = languages[lang_selector];
        language_button.attr("src", "img/" + next_language + ".png");

        hideLanguageElements();
    }

    function hideLanguageElements() {
        $.each(languages, function(key, value) {
            (key != lang_selector) ? $("[lang='"+value+"']").hide() : $("[lang='"+value+"']").show();
        });
    }

    function openWindow(icon_clicked) {
        section_to_open = "terminal-" + icon_clicked.attr("id");
        $("."+section_to_open).fadeIn(100);
        $("."+section_to_open).css("z-index", "2");
        $(".terminal").not("."+section_to_open).css("z-index", "1");
        restoreWindow($("."+section_to_open).find(".restore"));
    }
    
    function closeWindow(button_clicked) {
        button_clicked.closest(".terminal").fadeOut(100);
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
        parent_section.find(".terminal-content").hide();
        parent_section.css("height", "1.8rem");
        $(".minimise_bar").append(parent_section);
    }

    function restoreWindow(button_clicked) {
        button_clicked.siblings(".minimise").css("display", "inline");
        button_clicked.css("display", "none");
        button_clicked.siblings(".maximise").css("display", "inline");
        
        let parent_section = button_clicked.closest(".terminal");
        
        parent_section.closest(".terminal").css("grid-column", section.grid_column);
        parent_section.closest(".terminal").css("grid-row", section.grid_row);

        parent_section.find(".terminal-content").show();
        parent_section.css("height", "100%");
        $(".landing-container-overlay").append(parent_section);

        $("."+parent_section).css("z-index", "2");
        $(".terminal").not("."+parent_section).css("z-index", "1");
    }

});


