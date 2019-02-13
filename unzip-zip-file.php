<?php
    set_time_limit(0);
        
    $zip = new ZipArchive;
    if ($zip->open('filename-clean.zip') === TRUE) { // give the name of the zip file that you need to be unzip
        //$zip->extractTo(' /web/htdocs/www.targetsiteurl.com/home/targetfolder');// give the path name where the zip file need to be unzip
        //OR
        $zip->extractTo(dirname(__FILE__));
        $zip->close();
        echo 'ok';
    } else {
        echo 'failed';
    }
?>
