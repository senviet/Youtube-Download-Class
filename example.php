<meta charset="UTF-8" />
<?php
/**
 * Project : YoutbeDownloader
 * User: thuytien
 * Date: 10/5/2014
 * Time: 11:37 PM
 */
require_once 'YoutbeDownloader.php';
$qualitys = YoutbeDownloader::getInstance()->getLink('CevxZvSJLk8');
if(is_string($qualitys))
{
    echo    $qualitys;
}
else {
    foreach ($qualitys as $video) {
        echo "<a href='" . $video['url'] . "'>" . $video['quality'] . "-" . $video['type'] . "</a></br>";
    }
}