<?php
if($_REQUEST['action'] == 'inquiry'){
  $str = "";
  $str.="Title: ".$_REQUEST['title']."\n";
  $str.="Email: ".$_REQUEST['email']."\n";
  $str.="Message: ".$_REQUEST['note']."\n";
  $headers = 'From: noreply@kiranxray.com' . "\r\n" .
    'Cc: raju.solanki@kiranxray.com' . "\r\n";
    'Reply-To: noreply@kiranxray.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
  mail('raju.solanki@gmail.com', 'Inquiry', $str, $headers);
  $result = array('error'=>0, 'message'=>'Inquiry has been sent successfully.');
  echo json_encode($result);
}
?>