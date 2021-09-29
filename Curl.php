<?php


class Curl
{
    public $token = '852173469:AAGs7sIsDu2eyEVTAUMIkHyrKyMrPAfbMmk';
    public $baseUrl = 'https://api.telegram.org/bot';

    public function send($data, $method){
        $data['parse_mode'] = 'html';
        $ch = curl_init($this->baseUrl.$this->token.'/'.$method);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $res = curl_exec($ch);
        curl_close($ch);
        return $res;
    }
}