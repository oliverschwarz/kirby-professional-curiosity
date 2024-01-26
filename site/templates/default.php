<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <title></title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="referrer" content="no-referrer">
  <link rel="canonical" href="<?= $site->url() ?>">
  <?= css('assets/layout.css'); ?>

</head>
<body>

	<header>
		<div class="stage">
			<h1><?= $site->title() ?></h1>
			<nav>
				<ul>
					<li><a href="">Home</a></li>
					<li><a href="">Blog</a></li>
					<li><a href="">Podcast</a></li>
					<li><a href="">About</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<main>
		<div class="stage">
			<h1><?= $site->description() ?></h1>

			<div id="news" class="cf">

				<div id="blog" class="feature">
					<h2>From the blog</h2>
				</div>

				<aside id="about" class="feature">
					<h2>Latest episodes</h2>
				</aside>

			</div>


			<h2>This is an H2 headline</h2>
			<h3>This is an H3 headline</h3>
			<p>This is a paragraph of text. It is just written here. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
		</div>
	</main>

</body>
</html>