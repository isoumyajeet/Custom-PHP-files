<?php
    // Place this file to server where you want to transfer the zip file or any other compressed file.
    set_time_limit(0);
    $cmd="wget http://targetfiledestination/filename.tar.gz";// Zip file place in server and transfer the file to the own server
    while (@ ob_end_flush()); // end all output buffers if any
    
    $proc = popen($cmd, 'r');
    echo '<pre>';
    while (!feof($proc))
    {
        echo fread($proc, 4096);
        @ flush();
    }
    echo '</pre>';
?>