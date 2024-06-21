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

<video style="width: 100%; aspect-radio: 16 / 9;" controls preload="none" poster="/assets/images/analogueradio--- metadata.clip-thumbnail-uri ---">
    <source src="https://videos.storage.dah5.me.uk/analogueradio--- metadata.clip-storage-uri ---" type="video/mp4">
</video>
