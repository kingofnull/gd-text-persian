gd-text-persian
=======
This package is an forked version of gd-text by stil (https://github.com/stil/gd-text) that has been optimized for persian language.

##install 
Install this library using composer:
```bash
composer require kingofnull/gd-text-persian
```

###Persian example
```php
<?php
require __DIR__.'/vendor/autoload.php';
use GDTextPersian\Box;
use GDTextPersian\Color;
$im = imagecreatetruecolor(500, 100);

//instantiate class with rtl option(second argument[$rtl=true])
$box = new Box($im,true);
$box->setFontFace('c:\Windows\Fonts\tahoma.ttf');
$box->setFontColor(new Color(255, 75, 140));
$box->setFontSize(20);
//no arguments means use image size [this function was manipulated]
//$box->setBox();
//or you can use bellow function [this function was added (experimental)]
$box->setBoxByMargin(50);

//set text position
$box->setTextAlign('right', 'top');

$text = 'امروز آمدیم تا دانلود نسخه جدید خانواده فونت بی نازنین b nazanin را در اختیار کاربران محترم ایران فونت قرار بدهیم. خانواده این فونت که ما آن را نازنین پلاس میخوانیم شامل نازنین معمولی(Regular)، نازنین ضخیم (Bold) و نازنین سیاه (Black) است. این فونت از تمام حروف فارسی، عربی و انگلیسی به خوبی پشتیبانی می‌کند.  با این فونت با راحتی می توانید هم حروف عربی (حروف ة، ی، ک و...) را تایپ کنید و هم حروف انگلیسی را. این فونت در استفاده شما در کارهای مذهبی و البته کتب درسی و آموزشی مختلف می تواند بسیار راه گشا باشد. در صورت مشاهده هر گونه ایراد و یا ضعف در فونت خواهشمند است ما را در جریان قرار گذارید تا در سریع ترین زمان اشکالات اصلاح و رفع گردند. با تشکر.  منبع: Irfont.ir';


//first argument is paragraph text and second argument set auto vertical resize(vertical expand)	
$box->draw($text,true);
//set header for image
header("Content-type: image/png");
//dump image
imagepng($im);
```

Example output:

![fonts example](images/persian.png)



###Basic usage example
```php
<?php
require __DIR__.'/../vendor/autoload.php';

use GDTextPersian\Box;
use GDTextPersian\Color;

$im = imagecreatetruecolor(500, 500);
$backgroundColor = imagecolorallocate($im, 0, 18, 64);
imagefill($im, 0, 0, $backgroundColor);

$box = new Box($im);
$box->setFontFace(__DIR__.'/Franchise-Bold-hinted.ttf'); // http://www.dafont.com/franchise.font
$box->setFontColor(new Color(255, 75, 140));
$box->setTextShadow(new Color(0, 0, 0, 50), 2, 2);
$box->setFontSize(40);
$box->setBox(20, 20, 460, 460);
$box->setTextAlign('left', 'top');
$box->draw("Franchise\nBold");

$box = new Box($im);
$box->setFontFace(__DIR__.'/Pacifico.ttf'); // http://www.dafont.com/pacifico.font
$box->setFontSize(80);
$box->setFontColor(new Color(255, 255, 255));
$box->setTextShadow(new Color(0, 0, 0, 50), 0, -2);
$box->setBox(20, 20, 460, 460);
$box->setTextAlign('center', 'center');
$box->draw("Pacifico");

$box = new Box($im);
$box->setFontFace(__DIR__.'/Prisma.otf'); // http://www.dafont.com/prisma.font
$box->setFontSize(70);
$box->setFontColor(new Color(148, 212, 1));
$box->setTextShadow(new Color(0, 0, 0, 50), 0, -2);
$box->setBox(20, 20, 460, 460);
$box->setTextAlign('right', 'bottom');
$box->draw("Prisma");

header("Content-type: image/png");
imagepng($im);
```

Example output:

![fonts example](images/fonts.png)

Multilined text
---------------

```php
<?php
require __DIR__.'/../vendor/autoload.php';

use GDTextPersian\Box;
use GDTextPersian\Color;

$im = imagecreatetruecolor(500, 500);
$backgroundColor = imagecolorallocate($im, 0, 18, 64);
imagefill($im, 0, 0, $backgroundColor);

$box = new Box($im);
$box->setFontFace(__DIR__.'/Minecraftia.ttf'); // http://www.dafont.com/minecraftia.font
$box->setFontColor(new Color(255, 75, 140));
$box->setTextShadow(new Color(0, 0, 0, 50), 2, 2);
$box->setFontSize(8);
$box->setLineHeight(1.5);
//$box->enableDebug();
$box->setBox(20, 20, 460, 460);
$box->setTextAlign('left', 'top');
$box->draw(
    "    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eleifend congue auctor. Nullam eget blandit magna. Fusce posuere lacus at orci blandit auctor. Aliquam erat volutpat. Cras pharetra aliquet leo. Cras tristique tellus sit amet vestibulum ullamcorper. Aenean quam erat, ullamcorper quis blandit id, sollicitudin lobortis orci. In non varius metus. Aenean varius porttitor augue, sit amet suscipit est posuere a. In mi leo, fermentum nec diam ut, lacinia laoreet enim. Fusce augue justo, tristique at elit ultricies, tincidunt bibendum erat.\n\n    Aenean feugiat dignissim dui non scelerisque. Cras vitae rhoncus sapien. Suspendisse sed ante elit. Duis id dolor metus. Vivamus congue metus nunc, ut consequat arcu dapibus vel. Ut sed ipsum sollicitudin, rutrum quam ac, fringilla risus. Phasellus non tincidunt leo, sodales venenatis nisl. Duis lorem odio, porta quis laoreet ut, tristique a justo. Morbi dictum dictum est ut facilisis. Duis suscipit sem ligula, at commodo risus pulvinar vehicula. Sed quis quam ac quam scelerisque dapibus id non justo. Sed mollis enim id neque tempus, a congue nulla blandit. Aliquam congue convallis lacinia. Aliquam commodo eleifend nisl a consectetur.\n\n    Maecenas sem nisl, adipiscing nec ante sed, sodales facilisis lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut bibendum malesuada ipsum eget vestibulum. Pellentesque interdum tempor libero eu sagittis. Suspendisse luctus nisi ante, eget tempus erat tristique sed. Duis nec pretium velit. Praesent ornare, tortor non sagittis sollicitudin, dolor quam scelerisque risus, eu consequat magna tellus id diam. Fusce auctor ultricies arcu, vel ullamcorper dui condimentum nec. Maecenas tempus, odio non ullamcorper dignissim, tellus eros elementum turpis, quis luctus ante libero et nisi.\n\n    Phasellus sed mauris vel lorem tristique tempor. Pellentesque ornare purus quis ullamcorper fermentum. Curabitur tortor mauris, semper ut erat vitae, venenatis congue eros. Ut imperdiet arcu risus, id dapibus lacus bibendum posuere. Etiam ac volutpat lectus. Vivamus in magna accumsan, dictum erat in, vehicula sem. Donec elementum lacinia fringilla. Vivamus luctus felis quis sollicitudin eleifend. Sed elementum, mi et interdum facilisis, nunc eros suscipit leo, eget convallis arcu nunc eget lectus. Quisque bibendum urna sit amet varius aliquam. In mollis ante sit amet luctus tincidunt."
);

header("Content-type: image/png;");
imagepng($im, null, 9, PNG_ALL_FILTERS);
```

Text stroke
-----------

```php
<?php
require __DIR__.'/../vendor/autoload.php';

use GDTextPersian\Box;
use GDTextPersian\Color;

$im = imagecreatetruecolor(500, 500);
$backgroundColor = imagecolorallocate($im, 0, 18, 64);
imagefill($im, 0, 0, $backgroundColor);

$box = new Box($im);
$box->setFontFace(__DIR__.'/Elevant bold.ttf'); // http://www.dafont.com/elevant-by-pelash.font
$box->setFontSize(150);
$box->setFontColor(new Color(255, 255, 255));
$box->setBox(15, 20, 460, 460);
$box->setTextAlign('center', 'center');

$box->setStrokeColor(new Color(255, 75, 140)); // Set stroke color
$box->setStrokeSize(3); // Stroke size in pixels

$box->draw("Elevant");

header("Content-type: image/png;");
imagepng($im, null, 9, PNG_ALL_FILTERS);
```

Text background
-----------

```php
<?php
require __DIR__.'/../vendor/autoload.php';

use GDTextPersian\Box;
use GDTextPersian\Color;

$im = imagecreatetruecolor(500, 500);
$backgroundColor = imagecolorallocate($im, 0, 18, 64);
imagefill($im, 0, 0, $backgroundColor);

$box = new Box($im);
$box->setFontFace(__DIR__.'/fonts/BebasNeue.otf'); // http://www.dafont.com/elevant-by-pelash.font
$box->setFontSize(100);
$box->setFontColor(new Color(255, 255, 255));
$box->setBox(15, 20, 460, 460);
$box->setTextAlign('center', 'center');

$box->setBackgroundColor(new Color(255, 86, 77));

$box->draw("Bebas Neue");

header("Content-type: image/png;");
imagepng($im, null, 9, PNG_ALL_FILTERS);
```

Demos
------
Line height demo:

![line height example](images/lineheight.gif)

Text alignment demo:

![align example](images/alignment.gif)

Text stroke demo:

![stroke example](images/stroke.gif)

Text background demo:

![stroke example](images/background.gif)

Debug mode enabled demo:

![debug example](images/debug.png)
