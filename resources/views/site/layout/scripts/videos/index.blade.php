<script>
    player = videojs("video-js").ready(function () {
        controls= true,
            autoplay= false,
            preload= "auto";
    });
    // player.controlBar.progressControl.disable();
    videojs('video-js').on('ended', function () {
        //todo: that voodoo that you do so well
    });
</script>

