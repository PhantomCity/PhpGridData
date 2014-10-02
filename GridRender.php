<?php

function GetGridValuesList($List, $AttrName)
{
  $lst = new Array();
  foreach ($List as $ListItem)
  if (isset($ListItem[$AttrName]))
     $lst[  $ListItem[$AttrName]  ] ++;
  return $lst;
}

?>
