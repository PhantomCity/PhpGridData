<?php

function GetGridValuesList($List, $AttrName)
{
  $lst = new Array();
  foreach ($List as $ListItem)
  if (isset($ListItem[$AttrName]))
     $lst[  $ListItem[$AttrName]  ] ++;
  return $lst;
}

function GetPreorderList($List, $Order)
{
  $res = new Array();
  foreach($Order as $oi)
  if (isset($List[ $oi ]))
    array_push($res, $oi);
  return $res;
}


?>
