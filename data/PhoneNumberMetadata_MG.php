<?php
return array (
  'generalDesc' => 
  array (
    'NationalNumberPattern' => '[23]\\d{8}',
    'PossibleNumberPattern' => '\\d{7,9}',
    'ExampleNumber' => '',
  ),
  'fixedLine' => 
  array (
    'NationalNumberPattern' => '
          20(?:
            2\\d{2}|
            4[47]\\d|
            5[3467]\\d|
            6[279]\\d|
            7(?:
              2[29]|
              [35]\\d
            )|
            8[268]\\d|
            9[245]\\d
          )\\d{4}
        ',
    'PossibleNumberPattern' => '\\d{7,9}',
    'ExampleNumber' => '202123456',
  ),
  'mobile' => 
  array (
    'NationalNumberPattern' => '
          3(?:
            [02-4]\\d|
            90
          )\\d{6}
        ',
    'PossibleNumberPattern' => '\\d{9}',
    'ExampleNumber' => '301234567',
  ),
  'tollFree' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
    'ExampleNumber' => '',
  ),
  'premiumRate' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
    'ExampleNumber' => '',
  ),
  'sharedCost' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
    'ExampleNumber' => '',
  ),
  'noInternationalDialling' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
    'ExampleNumber' => '',
  ),
  'id' => 'MG',
  'countryCode' => 261,
  'internationalPrefix' => '00',
  'nationalPrefix' => '0',
  'nationalPrefixForParsing' => '0',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' => 
  array (
    0 => 
    array (
      'pattern' => '([23]\\d)(\\d{2})(\\d{3})(\\d{2})',
      'format' => '$1 $2 $3 $4',
      'leadingDigitsPatterns' => 
      array (
      ),
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
    ),
  ),
  'intlNumberFormat' => 
  array (
  ),
  'mainCountryForCode' => NULL,
  'leadingZeroPossible' => NULL,
);