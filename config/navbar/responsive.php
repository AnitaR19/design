<?php
/**
 * Supply the basis for the navbar as an array.
 */
return [
    // Use for styling the menu
    "id" => "rm-menu",
    "wrapper" => null,
    "class" => "rm-default rm-mobile",
 
    // Here comes the menu items
    "items" => [
        [
            "text" => "Hem",
            "url" => "",
            "title" => "Första sidan, börja här.",
        ],
        [
            "text" => "Blogg",
            "url" => "blogg",
            "title" => "Min blogg.",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Sommar",
                        "url" => "blogg/mitt-forsta-inlagg",
                        "title" => "Dagens bild.",
                    ],
                    [
                        "text" => "Påskafton",
                        "url" => "blogg/mitt-andra-inlagg",
                        "title" => "Mitt andra inlägg.",
                    ],
                    [
                        "text" => "Jul igen",
                        "url" => "blogg/mitt-tredje-inlagg",
                        "title" => "Mitt tredje inlägg.",
                    ],
                ],
            ],
        ],
        [
            "text" => "Redovisning",
            "url" => "redovisning",
            "title" => "Redovisningstexter från kursmomenten.",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Kmom01",
                        "url" => "redovisning/kmom01",
                        "title" => "Redovisning för kmom01.",
                    ],
                    [
                        "text" => "Kmom02",
                        "url" => "redovisning/kmom02",
                        "title" => "Redovisning för kmom02.",
                    ],
                    [
                        "text" => "Kmom03",
                        "url" => "redovisning/kmom03",
                        "title" => "Redovisning för kmom03.",
                    ],
                    [
                        "text" => "Kmom04",
                        "url" => "redovisning/kmom04",
                        "title" => "Redovisning för kmom04.",
                    ],
                    [
                        "text" => "Kmom05",
                        "url" => "redovisning/kmom05",
                        "title" => "Redovisning för kmom05.",
                    ],
                    [
                        "text" => "Kmom06",
                        "url" => "redovisning/kmom06",
                        "title" => "Redovisning för kmom06.",
                    ],
                ],
            ],
        ],
        [
            "text" => "Rapport",
            "url" => "rapport",
            "title" => "Rapporter för kursmomenten.",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Färgschema",
                        "url" => "rapport/fargschema",
                        "title" => "Rapport kmom04.",
                    ],
                    [
                        "text" => "Laddningstid",
                        "url" => "rapport/laddningstid",
                        "title" => "Rapport kmom05.",
                    ],
                    [
                        "text" => "Designprincip",
                        "url" => "rapport/designprincip",
                        "title" => "Rapport kmom06.",
                    ],
                    [
                        "text" => "Designelement",
                        "url" => "rapport/designelement",
                        "title" => "Rapport kmom06.",
                    ],
                    [
                        "text" => "Designprinciper",
                        "url" => "rapport/designprincipier",
                        "title" => "Rapport kmom06.",
                    ],
                ],
            ],
        ],
        [
            "text" => "Testsida",
            "url" => "testsida",
            "title" => "Testsidor.",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Risgrynsgröt",
                        "url" => "testsida/testsida1",
                        "title" => "Risgrynsgröt",
                    ],
                    [
                        "text" => "Pepparkaka",
                        "url" => "testsida/testsida2",
                        "title" => "Pepparkaka",
                    ],
                ],
            ],
        ],
        [
            "text" => "Om",
            "url" => "om",
            "title" => "Om denna webbplats.",
        ],
        [
            "text" => "Styleväljare",
            "url" => "style",
            "title" => "Välj stylesheet.",
        ],
        [
            "text" => "Verktyg",
            "url" => "verktyg",
            "title" => "Verktyg och möjligheter för utveckling.",
        ],
        [
            "text" => "Test-sida",
            "url" => "testsida",
            "title" => "Test-sida för olika konstruktioner.",
        ],
    ],
];
