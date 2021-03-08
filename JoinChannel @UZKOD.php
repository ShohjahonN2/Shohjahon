<?php

//    ___________________________________///
//      ÷÷÷÷÷÷÷ FAST CODER ÷÷÷÷÷÷÷÷  ///
//      ÷÷÷÷÷÷÷÷ PHP TEAM ÷÷÷÷÷÷÷÷  ///
//      ÷÷÷÷÷÷÷ @Fast_Coder ÷÷÷÷÷÷÷  ///
//     ÷÷÷ @Rustam_Hikmatullayev ÷÷÷ ///
//    __________________________________///




ob_start();
define("UZKOD","***"); // 1696622702:AAH4szyHdidoKIb4Yl763VfnFDKWD2xiYAo
$admin = "***"; // 1419509406
$channel = "***"; // @tarix_quiz1 
// Bot siz yozgan kanalda admin bo'lishi kerak aks holda muammolar chiqishi mumkin!

function bot($method,$datas=[]){
$url = http_build_query($datas);
return json_decode(file_get_contents("https://api.telegram.org/bot".UZKOD."/".$method."?".$url));
}

// @KoderNet tomonidan @UZKOD kanali orqali tarqatildi.

$uzkod = json_decode(file_get_contents("php://input"));
$message = $uzkod->message;
$mid = $message->message_id;
$cid = $message->chat->id;
$tx = $message->text;
$uid = $message->from->id;
$name = str_replace(["[","]","(",")","*","_","`"],["","","","","","",""],$message->from->first_name);

if (isset($tx)){
$get = bot ('getChatMember',[
'chat_id'=> $channel,
'user_id'=> $uid,
])->result->status;
if ($get == "administrator" or $get == "creator" or $get == "member"){
//

// Bu yerga xoxlagan funksiyangizni qo'sha olasiz faqat shu yerga!

//
}else{
$res = bot ('getchat', [
'chat_id'=> $channel,
])->result->username;
bot ('sendmessage',[
'chat_id'=> $cid,
'text'=>"Siz @$res kanalimizga a'zo bo'lishingiz kerak!",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"➕ A'zo bo'lish",'url'=>"t.me/".$res]]
]
])
]);
}
}

// @KoderNet tomonidan @UZKOD kanali orqali tarqatildi.
?>
