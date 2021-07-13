<?php
defined("PAGE_URL") ? null : define("PAGE_URL", "jamesmellor.es");
defined("PAGE_TITLE") ? null : define("PAGE_TITLE", "James Mellor - Software Developer");
defined("ABOUT_TITLE") ? null : define("ABOUT_TITLE", "About Me");

// Navbars
defined("NAVBAR_ABOUT") ? null : define("NAVBAR_ABOUT", ['en' => 'About', 'es' => 'Sobre Mi']);
defined("NAVBAR_CONTACT") ? null : define("NAVBAR_CONTACT", ['en' => 'Contact', 'es' => 'Contacto']);
defined("NAVBAR_LANGUAGE") ? null : define("NAVBAR_LANGUAGE", ['en' => 'Language', 'es' => 'Idioma']);
defined("NAVBAR_MYWORK") ? null : define("NAVBAR_MYWORK", ['en' => 'My Work', 'es' => 'Proyectos']);
defined("NAVBAR_SETTINGS") ? null : define("NAVBAR_SETTINGS", ['en' => 'Settings', 'es' => 'Configuración']);
defined("NAVBAR_TERMINAL") ? null : define("NAVBAR_TERMINAL", ['en' => 'Terminal', 'es' => 'Terminal']);

// No windows open section
defined("SECTION_NOWINDOWS") ? null : define("SECTION_NOWINDOWS", ['en' => 'Click an icon to continue.', 'es' => 'Elige una opción para continuar.']);

// About window
defined("SECTION_ABOUT_TITLE") ? null : define("SECTION_ABOUT_TITLE", ['en' => PAGE_URL."/"."about", 'es' => PAGE_URL."/"."sobre-mi"]);

// Contact window
defined("SECTION_CONTACT_TITLE") ? null : define("SECTION_CONTACT_TITLE", ['en' => PAGE_URL."/"."contact", 'es' => PAGE_URL."/"."contacto"]);
defined("SECTION_CONTACT_EMAIL") ? null : define("SECTION_CONTACT_EMAIL", "mellor29j@gmail.com");
defined("SECTION_CONTACT_LINKEDIN") ? null : define("SECTION_CONTACT_LINKEDIN", "mellor29j");
defined("SECTION_CONTACT_LINKEDIN_URL") ? null : define("SECTION_CONTACT_LINKEDIN_URL", "https://www.linkedin.com/in/".SECTION_CONTACT_LINKEDIN);

// Portfolio window
defined("SECTION_PORTFOLIO_TITLE") ? null : define("SECTION_PORTFOLIO_TITLE", ['en' => PAGE_URL."/"."my-work", 'es' => PAGE_URL."/"."mis-proyectos"]);

// Settings window
defined("SECTION_SETTINGS_TITLE") ? null : define("SECTION_SETTINGS_TITLE", ['en' => PAGE_URL."/"."settings", 'es' => PAGE_URL."/"."configuración"]);

// Terminal window
defined("SECTION_TERMINAL_TITLE") ? null : define("SECTION_TERMINAL_TITLE", ['en' => 'user@user: ~', 'es' => 'usuario@usuario: ~']);
?>