<?php

  $path = "/etc/init.d/ssh";

  // checks, templating, blah, blah, blah
  //$status = exec('/path/to/service/mumbled status')

  $status = exec("$path status");

  echo "$status";

  if ($status == "stopped") {
    echo "stopped";
  }
    // display start button, hook exec('mumbled stop') command to it

  if ($status == "running") {
    // display stop button, hook exec('mumbled start') command to it
    echo "started";
  }

 $output = shell_exec("etc/init.d/ssh restart");
  echo "<pre>$output</pre>";

?>
