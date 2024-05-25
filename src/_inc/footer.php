

        <div class="footer">
            <div class="container padding-16 text-center">
                <div class="inline-block-parent middle footer-nav">
                    <a href="/" class="w3-bar-item logo"><img src="<?php echo IMAGES_URL; ?>/logos/dah5-logo-2024-alternate-lightgraybg.png" alt="DAH5 Logo"></a>
                    &nbsp;
                    <a href="/" class="w3-bar-item">DAH5 Home</a>
                    &nbsp;
                    <a href="/about" class="w3-bar-item">About DAH5</a>
                    &nbsp;
                    <a href="/analogueradio" class="w3-bar-item">Analogue Radio</a>
                    &nbsp;
                    <a href="/staticphp" class="w3-bar-item">StaticPHP</a>
                    &nbsp;
                    <a href="/staticly" class="w3-bar-item">Staticly</a>
                    &nbsp;
                    <a href="/a-z" class="w3-bar-item">A-Z</a>
                </div>
                
                <p>Unless otherwise stated, website and content is by <a href="/davidhunter">David Hunter</a>.</p>
            </div>
        </div>
        
        <?php if( isset( $metadata['footer_scripts'] ) ): ?>
            <?php foreach( explode( "::", $metadata['footer_scripts'] ) as $script ): ?>
                <script type="text/javascript" src="<?php echo $script; ?>"></script>
            <?php endforeach; ?>
        <?php endif; ?>
    </body>
</html>
