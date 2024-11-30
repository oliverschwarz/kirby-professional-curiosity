<?php if($episode): ?>
    <div class="podcast-player">
        <audio controls preload="none">
            <source src="<?= $episode->podcasterAudio()->toFile()->url() ?>" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
    </div>
<?php endif ?>