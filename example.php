<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php

require_once 'GoogleTranslator.class.php';

$translator = new GoogleTranslator('en', 'cs');

echo $translator->translate('I am fine today.');

