<?php
  function containLetters($firstWord,$secondWord)
  {
    $s1 = str_split($firstWord);
    $low = strtolower($secondWord);
    $s2 = str_split($low);

    $hitung = count($s1);
    return count(array_intersect($s1, $s2)) == $hitung ? 'True' : 'False';
  
  }

  
  echo containLetters('brs','berkatsoft');
  echo '<br>';
  echo containLetters('brs','berkatco');
  echo '<br>';
  echo containLetters('brs','BERKATsoft');
?>