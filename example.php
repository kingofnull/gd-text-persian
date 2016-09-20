<?php
require __DIR__.'/vendor/autoload.php';

use GDTextPersian\Box;
use GDTextPersian\Color;

$im = imagecreatetruecolor(500, 100);
// imagealphablending($im, false);
// $transparency = imagecolorallocatealpha($im, 0, 0, 0, 127);
// imagefill($im, 0, 0, $transparency);
// imagesavealpha($im, true);

// $backgroundColor = imagecolorallocate($im, 0, 18, 64);
// imagefill($im, 0, 0, $backgroundColor);

$box = new Box($im,true);
// $box->enableDebug();
$box->setFontFace('c:\Windows\Fonts\tahoma.ttf'); // http://www.dafont.com/franchise.font
// $box->setFontFace('c:\Windows\Fonts\bnazanin.ttf'); // http://www.dafont.com/franchise.font
$box->setFontColor(new Color(255, 75, 140));
// $box->setTextShadow(new Color(0, 0, 0, 50), 2, 2);
$box->setFontSize(20);
//no arguments means use image size
// $box->setBox(20,20,400,100);
$box->setBoxByMargin(50);

$box->setTextAlign('right', 'top');
// $gd = new FarsiGD();

$text = 'امروز آمدیم تا دانلود نسخه جدید خانواده فونت بی نازنین b nazanin را در اختیار کاربران محترم ایران فونت قرار بدهیم. خانواده این فونت که ما آن را نازنین پلاس میخوانیم شامل نازنین معمولی(Regular)، نازنین ضخیم (Bold) و نازنین سیاه (Black) است. این فونت از تمام حروف فارسی، عربی و انگلیسی به خوبی پشتیبانی می‌کند.  با این فونت با راحتی می توانید هم حروف عربی (حروف ة، ی، ک و...) را تایپ کنید و هم حروف انگلیسی را. این فونت در استفاده شما در کارهای مذهبی و البته کتب درسی و آموزشی مختلف می تواند بسیار راه گشا باشد. در صورت مشاهده هر گونه ایراد و یا ضعف در فونت خواهشمند است ما را در جریان قرار گذارید تا در سریع ترین زمان اشکالات اصلاح و رفع گردند. با تشکر.  منبع: Irfont.ir';


// $text = $gd->persianText($text, 'fa', 'normal');
// $text =(mb_strrev( $text));

//second argument set auto vertical resize
$box->draw($text,true);

header("Content-type: image/png");

imagepng($im);