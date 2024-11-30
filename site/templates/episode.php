<?php snippet('header'); ?>

<main class="main-content">
    <div id="episode" class="stage">
        <h2><?php echo $page->title(); ?></h2>
        <p class="metadata">
            Folge <?php echo $page->podcasterepisode(); ?> vom <time datetime="<?php echo $page->date()->toDate('c'); ?>" pubdate><?php echo $page->date()->toDate('d.m.y'); ?></time>
        </p>
        <?php snippet('podcaster-player', ['episode' => $page]); ?>
        <div class="episode-description">
            <?php echo $page->podcasterdescription()->kt(); ?>
        </div>
    </div><!-- /.stage -->

</main>

<?php snippet('footer') ?>