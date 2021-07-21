<?php
defined("PAGE_URL") ? null : define("PAGE_URL", "jamesmellor.es");
defined("PAGE_TITLE") ? null : define("PAGE_TITLE", "James Mellor - Software Developer");
defined("ABOUT_TITLE") ? null : define("ABOUT_TITLE", "About Me");


// ===== NAVBARS LEFT AND RIGHT ===== //
defined("NAVBAR_ABOUT") ? null : define("NAVBAR_ABOUT",
[
    'en' => 'About',
    'es' => 'Sobre Mi'
]);
defined("NAVBAR_CONTACT") ? null : define("NAVBAR_CONTACT",
[
    'en' => 'Contact',
    'es' => 'Contacto'
]);
defined("NAVBAR_LANGUAGE") ? null : define("NAVBAR_LANGUAGE",
[
    'en' => 'Language',
    'es' => 'Idioma'
]);
defined("NAVBAR_MYWORK") ? null : define("NAVBAR_MYWORK",
[
    'en' => 'My Work',
    'es' => 'Proyectos'
]);
defined("NAVBAR_LIGHTDARK") ? null : define("NAVBAR_LIGHTDARK",
[
    'en' => 'Lights',
    'es' => 'Luz'
]);
defined("NAVBAR_TERMINAL") ? null : define("NAVBAR_TERMINAL",
[
    'en' => 'Terminal',
    'es' => 'Terminal'
]);


// ===== NO WINDOWS OPEN ===== //
defined("SECTION_NOWINDOWS") ? null : define("SECTION_NOWINDOWS",
[
    'en' => 'Click an icon to continue.',
    'es' => 'Elige una opción para continuar.'
]);


// ===== ABOUT WINDOW ===== //
defined("SECTION_ABOUT_LEFT_HEADING") ? null : define("SECTION_ABOUT_LEFT_HEADING",
[
    'en' => 'Hello.',
    'es' => 'Hola.'
]);
defined("SECTION_ABOUT_LEFT_PARAGRAPHS_BOTTOM") ? null : define("SECTION_ABOUT_LEFT_PARAGRAPHS_BOTTOM",
[
    [
        'en' => "However, I believe labels are restricting.",
        'es' => 'Sin embargo, no quiero meterme en una caja y restringirme con un título oficial.'
    ],
    [
        'en' => "While I'm best at full-stack at the moment, this may change in the future.",
        'es' => "Aunque mis habilidades se basen en full-stack, puede que eso cambie en un futuro."
    ],
    [
        'en' => "I'm interested in many aspects of programming, design, and development.",
        'es' => "Me interesa una gran variedad de los diferentes aspectos de la programación y del desarrollo."
    ],
    [
        'en' => "In the past, I've used C++, MATLAB, BASIC, and IBM RPG.",
        'es' => 'En el pasado he usado C++, MATLAB, BASIC, y RPG de IBM.'
    ],
    [
        'en' => "At the moment I'm interested in learning Laravel, improving my JavaScript skills,
        eventually building some React proejcts, and potentially learning a lower-level
        language such as C.",
        'es' => 'Actualmente estoy interesado en aprender Laravel, mejorar mis habilidades de JavaScript,
        y, eventualmente, construir unos proyectos de React. También estoy pensando en aprender un lenguaje
        de programación más cercano al procesador - C, por ejemplo.'
    ]
]);
defined("SECTION_ABOUT_LEFT_PARAGRAPHS_TOP") ? null : define("SECTION_ABOUT_LEFT_PARAGRAPHS_TOP",
[
    [
        'en' => "I'm James, and I'm a software developer.",
        'es' => 'Me llamo James y soy Programador y Desarrollador de software.'
    ],
    [
        'en' => 'I use programming languages and development tools to produce computer applications.',
        'es' => 'Uso lenguajes de programación y herramientas de desarrollo para crear aplicaciones.'
    ],
    [
        'en' => "'Full-stack developer' is more accurate - I've mostly worked on systems with
        JavaScript frontends, PHP backends, and SQL databases.",
        'es' => "Un título más exacto sería 'Desarrollador de full-stack' - más que nada he trabajado en sístemas con
        front-end de JavaScript, back-end de PHP, y bases de datos de SQL."
    ],
    [
        'en' => "Here are some of my skills and my confidence level with them.",
        'es' => 'Abajo se puede ver algunas de mis habilidades y que tan seguro me siento con dichas habilidades.'
    ]
]);
defined("SECTION_ABOUT_RIGHT_FROM") ? null : define("SECTION_ABOUT_RIGHT_FROM",
[
    'en' => 'United Kingdom',
    'es' => 'Reino Unido'
]);
defined("SECTION_ABOUT_RIGHT_LANGUAGES") ? null : define("SECTION_ABOUT_RIGHT_LANGUAGES",
[
    'en' => 'Languages',
    'es' => 'Idiomas'
]);
defined("SECTION_ABOUT_SKILLS") ? null : define("SECTION_ABOUT_SKILLS",
[
    'PHP' => 75,
    'SQL' => 75,
    'HTML' => 100,
    'CSS' => 90,
    'Sass / SCSS' => 90,
    'jQuery' => 90,
    'JavaScript' => 50,
    'UI' => 60
]);
defined("SECTION_ABOUT_TITLE") ? null : define("SECTION_ABOUT_TITLE",
[
    'en' => PAGE_URL."/"."about",
    'es' => PAGE_URL."/"."sobre-mi"
]);


// Contact window
defined("SECTION_CONTACT_TITLE") ? null : define("SECTION_CONTACT_TITLE", ['en' => PAGE_URL."/"."contact", 'es' => PAGE_URL."/"."contacto"]);
defined("SECTION_CONTACT_EMAIL") ? null : define("SECTION_CONTACT_EMAIL", "mellor29j@gmail.com");
defined("SECTION_CONTACT_LINKEDIN") ? null : define("SECTION_CONTACT_LINKEDIN", "mellor29j");
defined("SECTION_CONTACT_LINKEDIN_URL") ? null : define("SECTION_CONTACT_LINKEDIN_URL", "https://www.linkedin.com/in/".SECTION_CONTACT_LINKEDIN);


// Portfolio window
defined("SECTION_PORTFOLIO_TITLE") ? null : define("SECTION_PORTFOLIO_TITLE", ['en' => PAGE_URL."/"."my-work", 'es' => PAGE_URL."/"."mis-proyectos"]);
defined("SECTION_PORTFOLIO_ROWS") ? null : define("SECTION_PORTFOLIO_ROWS",
[
    "galleri" =>
        [
            'title' => 'galleri',
            'subtitle' => ['en' => 'Gallery with CMS', 'es' => 'Galeria con CMS'],
            'technologies' => ['PHP', 'JavaScript', 'jQuery', 'SQL', 'HTML', 'CSS'],
            'images' => [
                'main.jpg', 'addesk1.jpg', 'addesk2.jpg', 'admob1.jpg', 'admob2.jpg',
                'homedesk1.jpg', 'homedesk2.jpg'
            ],
            'description' => [
                'en' => [
                    'yo we got a good desc here',
                    'this is paragraph 2',
                    'and this is numba 3'
                ],
                'es' => [
                    'uno dos tres cuatro',
                    'marchando mi combo forma un alboroto',
                    'uno dos tres cuatro',
                    'marchando mis gatas forma un alboroto'
                ],
            ]
        ],
    "tipcalc" =>
        [
            'title' => 'tipcalc',
            'subtitle' => ['en' => 'Bill Tip Calculator', 'es' => 'Calculadora de Propinas'],
            'technologies' => ['JavaScript', 'HTML', 'CSS'],
            'images' => ['main.jpg', 'desktop2.jpg'],
            'description' => [
                'en' => [
                    'yo we got a good desc here',
                    'this is paragraph 2',
                    'and this is numba 3'
                ],
                'es' => [
                    'uno dos tres cuatro',
                    'marchando mi combo forma un alboroto',
                    'uno dos tres cuatro',
                    'marchando mis gatas forma un alboroto'
                ],
            ]
        ],
    "pub quiz" =>
        [
            'title' => 'pub quiz',
            'subtitle' => ['en' => 'Quiz Game', 'es' => 'Juego de Quiz'],
            'technologies' => ['JavaScript', 'HTML', 'CSS'],
            'images' => [
                'main.jpg', 'desktop2.jpg', 'difficulty1.jpg', 'endscreen1.jpg', 'quiz1.jpg',
                'quiz2.jpg', 'quiz3.jpg'
            ],
            'description' => [
                'en' => [
                    'yo we got a good desc here',
                    'this is paragraph 2',
                    'and this is numba 3'
                ],
                'es' => [
                    'uno dos tres cuatro',
                    'marchando mi combo forma un alboroto',
                    'uno dos tres cuatro',
                    'marchando mis gatas forma un alboroto'
                ],
            ]
        ]
]
);


// Terminal window
defined("SECTION_TERMINAL_COMMAND_PRETEXT") ? null : define("SECTION_TERMINAL_COMMAND_PRETEXT",
[
    'en' => 'user@User:',
    'es' => 'usuario@usuario:'
]);
defined("SECTION_TERMINAL_COMMAND_RESPONSE") ? null : define("SECTION_TERMINAL_COMMAND_RESPONSE",
[
    'en' =>
        [
            'commandlist' =>
                [
                    'commandlist', 'open', 'open all',
                    'close', 'close all', 'minimise',
                    'restore', 'cls', 'clear screen'
                ],
            'open' => 
                [
                    'Please specify a window to open:',
                    'open about | open projects | open contact'
                ],
            'close' => 
                [
                    'Please specify a window to close:',
                    'close terminal | close about | close projects | close contact'
                ],
            'restore' => 
                [
                    'Please specify a window to restore:',
                    'restore terminal | restore about | restore projects | restore contact'
                ],
            'minimise' => 
                [
                    'Please specify a window to minimise:',
                    'minimise terminal | minimise about | minimise projects | minimise contact'
                ],
            'minimize' => 
                [
                    'Please specify a window to minimize:',
                    'minimize terminal | minimize about | minimize projects | minimize contact'
                ],
            'invalid' => 
                [
                    'Command "',
                    '" not recognised.',
                    'For help with commands, type: commandlist'
                ]
        ],
    'es' =>
        [
            'comandas' =>
                [
                    'comandas', 'abrir', 'abrir todo',
                    'cerrar', 'cerrar todo', 'minimizar',
                    'restaurar', 'cls'
                ],
            'abrir' => 
                [
                    'Por favor especifica una sección para abrir:',
                    'abrir sobre mi | abrir proyectos | abrir contactar'
                ],
            'cerrar' => 
                [
                    'Por favor especifica una sección para cerrar:',
                    'cerrar terminal | cerrar sobre mi | cerrar proyectos | cerrar contactar'
                ],
            'restaurar' => 
                [
                    'Por favor especifica una sección para restaurar:',
                    'restaurar terminal | restaurar about | restaurar projects | restaurar contact'
                ],
            'minimizar' => 
                [
                    'Por favor especifica una sección para minimizar:',
                    'minimizar terminal | minimizar about | minimizar projects | minimizar contact'
                ],
            'invalid' => 
                [
                    'Comanda "',
                    '" no reconocido.',
                    'Para ayuda con comandas, insribe: comandas'
                ]
        ]
]);


defined("SECTION_TERMINAL_OPERATIONS_INSTRUCTIONS") ? null : define("SECTION_TERMINAL_OPERATIONS_INSTRUCTIONS",
[
    'en' => [
        'Welcome to jamesmellor.es!',
        'First time visiting? Check the About section',
        'After reading about me, check My Projects',
        "If you'd like to speak to me, ask me a question, contact me!",
        'Alternatively, you can use this terminal to navigate my website.',
        'For a list of terminal commands, type: commandlist'
    ],
    'es' => [
        '¡Bienvenid@s a jamesmellor.es!',
        'Es tu primera vez aquí? Abre la sección Sobre Mi.',
        'Después de leer esa información, comprueba Mis Proyectos.',
        "Si quieres hablar conmigo o tienes dudas y preguntas, puedes contactarme.",
        'Alternativamente, puedes usar este terminal para navegar mi sitio web.',
        'Para acceder a la lista de comandas, inscribe: commandlist'
    ]
]);
defined("SECTION_TERMINAL_OPERATIONS_INTRO") ? null : define("SECTION_TERMINAL_OPERATIONS_INTRO",
[
    '## LOADING jamesmellor.es ##',
    'Loading: "background"...',
    '"background" loaded',
    'Loading: "jamesmellor.es/terminal"...',
    '"jamesmellor.es/terminal" loaded',
    'Loading: "jamesmellor.es/about"...',
    '"jamesmellor.es/about" loaded',
    'Loading: "jamesmellor.es/portfolio"...',
    '"jamesmellor.es/portfolio" loaded',
    'Loading: "jamesmellor.es/contact"...',
    '"jamesmellor.es/contact" loaded',
    'Loading: "jamesmellor.es/introduction"...'
]);
defined("SECTION_TERMINAL_TITLE") ? null : define("SECTION_TERMINAL_TITLE", ['en' => 'user@user: ~', 'es' => 'usuario@usuario: ~']);
?>