<!doctype html>
<html lang="en">
<head>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<title><?php echo $site->title(); ?> - <?php echo $site->subtitle(); ?></title>
    <?php echo css('assets/css/layout.css'); ?>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

<?php if ($page->template() == "episode"): ?>

    <meta name="twitter:card" value="summary">
    <meta property="og:title" content="Professional Curiosity: <?php echo $page->title(); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php $page->url(); ?>">
    <meta property="og:image" content="https://professional-curiosity.com/assets/images/podcast-hero-c.jpg">
    <meta property="og:description" content="<?php echo $page->podcasterSubtitle(); ?>">

<?php else: ?>

    <meta name="twitter:card" value="summary">
    <meta property="og:title" content="Professional Curiosity (by STUDIO16B)">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://professional-curiosity.com">
    <meta property="og:image" content="https://professional-curiosity.com/assets/images/podcast-hero-c.jpg">
    <meta property="og:description" content="Professional Curiosity ist ein Podcast von Janina und Oliver über Organisationen, Strategie und Neugierde">

<?php endif; ?>

    <link rel="alternate" type="application/rss+xml" title="Professional Curiosity - Alle Folgen" href="https://professional-curiosity.com/podcast/feed">

</head>
<body>

<header>
    <div class="header-stage">
        <!--
            <h1><?php echo $site->subtitle(); ?></h1>
        -->
        <div id="logo">
            <a href="<?php echo $site->url(); ?>"><img src="<?php echo $site->url(); ?>/assets/images/logo-prof-curi.png" alt="Schriftzug Professional Curiosity in bunten Farben"></a>
        </div>
        <?php if(count($site->children()->listed())): ?>
        <nav class="site-nav">
            <ul>
            <?php foreach($site->children()->listed() as $navitem): ?>
                <li><a href="<?php echo $navitem->url(); ?>"><?php echo $navitem->title(); ?></a></li>
            <?php endforeach; ?>
            </ul>
        </nav>
        <?php endif; ?>
    </div>
</header>