<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (!empty($_POST['name']) && !empty($_POST['tel'])){
  if (isset($_POST['name'])) {
    if (!empty($_POST['name'])){
  $name = strip_tags($_POST['name']);
  $nameFieldset = "Sender name: ";
  }
}
 
if (isset($_POST['tel'])) {
  if (!empty($_POST['tel'])){
  $phone = strip_tags($_POST['tel']);
  $phoneFieldset = "Mobile phone number: ";
  }
}
if (isset($_POST['comment'])) {
  if (!empty($_POST['comment'])){
  $theme = strip_tags($_POST['comment']);
  $themeFieldset = "Message: ";
  }
}

// Bot token insert in varible $token Example: 1173502895:jDelLIfLPjlbSxTjSBIRBWDpJXHZjqtfyhk

$token = "6324057598:AAGQL9l3OEqelotYD-9IshMa3H3JGx4_MMA";

// Chat ID insert in varible $chat_id (without "-" sign) Example: 272660122

$chat_id = "6765826972";
$arr = array(
  $nameFieldset => $name,
  $phoneFieldset => $phone,
  $themeFieldset => $theme
);
foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
?>
