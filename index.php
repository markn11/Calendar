<?php
/*

 * To change this license header, choose License Headers in Project Properties.

 * To change this template file, choose Tools | Templates

 */
echo "<p>Month Of 31 Days</p>";

CalendarWithStartDayAndNumDays(0, 31);




function Month() {
  echo "<table>";
  
  
  echo "<tr>";
  
  
  for ($D = 1; $D < 31; $D++) {
      
    echo "<td style='text-align:left; width:10px; height:10px; border: 2.5px solid red; margin: 2px;'>" . $D . "</td>";
    if ($D % 7 == 0) {
        
      echo "</tr>";
      
      echo "<tr>";
      
    }
    
  }
  
  echo "</tr>";
  
  echo "</table>";

  
    }

function CalendarWithStartDayAndNumDays($FirstDay, $MonThruFri) {
    
  echo "<table class='floater'>";
  
  echo "<tr>";
  
  
  for ($D = 1; $D < $FirstDay; $D++) {
      
    echo "<td style='text-align:left; width:10px; height:10px; border: 2.5px solid red; margin: 2px;'>" . $D . "</td>";
    
  }
  
  $DayOfWeek = $FirstDay;
  
  for ($D = 1; $D <= $MonThruFri; $D++) {
  
      echo "<td style='text-align:left; width:10px; height:10px; border: 2.5px solid red; margin: 2px;'>" . $D . "</td>";
    
      $DayOfWeek++;
    
      if ($DayOfWeek % 7 == 0) {
      
          echo "</tr>";
      
          echo "<tr>";
    }
  }
  
  echo "</tr>";
  
  echo "</table>";
}
?>
<div </div>
<img src="../adv/Screenshot (46).png" alt=""/>
<img src="../adv/Screenshot (47).png" alt=""/>