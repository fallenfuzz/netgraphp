<?php

function switch_icon($os)
{
  if(!stristr($os, "switch"))
    return false;
  $my_dir = dirname(array_pop(get_included_files()));
  return $my_dir . "/switch.png";
} /* switch_icon */

function switch_description($os)
{
  if(!stristr($os, "switch"))
    return false;

  if(str_word_count($os) > 4)
  {
    /* Limit description length to 4 words */
    $arr = explode(" ", $os);
    return $arr[0] . " " . $arr[1] . " " . $arr[2] . " " . $arr[3];
  }
  return $os;
} /* switch_description */

function switch_port_side($os)
{
  if(!stristr($os, "switch"))
    return false;
  return true;
} /* switch_port_side */

$icon_functions[] = "switch_icon";
$description_functions[] = "switch_description";
$port_side_functions[] = "switch_port_side";

?>
