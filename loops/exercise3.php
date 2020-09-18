<?php declare(strict_types=1);

$word1 = (string)readline("Enter first word: ");
$word2 = (string)readline("Enter second word: ");

echo $word1 . str_repeat(".", 30 - strlen($word2.$word1)) . $word2;
