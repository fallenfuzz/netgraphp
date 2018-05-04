<?php

function default_icon($os)
{
  $my_dir = dirname(array_pop(get_included_files()));
  return $my_dir . "/default.png";
} /* default_icon */

function default_description($os)
{
  return $os;
} /* default_description */

$icon_functions[] = "default_icon";
$description_functions[] = "default_description";

?>
