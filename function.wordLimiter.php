<?php 
  function maxtitle($title) {
    if (isset($title)):
      $title = (string) $title;
      $textarr = str_split($title);
      $count = 0;
      foreach ($textarr as $letter) :
        $count++;
        if (empty($output)):
          $output = $letter;
        else :
          $output = $output.$letter;
        endif;
        if ($count == 97) :
          $output = $output."...";
          break;
        endif;
      endforeach;
      return $output;
    else:
      return 'No string given!';
    endif;
  }