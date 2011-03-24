<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php

require_once 'GoogleTranslator.class.php';

//Translate normally.
$translation = GoogleTranslator::translate('I am fine today.','en', 'cs');
echo $translator;

echo '<hr />';

//Batch translate to a source language
GoogleTranslator::setLanguages('en');
$translation = GoogleTranslator::translate('I am fine today.', false, 'cs'); echo $translation . '<br />';
$translation = GoogleTranslator::translate('I am fine today.', false, 'de'); echo $translation . '<br />';

echo '<hr />';

//Batch translate to a destination language. (Apologies for the Czech translation, could someone please fix this?)
GoogleTranslator::setLanguages(false,'en');
$translation = GoogleTranslator::translate('nazdar', 'cs'); echo $translation . '<br />';
$translation = GoogleTranslator::translate('hallo',  'de');  echo $translation . '<br />';

echo '<hr />';