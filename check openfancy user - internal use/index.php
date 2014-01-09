      <?php include('auth.php'); ?>
      <html>
      
 <!--Hi! schoen das du hier bist!
 Das ist das Skript um schnel ne Datenbankabfrage mit Login der neusten User zu machen.
 Nice anzugucken von unterwegs oder als Bigscreen Zuhause 
 Wenn du irgendetwas ueber das Script wissen willst, dann wende dich an info@btuwiki.de
 Copyright by Florian Boegge! I'm CEO, bitch! -->     
      
      
      
      
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>openfancy Live-Statistik!</title>
<!--meta http-equiv="refresh" content="30"-->
 <meta http-equiv="refresh" content="6" >
 <body>
      <?php      
        //echoscript "wirtten by Florian Bögge"
        //echo "first load database"
               
mysql_connect("SERVER", "DEIN MYAQL USERNAME","PASSWORD FOR MYSQL") or die ("Keine Verbindung moeglich");
mysql_select_db("DATENBANKNAME") or die ("Die Datenbank existiert nicht.");
    ?>  
     
        
     <p>

    <div style="background-color:#0099FF; width:100%; height:16px;">
    <span id="c1" style="font: bold 12px lucida grande; color: white;">  openfancy Plattform Live-Statistiken    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?php   
$datum = date("d.m.Y");
$uhrzeit = date("H:i");
echo $datum," - ",$uhrzeit," Uhr"; 
?>
 <form action="logout.php" method="post">
   <input type="submit" value="Abmelden" />
  </form></span>
    
    </div>
       <div class="wrapper">
    <p>
     <center>
     
     <table border="0">
  <tr>
    <th>
     <span id="c1" style="font: bold 12px lucida grande; color: #0099FF;">registrierte User</span>
     </th>
     <th>
     </th>
     <th>  <span id="c1" style="font: bold 12px lucida grande; color: #0099FF;">Seitenklicks von registrierten Usern</span>
     </th>
     <p>
     <tr>
     <td><span id="c1" style="font: bold 160px arial; color: black"> 
    <?php     // show me the users bitch!
  $abfrageuser = "SELECT ss_users FROM site_stats";
$ergebnisuser = mysql_query($abfrageuser);
while($row = mysql_fetch_object($ergebnisuser))
   {
   echo "$row->ss_users";
   }
    ?> </span></td>
    <td><div style="background-color:#0099FF; width:180px; height:0px;"></td>
    <td><span id="c1" style="font: bold 120px arial; color: black;">     
    <?php           // show me the total views
  $abfrageuser = "SELECT ss_total_views FROM site_stats";
$ergebnisuser = mysql_query($abfrageuser);
while($row = mysql_fetch_object($ergebnisuser))
   {
   echo "$row->ss_total_views";
   }
    ?></span>   
    </td>
    </table>
   <p>
  
      <table border="0">
  <tr>
    <th><span id="c1" style="font: bold 12px lucida grande; color: #0099FF;">die neusten User</span>
    </th>
    <th><span id="c1" style="font: bold 12px lucida grande; color: #0099FF;">Wer ist zur Zeit online?</span>
    <p></th>
    <th><span id="c1" style="font: bold 12px lucida grande; color: #0099FF;">User ohne g&uuml;ltige Email-Adresse (<?php
        $result = mysql_query("SELECT user_name, user_email FROM user WHERE user_email LIKE '' order BY user_name"); 
$num_rows = mysql_num_rows($result); 
  {
// Display the results 
echo $num_rows; 
      }
       ?>)</span>
    <p></th>
  </tr>
  <tr>
    <td><p>
    <center><span id="c1" style="font: bold 15px arial; color: black;">     
    <?php           // show me the total views
  $abfrageuser = "SELECT user_id, user_name, user_email  FROM user order by user_id DESC LIMIT 7";
$ergebnisuser = mysql_query($abfrageuser);
while($row = mysql_fetch_object($ergebnisuser))
   {
   echo "[$row->user_name - $row->user_email] <p>";
   }
    ?></span><center></td>
    
    <td> <center><span id="c1" style="font: 15px arial; color: black;">     
    <?php           // show me the total views
  $abfrageuser = "SELECT user_touched, user_name, user_email  FROM user order by user_touched DESC LIMIT 7";
$ergebnisuser = mysql_query($abfrageuser);
while($row = mysql_fetch_object($ergebnisuser))
   {
   echo "[$row->user_name - $row->user_email] <p>";
   }
    ?></span></center></td>
    
    <td><center><span id="c1" style="font: bold 15px arial; color: black;">     
    <?php           // show me the total views
  $abfrageuser = "SELECT user_name, user_email FROM user WHERE user_email NOT LIKE '%tu-cottbus%' order BY RAND() LIMIT 7";
$ergebnisuser = mysql_query($abfrageuser);                               
while($row = mysql_fetch_object($ergebnisuser))
   {
   echo "[$row->user_name  $row->user_email] <p>";
   }
    
    ?></span></center></td>
  </tr>
  </table>       

     
  </div>
 <div class="footer"><div style="background-color:#0099FF; width:100%; height:16px;">
 <span id="c1" style="font: bold 12px lucida grande; color: white;">
 &copy; <?php echo(date("Y")); ?> <b>Eine Florian B&ouml;gge Produktion</b>
  </span></div></div></center>
  </body>
</html>

 



