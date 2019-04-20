<?php
function breakToNewline($string) {
    return preg_replace('/\<br(\s*)?\/?\>/i', "\n", $string);
}

function login_mail_send($To, $Subject, $Body, $FromAddress, $FromName ){

  $ch = curl_init();
  $apiKey = "[CONTACT KINGDOM WEB MINISTER FOR API KEY]";

  curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
  curl_setopt($ch, CURLOPT_USERPWD, 'api:'.$apiKey);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

  $plain = strip_tags(breakToNewline($message));

  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
  curl_setopt($ch, CURLOPT_URL, 'https://api.mailgun.net/v2/api.atlantia.sca.org/messages');

  curl_setopt($ch, CURLOPT_POSTFIELDS, array('from' => $FromAddress,
        'to' => $To,
        'subject' => $Subject,
        'html' => $Body,
        'text' => $Body));

  $j = json_decode(curl_exec($ch));

  $info = curl_getinfo($ch);

  if($info['http_code'] != 200)
        return false;

  curl_close($ch);

  return $j;
}

/*
// For testing
$responseMsg = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $doSend = login_mail_send($_POST["emailTo"], $_POST["emailSubject"], $_POST["emailMessage"], $_POST["emailFromAddress"], $_POST["emailFromName"]);
    if($doSend){
        $responseMsg = "Successfully sent email";
    }else{
        $responseMsg = "Failed to send email. Response JSON". $doSend;
    }
}
*/
?>
