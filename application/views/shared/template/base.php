<?php
    $isSecure = false;
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
        $isSecure = true;
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https' || !empty($_SERVER['HTTP_X_FORWARDED_SSL']) && $_SERVER['HTTP_X_FORWARDED_SSL'] == 'on') {
        $isSecure = true;
    }
    $REQUEST_PROTOCOL = $isSecure ? 'https' : 'http';
    $base_url = $REQUEST_PROTOCOL .'://' .$_SERVER['SERVER_NAME'];
?>
<!DOCTYPE html>
<html>
<head>
<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-5305413-48"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments)};
  gtag('js', new Date());

  gtag('config', 'UA-5305413-48');
</script>

    <meta charset="utf-8">
    <base href="<?php echo $base_url ?>">
    <title><?php echo Kohana::$config->load('site.title') ?></title>
    <!--<meta name="viewport" content="width=1280, user-scalable=no">-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo Kohana::$config->load('site.description') ?>">
    <meta name="keywords" content="<?php echo isset($description) ? $description : Kohana::$config->load('site.keywords') ?>">
    <meta name="author" content="<?php echo isset($author) ? $author : Kohana::$config->load('site.author') ?>">
    <link href="media/img/favicon.ico" rel='shortcut icon'/>
    <meta property="og:title" content="<?php echo isset($title) ? $title : Kohana::$config->load('site.title') ?>" />
    <meta property="og:description" content="<?php echo isset($description) ? $description : Kohana::$config->load('site.description') ?>">
    <meta property="og:image" content="<?php echo isset($image) ? $image : URL::base().Kohana::$config->load('site.image') ?>" />
    <meta itemscope itemtype="http://schema.org/Article" />
    <meta itemprop="headline" content="<?php echo isset($title) ? $title : Kohana::$config->load('site.title') ?>" />
    <meta itemprop="description" content="<?php echo isset($description) ? $description : Kohana::$config->load('site.description') ?>" />
    <meta itemprop="image" content="<?php echo isset($image) ? $image : URL::base().Kohana::$config->load('site.image') ?>" />
    <!-- FAVICON -->
    <link rel="shortcut icon" href="media/img/favicon.ico" type="image/x-icon" >
    <!-- Le styles -->
    <link type="text/css" href="media/_css/main.css?v=<?php echo mt_rand(1,1000); ?>" rel="stylesheet" media="screen" />
    <!--<?php Template::compile_css() ?>-->
    <!-- Le fav and touch icons -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="media/img/touch/chrome-touch-icon-192x192.png">
    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="">
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png">
    <script src="media/js/vendor/pace.min.js"></script>
    <!--[if lt IE 9]>
    <script src="media/js/vendor/modernizr.min.js"></script>
    <script src="media/js/vendor/respond.min.js"></script>
    <![endif]-->
</head>
<body id="<?php echo $page_id ?>">
    <div class="overlay-pace"></div>
    <div class="wrapper">
    	<?php echo $header ?>
    	<?php echo $content ?>
    	<?php echo $footer ?>
    </div>
    <script>
        var BASE_URL = '<?php echo URL::base(); ?>';
    </script>
    <script type="text/javascript" src="media/js/vendor/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="media/js/vendor/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="media/js/vendor/TweenMax.min.js"></script>
    <script type="text/javascript" src="media/js/vendor/ScrollToPlugin.min.js"></script>
    <script type="text/javascript" src="media/js/vendor/ScrollMagic.min.js"></script>
    <script type="text/javascript" src="media/js/vendor/animation.gsap.min.js"></script>
    <script type="text/javascript" src="media/js/vendor/jquery.mousewheel-3.0.6.pack.js"></script>
    <script type="text/javascript" src="media/js/vendor/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="media/js/vendor/slick.js"></script>
    <script type="text/javascript" src="media/js/vendor/jquery.dropdownPlain.js"></script>
    <script type="text/javascript" src="media/js/vendor/jquery.validate.min.js"></script>
    <script type="text/javascript" src="media/js/vendor/jquery.mask.min.js"></script>
    <script type="text/javascript" src="media/js/vendor/jquery.matchHeight.js"></script>
    <script type="text/javascript" src="media/js/vendor/svg4everybody.js"></script>
    <script type="text/javascript" src="media/js/vendor/share.js"></script>
    <script type="text/javascript" src="media/js/vendor/jssor.js"></script>
    <script type="text/javascript" src="media/js/vendor/jssor.slider.js"></script>
    <script type="text/javascript" src="media/js/vendor/jquery.waitforimages.min.js"></script>
    <script type="text/javascript" src="media/js/main.js?v=<?php echo mt_rand(1,1000); ?>"></script>
</body>
</html>

