<?php

class RenxingPush
{
    const BASE_URL = "https://push.renxing.cc/api";
    const SEND_URL = "/msg/send/";
    const APP_TYPE_QQ = "qq";
    const APP_TYPE_QQ_GROUP = "qq_group";
    const APP_TYPE_TELEGRAM = "telegram";
    private static $cipher;

    /**
     * @param $cipher
     */
    public function __construct($cipher)
    {
        self::$cipher = $cipher;
    }

    /**
     * 发送消息
     * @param $message
     * @param $appType
     * @param $to
     * @param $formQQBot
     * @return bool|array
     */
    public static function send($message, $appType, $to, $formQQBot = null): bool|array
    {
        $data = array(
            "content" => $message,
            "meta" => array(
                "type" => $appType,
                "data" => $to,
                "qqBot" => $formQQBot
            ));
        $data = json_encode($data);
        $url = self::SEND_URL . self::$cipher;
        return self::post($url, $data);
    }

    /**
     * POST一个json请求
     * @param $url
     * @param $data
     * @return bool|array
     */
    public static function post($url, $data): bool|array
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_URL, self::BASE_URL . $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data)
        ));
        $result = curl_exec($ch);
        curl_close($ch);
        return $result ? json_decode($result, true) : $result;
    }


}
