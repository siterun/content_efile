<meta http-equiv="refresh" content="5">
<?php

require_once('inc/chat.php');
$oSimpleChat = new SimpleChat();
echo $oSimpleChat->getMessages();

?>