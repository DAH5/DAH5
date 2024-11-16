<div class="w3-padding-16">
    <div class="w3-xlarge">--- metadata.clip-title ---</div>
    <div><b>Duration:</b> --- metadata.clip-duration ---</div>
    <div>
        <?php
        
        if( strpos( $path_to_output_file, DIRECTORY_SEPARATOR . 'bbc-radio-4' . DIRECTORY_SEPARATOR ) )
        {
            if( strpos( $path_to_output_file, DIRECTORY_SEPARATOR . '198kHz-LW' . DIRECTORY_SEPARATOR ) )
            {
                echo '<a href="../../HD/' . substr( $path_to_output_file, strrpos( $path_to_output_file, DIRECTORY_SEPARATOR ) + 1, -5 ) . '/">Watch HD Version</a>';
            }
            else
            {
                echo '<a href="../../198kHz-LW/' . substr( $path_to_output_file, strrpos( $path_to_output_file, DIRECTORY_SEPARATOR ) + 1, -5 ) . '/">Watch Analogue Version</a>';
            }
        }
        else
        {
            echo $path_to_output_file;
        }
        
        ?></div>
</div>

<?php include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '_inc' . DIRECTORY_SEPARATOR . 'video-player.php'; ?>
