Google Translator for PHP (c) David Grudl, 2010 (http://davidgrudl.com)


Introduction
------------

Google Translator for PHP is a very small and easy-to-use library for translating
text via Google Translator API.


Project at GitHub: http://github.com/dg/GoogleTranslator-php
Google Translator API documentation: http://code.google.com/apis/ajaxlanguage/documentation/reference.html
My PHP blog: http://phpfashion.com


Requirements
------------
- PHP (version 5 or better)
- cURL extension


Usage
-----

Create object providing source and destination language

	$translator = new GoogleTranslator('en', 'cs');

The translate() method translates text:

	echo $translator->translate('I am fine today.');




Files
-----
readme.txt                 - This file.
license.txt                - The license for this software (New BSD License).
GoogleTranslator.class.php - The core GoogleTranslator class source.
examples.php               - Example.
