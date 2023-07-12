<?php
/**
 * @global $APPLICATION
 * @global $USER
 */

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\{Page\Asset, Context, Application};
?>

<!doctype html>
<html lang="<?= LANGUAGE_ID ?>">
<head>
    <title><?php $APPLICATION->ShowTitle() ?></title>
    <?php
    $APPLICATION->ShowHead();

    Asset::getInstance()->addString('<meta name="theme-style-mode" content="1">');
    Asset::getInstance()->addString('<meta charset="UTF-8">');
    Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">');
    Asset::getInstance()->addString('<meta http-equiv="X-UA-Compatible" content="ie=edge">');

    Asset::getInstance()->addString('<meta name="theme-color" content="#ffffff">');

    Asset::getInstance()->addString('<meta name="twitter:title" content="' . $APPLICATION->GetPageProperty("title") . '">');
    Asset::getInstance()->addString('<meta property="og:title" content="' . $APPLICATION->GetPageProperty("title") . '">');
    $APPLICATION->SetPageProperty("TITLE", $APPLICATION->GetPageProperty("title"));
    $APPLICATION->SetPageProperty("keywords", $APPLICATION->GetPageProperty("keywords"));
    $APPLICATION->SetPageProperty("description", $APPLICATION->GetPageProperty("description"));
//    Asset::getInstance()->addString('<meta name="twitter:description" content="' . $APPLICATION->GetPageProperty("description") . '">');
//    Asset::getInstance()->addString('<meta property="og:description" content="' . $APPLICATION->GetPageProperty("description") . '">');
//    Asset::getInstance()->addString('<meta property="og:locale" content="ru_RU">');
//    Asset::getInstance()->addString('<meta property="og:url" content="https://' . SITE_SERVER_NAME . '/">');
//    Asset::getInstance()->addString('<meta property="og:site_name" content="https://' . SITE_SERVER_NAME . '/">');
//    Asset::getInstance()->addString('<meta name="twitter:url" content="https://' . SITE_SERVER_NAME . '/">');
//    Asset::getInstance()->addString('<meta name="twitter:site" content="https://' . SITE_SERVER_NAME . '/">');
//    Asset::getInstance()->addString('<meta name="twitter:domain" content="https://' . SITE_SERVER_NAME . '/">');
//    Asset::getInstance()->addString('<meta property="og:image:width" content="1057">');
//    Asset::getInstance()->addString('<meta property="og:image:height" content="439">');
//    Asset::getInstance()->addString('<meta property="og:image" content="https://' . SITE_SERVER_NAME . '/image.png"/>');
//    Asset::getInstance()->addString('<meta name="twitter:card" content="summary_large_image">');
//    Asset::getInstance()->addString('<meta name="twitter:creator" content="' . SITE_SERVER_NAME . '">');
//    Asset::getInstance()->addString('<meta property="og:type" content="website">');

    /* FAVICON */
//    Asset::getInstance()->addString('<link rel="apple-touch-icon" sizes="57x57" href="https://' . SITE_SERVER_NAME . '/apple-icon-57x57.png">');
//    Asset::getInstance()->addString('<link rel="apple-touch-icon" sizes="60x60" href="https://' . SITE_SERVER_NAME . '/apple-icon-60x60.png">');
//    Asset::getInstance()->addString('<link rel="apple-touch-icon" sizes="72x72" href="https://' . SITE_SERVER_NAME . '/apple-icon-72x72.png">');
//    Asset::getInstance()->addString('<link rel="apple-touch-icon" sizes="76x76" href="https://' . SITE_SERVER_NAME . '/apple-icon-76x76.png">');
//    Asset::getInstance()->addString('<link rel="apple-touch-icon" sizes="114x114" href="https://' . SITE_SERVER_NAME . '/apple-icon-114x114.png">');
//    Asset::getInstance()->addString('<link rel="apple-touch-icon" sizes="120x120" href="https://' . SITE_SERVER_NAME . '/apple-icon-120x120.png">');
//    Asset::getInstance()->addString('<link rel="apple-touch-icon" sizes="144x144" href="https://' . SITE_SERVER_NAME . '/apple-icon-144x144.png">');
//    Asset::getInstance()->addString('<link rel="apple-touch-icon" sizes="152x152" href="https://' . SITE_SERVER_NAME . '/apple-icon-152x152.png">');
//    Asset::getInstance()->addString('<link rel="apple-touch-icon" sizes="180x180" href="https://' . SITE_SERVER_NAME . '/apple-icon-180x180.png">');
//    Asset::getInstance()->addString('<link rel="icon" type="image/png" sizes="192x192"  href="https://' . SITE_SERVER_NAME . '/android-icon-192x192.png">');
//    Asset::getInstance()->addString('<link rel="icon" type="image/png" sizes="32x32" href="https://' . SITE_SERVER_NAME . '/favicon-32x32.png">');
//    Asset::getInstance()->addString('<link rel="icon" type="image/png" sizes="96x96" href="https://' . SITE_SERVER_NAME . '/favicon-96x96.png">');
//    Asset::getInstance()->addString('<link rel="icon" type="image/png" sizes="16x16" href="https://' . SITE_SERVER_NAME . '/favicon-16x16.png">');
//    Asset::getInstance()->addString('<link rel="manifest" href="https://' . SITE_SERVER_NAME . '/manifest.json">');
//    Asset::getInstance()->addString('<meta name="msapplication-TileColor" content="#ffffff">');
//    Asset::getInstance()->addString('<meta name="msapplication-TileImage" content="https://' . SITE_SERVER_NAME . '/ms-icon-144x144.png">');
//    Asset::getInstance()->addString('<meta name="theme-color" content="#ffffff">');

    /* Yandex verification */
//    Asset::getInstance()->addString('<meta name="yandex-verification" content="13d77daecac6fe22" />');

    /* CSS */
//    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/style/output.css");

    /* PLUGINS */
    //Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/plugins/prismjs/prism.css");
    //Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/plugins/prismjs/prism.js");

    ?>

</head>
<?php $APPLICATION->ShowPanel() ?>
<header>

</header>

<?
$APPLICATION->IncludeComponent(
    "bitrix:breadcrumb",
    "",
    [
        "PATH"       => "",
        "SITE_ID"    => "i2",
        "START_FROM" => "0"
    ]
); ?>
