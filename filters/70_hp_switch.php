<?php

function hp_switch_icon($os)
{
  if(!stristr($os, "switch"))
    return false;
  $my_dir = dirname(array_pop(get_included_files()));
  if(!strncmp($os, "HP", 2))
    return $my_dir . "/hp.png";
  if(stristr($os, "ProCurve"))
    return $my_dir . "/hp.png";
  return false;
} /* hp_switch_icon */

function hp_switch_description($os)
{
   if((stristr($os, "switch")) &&
      ((!strncmp($os, "HP", 2)) || stristr($os, "ProCurve")))
   {
     $arr = explode(",", $os);
     if(stristr($arr[0], "switch"))
     {
       return $arr[0];
     }

     $arr = explode("  ", $os);
     if(isset($arr[1]) && stristr($arr[1], "switch"))
     {
       return $arr[1];
     }
   }
   return false;
} /* hp_switch_description */

/* No port_side function is needed, will be caught by 80_switch */

$icon_functions[] = "hp_switch_icon";
$description_functions[] = "hp_switch_description";

?>
