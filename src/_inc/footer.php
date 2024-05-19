

        <footer>
            <div class="w3-auto w3-padding w3-center">
                <nav class="w3-bar">
                    <a href="/" class="w3-bar-item"><img src="<?php echo IMAGES_URL; ?>/logos/dah5-logo-2024-alternate.png" class="w3-image" style="max-width: 90px;" alt="DAH5 Logo"></a>
                    <a href="/" class="w3-bar-item">DAH5 Home</a>
                    <a href="/about" class="w3-bar-item">About DAH5</a>
                    <a href="/analogueradio" class="w3-bar-item">Analogue Radio</a>
                    <a href="/staticphp" class="w3-bar-item">StaticPHP</a>
                    <a href="/staticly" class="w3-bar-item">Staticly</a>
                    <a href="/a-z" class="w3-bar-item">A-Z</a>
                </nav>
                
                <p>Unless otherwise stated, website and content is by <a href="/davidhunter">David Hunter</a>.</p>
            </div>
        </footer>
        
        <?php if( isset( $metadata['footer_scripts'] ) ): ?>
            <?php foreach( explode( "::", $metadata['footer_scripts'] ) as $script ): ?>
                <script type="text/javascript" src="<?php echo $script; ?>"></script>
            <?php endforeach; ?>
        <?php endif; ?>
    </body>
</html>
