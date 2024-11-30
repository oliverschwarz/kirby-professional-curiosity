<?php

use mauricerenck\Podcaster\Podcast;
$rssPage = page('podcast/feed');
$podcastHelper = new Podcast();
$episodes = $podcastHelper->getEpisodes($rssPage);

snippet('header'); ?>

<main class="main-content">
    <?php

    if($episodes->count() > 0):
        $latestEpisode = $episodes->first();
    ?>
    <article class="episode-featured">
        <div class="episode-cover">
            <img src="<?= $latestEpisode->podcasterCover()->toFile()->url() ?>" alt="Cover for <?= $latestEpisode->title()->html() ?>">
        </div>
        <div class="episode-content">
            <a href="<?= $latestEpisode->url() ?>" class="episode-link">
                <h1 class="episode-title"><?= $latestEpisode->title()->html() ?></h1>
                <div class="episode-meta">Episode <?= $latestEpisode->podcasterEpisode()?>, <?= $latestEpisode->date()->toDate('F j, Y') ?></div>
            </a>
            <div class="player">
                <?php snippet('player', ['episode' => $latestEpisode]) ?>
            </div>
            <div class="episode-description">
                <?= $latestEpisode->podcasterSubtitle() ?>
                <a href="<?= $page->url() ?>/episode/<?= $latestEpisode->uid() ?>">Zur Folge</a>
            </div>
        </div>
    </article>
    <?php endif ?>
    <?php if($episodes->count() > 1): ?>
    <section class="episode-list">
        <?php foreach($episodes->offset(1) as $episode): ?>
        <article class="episode-item">
            <a href="<?= $episode->url() ?>" class="episode-link">
                <h3 class="episode-title"><?= $episode->title()->html() ?></h3>
                <div class="episode-meta">Episode <?php echo $episode->podcasterepisode(); ?> / <?= $episode->date()->toDate('F j, Y') ?></div>
                <div class="episode-description">
                    <?php echo $episode->podcasterSubtitle(); ?>
                </div>
            </a>
        </article>
        <?php endforeach ?>
    </section>
    <?php endif ?>
</main>

<?php snippet('footer') ?>