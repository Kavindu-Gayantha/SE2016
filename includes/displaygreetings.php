<?php
  function display_greetings()
  {
    $hour = date('m/d/Y h:i:s a', time()); // give the hour of current time

    if($hour >=0 and $hour <=11)
    {
      echo "Good Morning ! ";
    }
    elseif($hour >=12 and $hour <=17)
    {
      echo "Good Afternoon ! ";
    }
    else
    {
      echo "Good Evening ! ";
    }
  }

 ?>
