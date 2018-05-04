<?php

function linux_icon($os)
{
  if(!strstr($os, "Linux"))
    return false;
  $my_dir = dirname(array_pop(get_included_files()));
  return $my_dir . "/linux.png";
} /* linux_icon */

function linux_description($os)
{
  if(!strstr($os, "Linux"))
    return false;

  if(strpos($os, "Linux") > 5)
  {
    /* Get the pretty name that lldpd provides from /etc/os-release */
    return substr($os, 0, strpos($os, "Linux")-1);
  }
  else
  {
    /* Only output kernel name and version */
    $arr = explode(" ", strstr($os, "Linux"));
    return $arr[0] . " " . $arr[1];
  }
  return $os;
} /* linux_description */

$icon_functions[] = "linux_icon";
$description_functions[] = "linux_description";

?>
