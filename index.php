<?php

// $str = 'ahb acb cdg rer fsa aeb ngt aeb';

// $pattern = "/(a[a-z]+b)/";

// $response = preg_match_all($pattern, $str, $match);

// var_dump($response);

// print_r($match);

//------------------------------------------------------------------------------------------

// $str = 'A134BC450';

// $pattern = "/^[ABCEHKMOPTX]\d{3}[ABCEHKMOPTX]{2}(?<series>\d{2,3})$/";

// $response = preg_match($pattern, $str, $match);

// var_dump($response);

// print_r($match['series']);

//------------------------------------------------------------------------------------------

// 3. Дана строка 'aba aca aea abba adca abea'. 
// Напишите регулярку, которая найдет строки abba и abea, не захватив adca.


// $str = 'aba aca aea abba adca abea';

// $pattern = "/a[a-z][^c]a/";

// $response = preg_match_all($pattern, $str, $match);

// var_dump($response);

// print_r($match);
//------------------------------------------------------------------------------------------

// 4. Дана строка 'aa aba abba abbba abca abea'. 
// Напишите регулярку, которая найдет строки aba, abba, abbba по шаблону: буква 'a', 
// буква 'b' любое количество раз, буква 'a'.


// $str = 'aba aca aea abba abbba adca abea';

// $pattern = "/ab+a/";

// $response = preg_match_all($pattern, $str, $match);

// var_dump($response);

// print_r($match);

//------------------------------------------------------------------------------------------

// 5. Дана строка 'aa aba abba abbba abca abea'. 
// Напишите регулярку, которая найдет строки aa, aba, abba, abbba по шаблону: буква 'a', 
// буква 'b' любое количество раз (в том числе ниодного раза), буква 'a'.

// $str = 'aa aba aca aea abba abbba adca abea';

// $pattern = "/a[b]{0,}a/";

// $response = preg_match_all($pattern, $str, $match);

// var_dump($response);

// print_r($match);

//------------------------------------------------------------------------------------------

// $str = 'Текст<a href=”mailto:abc@def.ru”>Написать ответ</a>';

// $reg = "/[a-z0-9._-]+@[a-z0-9._-]+\.[a-z0-9._-]{2,3}+/ui";

// reg_print($str,$reg);

// function reg_print($str, $reg){
//   echo "\033[90m------------------------------------------------" . PHP_EOL;
//   echo "\033[33m$str" . PHP_EOL;
//   echo "\033[96m$reg" . PHP_EOL;
//   echo "\033[3m";
//   $response = preg_match_all ($reg, $str, $match);
//   echo "\033[39m". PHP_EOL;
//   echo $response ? "\033[32mPattern matched" : "\033[31m Pattern not matched";
//   echo "\033[39m". PHP_EOL;
//   echo "\033[92m". PHP_EOL;
//   print_r($match);
//   echo "\033[39m". PHP_EOL;
// }


//------------------------------------------------------------------------------------------ Задача 3

// $str = 'Найти номер телефона в тексте.
// «Абонент +7(123)456-78-90 звонил вам 5 раз. Последний – 20.01.2012 в 10:00»';
//
// $pattern = "/\+\d+\(?\d{3}\)?\d{3}\-\d{2}\-\d{2}/ui";
//
// $response = preg_match($pattern, $str, $match);
//
// var_dump($response);
//
// print_r($match);

//------------------------------------------------------------------------------------------ Задача 4

$str = ['https://proglib.io/',
  'this is not a URL',
  'https://google.com/',
  '123461',
  'https://proglib.io/?s=google',
  'http://not a valid url',
  'abc http://invalid.url/'];

$reg = "/^(https?:\/\/)?([a-z0-9._-]+\.)+([a-z]{2,3})+\/?(\?[a-z]\=[a-z]+)?/i";

foreach($str as $item){
  reg_print($item, $reg);
}

 function reg_print($str, $reg){
   echo "\033[90m------------------------------------------------" . PHP_EOL;
   echo "\033[33m$str" . PHP_EOL;
   echo "\033[96m$reg" . PHP_EOL;
   echo "\033[3m";
   $response = preg_match_all ($reg, $str, $match);
   echo "\033[39m". PHP_EOL;
   echo $response ? "\033[32mPattern matched" : "\033[31m Pattern not matched";
   echo "\033[39m". PHP_EOL;
   echo "\033[92m". PHP_EOL;
   print_r($match);
   echo "\033[39m". PHP_EOL;
 }

//------------------------------------------------------------------------------------------ Задача 5


// $str = 'Написать регулярное выражение для IP адреса v4 123.123.123.123
// (Усложнено выражение не должно принимать строки со значениями выше 255 в разряде)';
//
// $reg = "/[0-2][0-5][0-5]\.[0-2][0-5][0-5]\.[0-2][0-5][0-5]\.[0-2][0-5][0-5]/";
//
// reg_print($str,$reg);
//
// function reg_print($str, $reg){
//   echo "\033[90m------------------------------------------------" . PHP_EOL;
//   echo "\033[33m$str" . PHP_EOL;
//   echo "\033[96m$reg" . PHP_EOL;
//   echo "\033[3m";
//   $response = preg_match_all ($reg, $str, $match);
//   echo "\033[39m". PHP_EOL;
//   echo $response ? "\033[32mPattern matched" : "\033[31m Pattern not matched";
//   echo "\033[39m". PHP_EOL;
//   echo "\033[92m". PHP_EOL;
//   print_r($match);
//   echo "\033[39m". PHP_EOL;
// }

//------------------------------------------------------------------------------------------ Задача 6

// Создание аббревиатуры (получить массив с первыми буквами)
//$str ='Московский физико-технический институт'
//$str ='Московский социально-педагогический институт'
// $str ='Российский университет дружбы народов';

// $reg = "/\b\w/ui";

// reg_print($str,$reg);

// function reg_print($str, $reg){
//   echo "\033[90m------------------------------------------------" . PHP_EOL;
//   echo "\033[33m$str" . PHP_EOL;
//   echo "\033[96m$reg" . PHP_EOL;
//   echo "\033[3m";
//   $response = preg_match_all ($reg, $str, $match);
//   echo "\033[39m". PHP_EOL;
//   echo $response ? "\033[32mPattern matched" : "\033[31m Pattern not matched";
//   echo "\033[39m". PHP_EOL;
//   echo "\033[92m". PHP_EOL;
//   print_r($match);
//   echo "\033[39m". PHP_EOL;
// }

//------------------------------------------------------------------------------------------