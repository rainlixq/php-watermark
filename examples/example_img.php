<?php


use Ajaxray\PHPWatermark\Watermark;

include __DIR__.'/../vendor/autoload.php';

$watermark = new Watermark(__DIR__ . '/img/poster.jpg');
$watermark->setFont('Arial')
    ->setFontSize(36)
    ->setOpacity(.4)
    ->setRotate(330)
    ->setOffset(-80, 200)
    ->setPosition(Watermark::POSITION_RIGHT);

$text = "ajaxray.com";
$watermark->withText($text, __DIR__ . '/img/result_simple.jpg');

// For debugging generated command
// $watermark->setDebug();
// die($watermark->withText($text, __DIR__ . '/img/result_simple.jpg'));

$watermark->setTiled()
    ->setTileSize(200, 200)
    ->setFontSize(24)
    ->setRotate(330)
    ->setOffset(60,0)
;

$watermark->withText($text, __DIR__ . '/img/result_tiled.jpg');

// $watermark->setDebug();
// die($watermark->withText($text, __DIR__ . '/img/result_tiled.jpg'));

// Watermarking with image
$imgMark = new Watermark(__DIR__ . '/img/poster.jpg');
$imgMark->setPosition(Watermark::POSITION_BOTTOM_RIGHT)
    ->setOffset(50, 50)
    ->setOpacity(.3)
    ->setStyle(Watermark::STYLE_IMG_DISSOLVE);

$imgMark->withImage(__DIR__ . '/img/php.png', __DIR__ . '/img/result_logo.jpg');

// For debugging generated command
// $imgMark->setDebug();
// die($imgMark->withImage(__DIR__ . '/img/php.png', __DIR__ . '/img/result_logo.jpg'));