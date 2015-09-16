<?php defined('SYSPATH') or die('No direct script access.'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf8" />
        <meta name="author" content="cyberapp.ru" />
        <title><?php echo $message ?></title>
 
        <style type="text/css">
            * { margin: 0; padding: 0; }
            html, body{ width: 100%; height: 100%; }
            #wrap{ width: 900px; margin: 100px auto 0 auto; }
        </style>
    </head>
 
    <body>
        <div id="wrap">
            <h1><?php echo $message?></h1>
            <?php if (isset($local) AND $local) : ?>
                404 ошибка произошла по ссылке с нашего сайта.
            <?php endif; ?>
        </div>
    </body>
</html>