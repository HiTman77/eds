<?php global $Wcms ?>
<!DOCTYPE HTML>
<html>
<head>
<title><?= $Wcms->page('title') ?> - <?= $Wcms->get('config', 'siteTitle') ?></title>
<meta name="title" content="<?= $Wcms->page('title') ?> - <?= $Wcms->get('config', 'siteTitle') ?>" />
<meta name="description" content="<?= $Wcms->page('description') ?>">
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="/themes/eds/assets/css/main.css?v<?php echo(rand(1,10));?><?php echo(rand(1,10));?>" />
<?= $Wcms->css() ?>
<link rel="shortcut icon" href="/data/files/favicon.png">
</head>
<body class="is-preload">
<?= $Wcms->settings() ?>
<?= $Wcms->alerts() ?>
<div id="wrapper">
<div id="main">
<div class="inner">
<header id="header">
<a href="/" class="logo"><strong><?= $Wcms->page('title') ?></strong> on <?= $Wcms->get('config', 'siteTitle') ?></a>
<ul class="icons">
<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
<li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
<li><a href="#" class="icon brands fa-medium-m"><span class="label">Medium</span></a></li>
</ul>
</header>
<section>
<header class="main">
<h1><?= $Wcms->page('keywords') ?></h1>
</header>
<?= $Wcms->page('content') ?>
</section>
<section>
<?= $Wcms->block('subside') ?>
</section>
</div>
</div>
<div id="sidebar">
<div class="inner">
<!-- Search -->
<nav id="menu">
<header class="major">
<h2>Menu</h2>
</header>
<ul>
<?= $Wcms->menu() ?>
</ul>
</nav>
<!-- Section -->
<section>
<header class="major">
<h2><?= $Wcms->page('title') ?></h2>
</header>
<p><?= $Wcms->page('description') ?></p>
</section>
<footer id="footer">
<p class="copyright"><?= $Wcms->footer() ?></p>
</footer>
</div>
</div>
</div>
<script src="/themes/eds/assets/js/jquery.min.js"></script>
<script src="/themes/eds/assets/js/browser.min.js"></script>
<script src="/themes/eds/assets/js/breakpoints.min.js"></script>
<script src="/themes/eds/assets/js/util.js"></script>
<script src="/themes/eds/assets/js/main.js"></script>
<?= $Wcms->js() ?>
</body>
</html>