
        <footer>
            <div class="container" style="text-align: center;">
                <p>Website owned and maintained by <a href="<?php echo DH_URL; ?>" target="_blank">David Hunter</a> since 2005.</p>
                <p><a href="/">DAH5 Home</a> | <a href="/about">About DAH5</a> | <a href="/games">Games</a> | <a href="/tools">Tools</a> | <a href="/a-z">A - Z</a></p>
                <p>Made using my own <a href="<?php echo STATICPHP_URL; ?>" target="_blank">StaticPHP</a> project.<br>Source code available on <a href="<?php echo GITHUB_URL; ?>" target="_blank">GitHub</a> and <a href="<?php echo GITLAB_URL; ?>" target="_blank">GitLab</a>.<br>Hosted on <a href="<?php echo KCOS_URL; ?>" target="_blank">Krystal Cloud Object Storage</a>.</p>
                <p class="text-muted">www.<?php echo DOMAIN; ?></p>
            </div>
        </footer>

        --- loop( metadata = "javascripts" ) ---
        <script type="text/javascript" src="--- loop.item ---"></script>
        --- endloop ---
    </body>
</html>
