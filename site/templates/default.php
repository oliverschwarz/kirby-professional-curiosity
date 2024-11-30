<?php

use mauricerenck\Podcaster\Podcast;
$rssPage = page('podcast/feed');
$podcastHelper = new Podcast();
$episodeList = $podcastHelper->getEpisodes($rssPage);

snippet('header'); ?>

<main>
    <div class="stage">
        <!--
            <h1><?php echo $page->title(); ?></h1>
        -->
        <?php echo $page->text()->kt(); ?>

    </div><!-- /.stage -->


<?php if (count($episodeList)): ?>
    <div class="stage">
<?php foreach($episodeList as $episode): ?>
        <div class="episode">
            <h3><a href="<?php echo $episode->url(); ?>"><?php echo $episode->title()->html(); ?></a></h3>
            <p class="metadata">
            <time datetime="<?php echo $episode->date()->toDate('c'); ?>" pubdate><?php echo $episode->date()->toDate('d.m.y'); ?></time> - Folge <?php echo $episode->podcasterepisode(); ?> - <?php echo $episode->podcasterSubtitle(); ?>
            </p>
        </div>
<?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

</main>

<footer>
    <div class="stage">
        <hr>
        <?php echo $page->footer()->kt(); ?>
    </div>
</footer>

<script src="https://tinylytics.app/embed/AUY9afqJFWz6M1Muy7xX.js" defer></script>

</body>
</html>