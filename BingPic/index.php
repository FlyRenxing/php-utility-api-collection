<?php
// 检查 PHP 版本
if (version_compare(PHP_VERSION, '5.2.0', '<')) {
    exit('PHP 版本不得低于 5.2.0，可你正在使用的是 ' . PHP_VERSION);
}

function search($daysAgoQuery, $sizeQuery)
{
    // 检查是否使用 URL 指定时间
    if ($_GET["daysago"] != null) {
        $data = req($daysAgoQuery);
    } else {
        $data = req(0);
    }
    // 返回 URL
    return "https://cn.bing.com" . $data['images'][0]['urlbase'] . "_" . $sizeQuery . ".jpg";
}

// 获取 Bing 今日美图的图片地址
function req($daysAgo)
{
    return json_decode(file_get_contents("https://cn.bing.com/HPImageArchive.aspx?format=js&idx=" . $daysAgo . "&n=1"), true);
}

$sizeEnum = array(
    '1920x1200',
    '1920x1080',
    '1366x768',
    '1280x768',
    '1024x768',
    '800x600',
    '800x480',
    '768x1280',
    '720x1280',
    '640x480',
    '480x800',
    '400x240',
    '320x240',
    '240x320'
);

$sizeQuery = $_GET["size"] != null && in_array($_GET["size"], $sizeEnum) ? $_GET["size"] : "1920x1080";
$daysAgoQuery = $_GET["daysago"];
$url = search($daysAgoQuery, $sizeQuery);
header("status: 302");
header("Location: $url");
die();
