<?php
include "src/Smtp.php"

$mail = new gclinux\Smtper();

 $mail->setDebug(true); //do you want to output the debug information.是否输出调试信息

 $mail->setServer("smtp.gmail.com", "noreply@magiscriptor.com", "M@steR12!@"); //Setting the SMTP server without SSL. 无SSL的SMTP服务器设置

$mail->setServer("smtp.gmail.com", "noreply@magiscriptor.com", "M@steR12!@", 465, true); //Seeting the SMTP server with SSL .SSL的SMTP服务器设置

 $mail->setFrom("noreply@magiscriptor.com"); //Email Sender name 发送者

 $mail->setReceiver("usmansadiq@live.co.uk"); //Email reciver 接收者
//  $mail->setReceiver("XXXXX2@local"); //Email reciver,multiple calls will add recivers.多次调用会累计添加接受者
 
//  $mail->setCc("XXXX"); //Set CC .抄送
// $mail->setBcc("XXXXX"); //Set CC,multiple calls will append.多次调用会添加.

//  $mail->addAttachment("XXXX.png"); //Attachment 附件

//  $mail->addAttachment("XXXX.csv"); // 添加附件，多个附件，调用多次 

 $mail->setMail("from smtp ", "hello m seding from smtp"); //the titile and body 标题和内容

$mail->send();


?>