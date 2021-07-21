$(document).ready(function(){

    var lang_selector = 0;
    var languages = ["en", "es"];
    var theme_selector = 0;
    var themes = ["default", "light", "dark"];

    hideLanguageElements();

    const section = { grid_column: "2 / 3", grid_row: "2 / 3" }


    // enter on terminal input
    $(".terminal-input").on('keypress', function(e){

        if (e.which === 13) {

            $(this).attr("disabled", "disabled");

            let parent_container = $(".terminal-home-content-operations-commands");

            let new_line = $(".terminal-home-content-operations-commands-command").last().clone();
            
            new_line.addClass('cls');

            let show_new_line = true;

            let show_ajax_error = false;
            let ajax_error_output = '<p class="cls">AJAX error!</p>';
            ajax_error_output += '<p class="cls">Check your internet connection.</p>';

            var output = '';

            let command = $(this).val();
            switch (command) {
                case "commandlist": case "command list": case "comandas":
                case "help": case "ayuda":
                    $.ajax({
                        async: false,
                        type: 'post',
                        url: 'includes/terminal_command_retrieve.php',
                        dataType: 'json',
                        data: {
                            "retrieve_command": true,
                            "command": command,
                            "lang": languages[lang_selector]
                        },
                        success: function(response) {
                            output += '<p class="cls">';
                            for (let i=0; i<response.length; i++) {
                                output += response[i];
                                output += ' ';
                            }
                            output += '</p>';
                        },
                        error: function(response) {
                            show_ajax_error = terminalAjaxError(response);
                        }
                    });
                    break;
                case "cls": case "clear": case "clear all": case "clear screen":
                    $('.cls').remove();
                    show_new_line = false;
                    break;
                case "close all": case "cerrar todo":
                    $('.terminal').each(function(){
                        closeWindow($(this));
                    })
                    break;
                case "open all": case "abrir todo":
                    $('.terminal').not('#portfolio_modal').each(function(){
                        openWindow($(this), true);
                    })
                    break;
                case "open": case "close": case "minimise": case "minimize": case "restore":
                case "abrir": case "cerrar": case "minimizar": case "restaurar":
                    $.ajax({
                        async: false,
                        type: 'post',
                        url: 'includes/terminal_command_retrieve.php',
                        dataType: 'json',
                        data: {
                            "retrieve_command": true,
                            "command": command,
                            "lang": languages[lang_selector]
                        },
                        success: function(response){
                            for (let i=0; i<response.length; i++) {
                                output += '<p class="cls">' + response[i] + '</p>';
                            }
                        },
                        error: function(response) {
                            show_ajax_error = terminalAjaxError(response);
                        }
                    });
                    break;
                case "open about": case "abrir sobre mi":
                    openWindow($('#nav-about'));
                    break;
                case "open contact": case "abrir contacto":
                    openWindow($('#nav-contact'));
                    break;
                case "open projects": case "abrir proyectos":
                    openWindow($('#nav-portfolio'));
                    break;
                case "close about": case "cerrar sobre mi":
                    closeWindow($('.terminal-about'));
                    break;
                case "close contact": case "cerrar contacto":
                    closeWindow($('.terminal-contact'));
                    break;
                case "close projects": case "cerrar proyectos":
                    closeWindow($('.terminal-portfolio'));
                    break;
                case "close terminal": case "cerrar terminal":
                    closeWindow($('.terminal-home'));
                    break;
                case "minimise about": case "minimize about": case "minimizar sobre mi":
                    minimiseWindow($('.terminal-about').find('.minimise'));
                    break;
                case "minimise contact": case "minimize contact": case "minimizar contacto":
                    minimiseWindow($('.terminal-contact').find('.minimise'));
                    break;
                case "minimise projects": case "minimize projects": case "minimizar proyectos":
                    minimiseWindow($('.terminal-projects').find('.minimise'));
                    break;
                case "minimise terminal": case "minimize terminal": case "minimizar terminal":
                    minimiseWindow($('.terminal-home').find('.minimise'));
                    break;
                case "restore about": case "restaurar sobre mi":
                    restoreWindow($('.terminal-about').find('.restore'));
                    break;
                case "restore contact": case "restaurar contacto":
                    restoreWindow($('.terminal-contact').find('.restore'));
                    break;
                case "restore projects": case "restaurar proyectos":
                    restoreWindow($('.terminal-portfolio').find('.restore'));
                    break;
                case "restore terminal": case "restaurar terminal":
                    restoreWindow($('.terminal-terminal').find('.restore'));
                    break;
                // case "lang":
                //     changeLanguage("#nav-lang");
                //     break;
                default:
                    $.ajax({
                        async: false,
                        type: 'post',
                        url: 'includes/terminal_command_retrieve.php',
                        dataType: 'json',
                        data: {
                            "retrieve_command": true,
                            "command": "invalid",
                            "lang": languages[lang_selector]
                        },
                        success: function(response){
                            output += '<p class="cls">' + response[0] + command + response[1] + "</p>";
                            output += '<p class="cls">' + response[2] + "</p>";
                        },
                        error: function(response) {
                            show_ajax_error = terminalAjaxError(response);
                        }
                    });
                    break;
            }
            
            if (show_ajax_error) output += ajax_error_output;
            if (show_new_line) parent_container.before(new_line);
            parent_container.before(output);
            
            $(this).val("");
            
            $(this).removeAttr("disabled");
            
        }
    });


    $(".navbar-icons").not(".nowindow").on("click", function(){
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

    $(".language").on("click", function(){
        changeLanguage($(this));
    });

    $(".theme").on("click", function(){
        changeTheme($(this));
    });

    $(".portfolio_row").on("click", function(){
        openPortfolioModal($(this));
    });

    $(".portfolio_modal_image_button").on("click", function(){
        changePortfolioModalImage($(this));
    });

    $(".terminal-contact-content-icons-icon").on("click", function(){
        window.location = $(this).attr("href");
    });


    function openPortfolioModal(row_clicked) {

        let project_to_retrieve = row_clicked.find(".portfolio_row_title").html();

        $.ajax({
            type: 'post',
            url: 'includes/portfolio_modal_retrieve.php',
            dataType: 'json',
            data: {
                "retrieve_project": true,
                "project_to_retrieve": project_to_retrieve
            },
            success: function(project){
                // ===== Get modal and its properties in variables so we can manipulate them ===== //
                let modal = $("#portfolio_modal");
                let modal_topbar_title = modal.find(".terminal-topbar-text");
                let modal_project_title = modal.find(".portfolio_modal_title");
                let modal_project_subtitle = modal.find(".portfolio_modal_subtitle");
                let modal_project_technologies = modal.find(".portfolio_modal_technologies");
                let modal_project_description = modal.find(".portfolio_modal_description");
                let modal_project_images = modal.find(".portfolio_modal_imagecontainer");

                // ===== Clear modal data to avoid other projects interfering with new info ===== //
                modal_topbar_title.html("");
                modal_project_title.html("");
                modal_project_technologies.empty();
                modal_project_description.remove();
                modal_project_images.find(".portfolio_modal_image").remove();
                modal_project_subtitle.remove();

                // ===== Change modal data ===== //
                modal_project_title.html(project.title);
                modal_topbar_title.html(project.title);

                let new_images = "";
                Object.entries(project.images).forEach(function(image){
                    const [index, filename] = image;
                    new_images += "<img alt='"+project.title+"' class='";
                    
                    new_images += "portfolio_modal_image ";
                    if (index == 0) {
                        new_images += "terminal-portfolio_modal-content-imagecontainer-image--active ";
                    }
                    new_images += "terminal-portfolio_modal-content-imagecontainer-image' ";
                    new_images += "src='img/portfolio/"+project.title+"/"+filename+"'";
                    new_images += ">";
                });
                modal_project_images.append(new_images);

                let new_subtitle = "";
                Object.entries(project.subtitle).forEach(function(subtitle){
                    const [lang, output] = subtitle;
                    new_subtitle += "<h3 class='";
                    new_subtitle += "terminal-portfolio_modal-content-subtitle ";
                    new_subtitle += "portfolio_modal_subtitle' ";
                    new_subtitle += "lang='"+lang+"'";
                    new_subtitle += ">";
                    new_subtitle += output;
                    new_subtitle += "</h3>";
                });
                modal_project_title.after(new_subtitle);

                let new_technology = "";
                Object.entries(project.technologies).forEach(function(technology){
                    const [index, output] = technology;
                    new_technology += "<span class='";
                    new_technology += "terminal-portfolio-content-row-text-technologies-technology'";
                    new_technology += ">";
                    new_technology += output;
                    new_technology += "</span> ";
                    
                });
                modal_project_technologies.append(new_technology);

                let modal_project_technologies_1 = $(".portfolio_modal_technologies");
                let new_description = "<div class='terminal-portfolio_modal-content-longdesc' ";
                Object.entries(project.description).forEach(function(description){
                    const [lang, paragraphs] = description;
                    Object.entries(paragraphs).forEach(function(paragraph){
                        const [index, output] = paragraph;
                        new_description += "<p class='";
                        new_description += "terminal-portfolio_modal-content-longdesc-desc ";
                        new_description += "portfolio_modal_description' ";
                        new_description += "lang='"+lang+"'";
                        new_description += ">";
                        new_description += output;
                        new_description += "</p>";
                    });
                });
                new_description += "</div>";
                modal_project_technologies_1.after(new_description);

                // ===== Hide non-selected language items ===== //
                hideLanguageElements();

                // ===== Finally, show the portfolio modal ===== //
                modal.fadeIn(100);
                modal.css("display", "grid");
                modal.css("z-index", "2");
                $(".terminal").not("#portfolio_modal").css("z-index", "1");
            },
            error: function(response) {
                console.log('AJAX Error:');
                console.log(response);
            }
        });
    }


    function changePortfolioModalImage(button_clicked) {
        let next_image = "";
        let slide_direction = "";

        let image = "terminal-portfolio_modal-content-imagecontainer-image";
        let active_class = image+"--active"
        let active_image = $("."+active_class);
        
        if (button_clicked.hasClass("next"))      { slide_direction = "next" }
        else if (button_clicked.hasClass("prev")) { slide_direction = "prev" }
        else                                      { return false; }

        switch(slide_direction) {
            case "next":
                next_image = (active_image.next("."+image).length >= 1) ? active_image.next() : $("."+image).first();
                break;
            case "prev":
                next_image = (active_image.prev("."+image).length >= 1) ? active_image.prev() : $("."+image).last();
                break;

        }

        active_image.removeClass(active_class);
        next_image.addClass(active_class);
    }


    function changeLanguage(language_button) {
        language_button = language_button.children("#language");
        lang_selector = lang_selector + 1;
        if (typeof languages[lang_selector] === "undefined") lang_selector = 0;
        let next_language = languages[lang_selector];
        language_button.attr("src", "img/" + next_language + ".png");

        hideLanguageElements();
    }

    function changeTheme(theme_button) {
        theme_button = theme_button.children("#theme");
        theme_selector = theme_selector + 1;
        if (typeof themes[theme_selector] === "undefined") theme_selector = 0;
        let next_theme = themes[theme_selector];
        theme_button.attr("src", "img/theme" + next_theme + ".png");
    }

    function hideLanguageElements() {
        $.each(languages, function(key, value) {
            (key != lang_selector) ? $("[lang='"+value+"']").hide() : $("[lang='"+value+"']").show();
        });
    }

    function openWindow(icon_clicked, terminal_triggered = false) {
        if (terminal_triggered) {
            var section_to_open = icon_clicked;
        } else {
            icon_clicked.addClass("navbar-icons-selected");
            icon_clicked = icon_clicked.children(".navbar-icons-icon");
            var section_to_open = ".terminal-" + icon_clicked.attr("id");
        }
        $(section_to_open).fadeIn(100);
        $(section_to_open).css("display", "grid");
        $(section_to_open).css("z-index", "2");
        $(".terminal").not(section_to_open).css("z-index", "1");
        restoreWindow($(section_to_open).find(".restore"));
    }
    
    function closeWindow(button_clicked) {
        let parent_section = button_clicked.closest(".terminal");
        parent_section.fadeOut(100);

        let navbar_button = "#" + parent_section.attr("href");
        $(navbar_button).parent(".navbar-icons").removeClass("navbar-icons-selected");
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
        if (button_clicked.css("display") == "none") return false;
        
        button_clicked.siblings(".minimise").css("display", "inline");
        button_clicked.css("display", "none");
        button_clicked.siblings(".maximise").css("display", "inline");
        
        let parent_section = button_clicked.closest(".terminal");
        
        parent_section.css("grid-column", section.grid_column);
        parent_section.css("grid-row", section.grid_row);

        parent_section.find(".terminal-content").show();
        parent_section.css("height", "100%");
        $(".landing-container-overlay").append(parent_section);

        $(parent_section).css("z-index", "2");
        $(".terminal").not(parent_section).css("z-index", "1");
    }


    function terminalAjaxError(response) {
        console.log('AJAX Error:');
        console.log(response);
        return true;
    }

});


