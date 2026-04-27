
        <footer>
            <div class="container" style="text-align: center;">
                <p>Website owned and maintained by <a href="https://www.davidhunter.scot" target="_blank">David Hunter</a> since 2005.</p>
                <p><a href="/">DAH5 Home</a> | <a href="/about">About DAH5</a> | <a href="/games">Games</a> | <a href="/tools">Tools</a> | <a href="/a-z">A - Z</a></p>
                <p>Made using my own <a href="https://www.staticphp.com" target="_blank">StaticPHP</a> project.<br>Source code available on <a href="https://github.com/DAH5/DAH5" target="_blank">GitHub</a> and <a href="https://gitlab.com/DAH5/DAH5" target="_blank">GitLab</a>.<br>Hosted on <a href="https://krystal.io/cloud/products/object-storage" target="_blank">Krystal Cloud Object Storage</a>.</p>
                <p class="text-muted">www.dah5.me.uk</p>
            </div>
        </footer>

        <?php if( isset( $metadata[ 'javascripts' ] ) && $metadata[ 'javascripts' ] ): ?>
            <?php $javascripts = explode( '::', $metadata[ 'javascripts' ] ); ?>

            <?php foreach( $javascripts as $javascript ): ?>
                <script src="<?php echo $javascript; ?>"></script>
            <?php endforeach; ?>
        <?php endif; ?>
    </body>
</html>
