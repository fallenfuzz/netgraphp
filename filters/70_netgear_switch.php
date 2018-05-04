<?php

function netgear_switch_icon($os)
{
  if(!stristr($os, "switch") || !stristr($os, "NetGear"))
    return false;
  $my_dir = dirname(array_pop(get_included_files()));
  return $my_dir . "/netgear.png";
} /* switch_icon */

/* Both port side and description will be caught by 80_switch */

$icon_functions[] = "netgear_switch_icon";

?>
