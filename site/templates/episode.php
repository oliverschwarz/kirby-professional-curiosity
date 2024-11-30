<?php snippet('header'); ?>

<main>
    <div id="episode" class="stage">
        <h2><?php echo $page->title(); ?></h2>
        <p class="metadata">
            Folge <?php echo $page->podcasterepisode(); ?> vom <time datetime="<?php echo $page->date()->toDate('c'); ?>" pubdate><?php echo $page->date()->toDate('d.m.y'); ?></time>
        </p>
        <?php snippet('podcaster-player', ['episode' => $page]); ?>
        <?php echo $page->podcasterdescription()->kt(); ?>
    </div><!-- /.stage -->

</main>

<footer>
    <div class="stage">
        <hr>
        <p>Neugierig? Folge <a href="https://www.linkedin.com/in/janina-pakusch/">Janina auf LinkedIn</a> und <a href="https://mastodon.social/@oliverschwarz">Oliver auf Mastodon</a>.</p>
    </div>
</footer>

<script src="https://tinylytics.app/embed/AUY9afqJFWz6M1Muy7xX.js" defer></script>

</body>
</html>