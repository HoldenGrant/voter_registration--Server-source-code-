
<?php

class DownloadManager {
    
    function download($url) {
        $file_url = $url;
        header('Content-Type: application/pdf');
        header("Content-Transfer-Encoding: Binary"); 
        header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\""); 
        readfile($file_url); // do the double-download-dance (dirty but worky)
    }
}

$dm = new DownloadManager();

$dm->download($_GET['file']);

?>