<?php


namespace App\Notifications\channels;

require '../vendor/autoload.php';
use Kavenegar\KavenegarApi;
use Kavenegar\Exceptions\ApiException;
use Kavenegar\Exceptions\HttpException;
use Illuminate\Notifications\Notification;

class smsChannel
{
    public function send($notifiable , Notification $notification)
    {

            $data = $notification->toEramSms($notifiable);
            $token = $data ['text'];
            $receptor = $data['phone'];
            $API_KEY= "694D694F56506461493935486F4348554561757338316A71566E434A79783461384578664F4E65355061303D";
            $template= "verifyCode";
            $api = new KavenegarApi($API_KEY);
            $api->VerifyLookup($receptor, $token,0,0, $template);
            try {
                    $api->VerifyLookup($receptor, $token,0,0, $template);
                }
                catch(\Kavenegar\Exceptions\ApiException $e){
                    // در صورت? ?ه خروج? وب سرو?س 200 نباشد ا?ن خطا رخ م? دهد
                    echo $e->errorMessage();
                }
                catch(\Kavenegar\Exceptions\HttpException $e){
                    // در زمان? ?ه مش?ل? در برقرا? ارتباط با وب سرو?س وجود داشته باشد ا?ن خطا رخ م? دهد
                    echo $e->errorMessage();
                }
    }
}



