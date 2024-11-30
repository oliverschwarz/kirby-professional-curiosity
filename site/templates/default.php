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
        <a href="<?= $page->url() ?>/episode/<?= $latestEpisode->uid() ?>" class="episode-link">
            <h1 class="episode-title"><?= $latestEpisode->title()->html() ?></h1>
            <div class="episode-meta">Episode <?php echo $latestEpisode->podcasterepisode(); ?> / <?= $latestEpisode->date()->toDate('F j, Y') ?></div>
        </a>
        <div class="player">
            <?php snippet('player', ['episode' => $latestEpisode]) ?>
        </div>
        <div class="episode-description">
            <?= $latestEpisode->description()->excerpt(300) ?>
            <a href="<?= $page->url() ?>/episode/<?= $latestEpisode->uid() ?>">Read more →</a>
        </div>
    </article>
    <?php endif ?>
    <?php if($episodes->count() > 1): ?>
    <section class="episode-list">
        <h2>All Episodes</h2>
        <?php foreach($episodes->offset(1) as $episode): ?>
        <article class="episode-item">
            <a href="<?= $page->url() ?>/episode/<?= $episode->uid() ?>" class="episode-link">
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

<footer class="download-section">
    <div class="download-links">
        <a href="<?= $site->apple_podcasts_url() ?>" class="download-button">Listen on Apple Podcasts</a>
        <a href="<?= $site->spotify_url() ?>" class="download-button">Listen on Spotify</a>
    </div>
    <div class="creator-links">
        Created by <a href="<?= $site->creator1_url() ?>"><?= $site->creator1_name() ?></a> &
        <a href="<?= $site->creator2_url() ?>"><?= $site->creator2_name() ?></a>
    </div>
</footer>

<script src="https://tinylytics.app/embed/AUY9afqJFWz6M1Muy7xX.js" defer></script>

</body>
</html>