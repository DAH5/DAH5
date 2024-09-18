
        <footer>
            <div class="container">
                <p>Copyright &copy; <a href="https://david-hunter.net" target="_blank">David Hunter</a>. <?php include __DIR__ . DIRECTORY_SEPARATOR . 'poweredby.php'; ?></p>
                <p><a href="/">DAH5 Home</a> | <a href="/about">About DAH5</a> | <a href="/games">Games</a> | <a href="/tools">Tools</a> | <a href="/a-z">A - Z</a></p>
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
