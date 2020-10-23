<?php

/*
Before editing please read this:
    If you want direct support and help setting this up please contact me on Discord which is Qrow#3914
    If you want to remove something, simply remove the contents inside of the quotation marks.
    If you notice any errors or issues with the site template, report it directly to my Discord.
    If you want a Custom Site / Version, add my discord to discuss pricing.
    Enjoy!
*/


// Other Category \\
// Link to the Music you want playing.
$youtubeMusicLink = "https://www.youtube.com/watch?v=qpi9YXaChHI";

// Link to your Discord
$discord = "discord.gg/hi";

// Ignore unless you want to change the Discord Link Image
$discordimg = "assets/img/Discordic.png";


// Meta Category \\
// Website Title - Name of your website
$title = "Qrows Alts";

// Icon - Shop Icon (Will be used for Favicon)
$icon = "assets/img/58481947cef1014c0b5e49b6.png";

// Description - Limit of 150 words, summarise your website.
$description = "Qrows Alts";

// Colour - Will be used for Embeds.
$color ="#FFF";


// Navigation Category \\
$logo = "assets/img/58481947cef1014c0b5e49b6.png";

// Remove completely if you want nothing here
$navbar = [
    [
        "item" => "Shop Link",
        "href" => "google.com",
    ],
    [
        "item" => "Discord",
        "href" => "https://discord.com",
    ]
];

// Site Content Category \\
$STitle = "QROWS";
// Highlight Part Of The Title
$STitle2 = "ALTS";

// Subtitle
$SSubtitle = "The Best Shop In The Market";

// Site Buttons - usually used for Discord, Telegram and Shop Link
// First is the text of the button. Second is the link you want it to go to.
$btns = [
    [
        "Txt" => "Discord",
        "link" => "google.com",
    ],
];


// Features Category \\

// Features Category Title Section
$FTitle = "Features Of";
$FHighlight = "Our Shop";

$Features = [
    [
        "Icon" => "assets/img/diamond.svg",
        "Title" => "High Quality Products",
    ],
    [
        "Icon" => "assets/img/money.svg",
        "Title" => "Cheapest Prices",
    ],
    [
        "Icon" => "assets/img/sport-team.svg",
        "Title" => "24/7 Support",
    ],
    [
        "Icon" => "assets/img/time.svg",
        "Title" => "Quick Delivery",
    ],
    [
        "Icon" => "assets/img/popularity.svg",
        "Title" => "Very Popular",
    ],
    [
        "Icon" => "assets/img/trust.svg",
        "Title" => "Reliable",
    ],  
];

// Product Category

// Product Category Title Section
$PTitle = "All Of Our";
$PHighlight = "Products";

$Products = [
    [
        "Title" => "NordVPN Account",
        "Image" => "assets/img/icon.png",
        "Price" => "£60.00",
        "ID" => "5ef958879baea",
    ],
    [
        "Title" => "NordVPN Account",
        "Image" => "assets/img/icon.png",
        "Price" => "£60.00",
        "ID" => "5ef958879baea",
    ],
];


// IGNORE THIS SECTION \\

function embedMusic($path) {
    $result = preg_replace('/^((?:https?:)?\/\/)?((?:www|m)\.)?((?:youtube\.com|youtu.be))(\/(?:[\w\-]+\?v=|embed\/|v\/)?)([\w\-]+)(\S+)?$/', '$5', $path);
    if (!empty($result) || !isset($result)) {
        echo "<iframe style=\"visibility: hidden;\"  src=\"https://www.youtube.com/embed/${result}?controls=0;autoplay=1\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>";
    }
}