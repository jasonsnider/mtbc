<?php
/**
 * Greets the user with the current date and time
 */

 $date = new DateTime();

 $formattedDate = $date->format('Y-m-d H:i:s');

 echo "Hello World it is {$formattedDate}";