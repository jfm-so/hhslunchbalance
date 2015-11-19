<?php
$lines = file('cookie.txt');
$trows = '';
foreach($lines as $line) {
  if($line[0] != '#' && substr_count($line, "\t") == 6) {
    $tokens = explode("\t", $line);
    $tokens = array_map('trim', $tokens);
  }

}

$noodle = $tokens[6];

