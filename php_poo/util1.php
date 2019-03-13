<?php
require_once('Animal1.class.php');
require_once('Chat.class.php');

$chat1 = new Chat();
$chat1->nom ="Joe";
$chat1->race ="siamois";

echo'le nom du chat est '.$chat1->nom.'et sa race est '.$chat1->race;