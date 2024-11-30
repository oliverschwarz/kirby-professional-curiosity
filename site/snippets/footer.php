<footer class="download-section">

    <div class="download-links">
        <a href="<?= $site->apple_podcasts_url() ?>" class="download-button">
            <?php echo F::read('assets/images/badge-apple-podcasts.svg') ?>
        </a>
        <a href="<?= $site->spotify_url() ?>" class="download-button">
            <?php echo F::read('assets/images/spotify-dark.svg') ?>
        </a>
    </div>

    <div class="creator-links">
        Der Podcast "Professional Curiosity" wird veröffentlicht von <a href="<?= $site->creator2_url() ?>" target="_blank"><?= $site->creator2_name() ?></a> &amp; <a href="<?= $site->creator1_url() ?>" target="_blank"><?= $site->creator1_name() ?></a>.
        Die Webseite ist gebaut von <a href="https://claude.ai">Claude</a> &amp; <a href="<?= $site->creator1_url() ?>" target="_blank"><?= $site->creator1_name() ?></a> basierend auf dem wundervollen <a href="https://getkirby.com">Kirby CMS</a>
        und mit der Hilfe von <a href="https://maurice-renck.de/de">Maurice Rencks</a> fantastischem <a href="https://plugins.getkirby.com/mauricerenck/podcaster">Podcaster Plugin</a>.
    </div>
</footer>

<script src="https://tinylytics.app/embed/AUY9afqJFWz6M1Muy7xX.js" defer></script>


</body>
</html>