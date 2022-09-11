# RenxingPushSDK-PHP

任性推官方PHP SDK

## How to use:

```injectablephp
<?php
require 'RenxingPush.php';
$renxingPush = new RenxingPush("cipher");
$result = $renxingPush->send(
    "Hello World!",
    RenxingPush::APP_TYPE_QQ,
    "1277489864"
);
var_dump($result);
```
