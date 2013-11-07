<?php
$verbindung = mysql_connect ('localhost', 'root', 'root')
or die ("Keine Verbindung zur Datenbank m&ouml;glich. Benutzername oder Passwort sind falsch!");

mysql_select_db('podwichteln')
or die ("Die Datenbank existiert nicht.");


if ($_POST['submit']) { 

//vars
$date	 		= date("d.m.Y") . ' - ' . date("H:i");
$key		 	= mysql_real_escape_string(md5($_POST['podname']));
$podname 		= mysql_real_escape_string(htmlspecialchars($_POST['podname']));
$podurl 		= mysql_real_escape_string(htmlspecialchars($_POST['podurl']));
$ziplink 		= mysql_real_escape_string(htmlspecialchars($_POST['ziplink']));
$username	 	= mysql_real_escape_string(htmlspecialchars($_POST['username']));
$mail	  	 	= mysql_real_escape_string(htmlspecialchars($_POST['mail']));
$wichtel 		= mysql_real_escape_string(htmlspecialchars('null'));


if(htmlspecialchars($_POST['username']) != '') {
	$user_schon_da = mysql_query("Select * From `podwichtel_user` Where username = '$username'");
	$user_ist_da = mysql_num_rows($user_schon_da); // Anzahl der gefundenen Zeilen ausgeben    
    if($user_ist_da == 0){ 

if(htmlspecialchars($_POST['podname']) != '') {
	$podcast_schon_da = mysql_query("Select * From `podwichtel_user` Where podname = '$podname'");
	$podcast_ist_da = mysql_num_rows($podcast_schon_da); // Anzahl der gefundenen Zeilen ausgeben    
    if($podcast_ist_da == 0){ 

if(htmlspecialchars($_POST['podurl']) != '') {
	$podcast_url_schon_da = mysql_query("Select * From `podwichtel_user` Where podurl = '$podurl'");
	$podcast_url_ist_da = mysql_num_rows($podcast_url_schon_da); // Anzahl der gefundenen Zeilen ausgeben    
    if($podcast_url_ist_da == 0){ 

if(htmlspecialchars($_POST['ziplink']) != '') {
	$ziplink_schon_da = mysql_query("Select * From `podwichtel_user` Where ziplink = '$ziplink'");
	$ziplink_ist_da = mysql_num_rows($ziplink_schon_da); // Anzahl der gefundenen Zeilen ausgeben    
    if($ziplink_ist_da == 0){ 

if(htmlspecialchars($_POST['mail']) != '') {	
	$mail_schon_da = mysql_query("Select * From `podwichtel_user` Where mail = '$mail'");
	$mail_ist_da = mysql_num_rows($mail_schon_da); // Anzahl der gefundenen Zeilen ausgeben    
    if($mail_ist_da == 0){ 


		//ausführen
		if($register == $register){
			
			//Save DB
			$register = mysql_query("
				INSERT INTO `podwichtel_user` 
				(`date`, `key`, `podname`, `podurl`, `ziplink`, `username`, `mail`, `wichtel`) 
				VALUES 
				('$date', '$key', '$podname', '$podurl', '$ziplink', '$username', '$mail', '$wichtel')"); 
	
			echo 'Erfolgreich Angemeldet!';
	
		} else { echo 'Error: Speichern der Daten'; }
		

########## Abfragen ###################

	} else { echo 'Du hast mehrere Podcasts?'; } //Mail

} else { echo 'Wir benötigen schon eine E-Mail von dir, damit wir dir antworten können!'; } //!Mail

	} else { echo 'Aber wir haben doch schon eine Zipfile von dir?'; } //Zip

} else { echo 'Du hast vergessen einen Link zu deinem Zipfile einzugeben!'; } //!Zip

	} else { echo 'Du hast deinen Podcast schon eingereicht!'; } //podcast Link

} else { echo 'Du hast vergessen einen Link zu deinem Podcast einzugeben!'; } //!Podcast url

	} else { echo 'Du hast deinen Podcast schon eingereicht!'; } //podcast Name

} else { echo 'Du hast vergessen den Namen deines Podcasts einzugeben!'; } //!Podcast Name

	} else { echo 'Du hast dich schon angemeldet!'; } //Username	

} else { echo 'Du hast vergessen deinen Namen einzugeben!'; } //!Unsername

//End
}


?> 
<form action="register.php" method="post"> 

  
<label>Username</label><br>
<input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>" size="20" maxlength="25" />  <br /> 

<label>Podcast URL</label><br>
<input type="text" name="podurl" value="<?php echo htmlspecialchars($podurl); ?>" size="20" maxlength="25" />  <br /> 

<label>Podcast Name</label><br>
<input type="text" name="podname" value="<?php echo htmlspecialchars($podname); ?>" size="20" maxlength="25" />  <br /> 

<label>Zip URL</label><br>
<input type="text" name="ziplink" value="<?php echo htmlspecialchars($ziplink); ?>" size="20" maxlength="25" />  <br /> 

<label>Email</label><br>
<input type="text" name="mail" value="<?php echo htmlspecialchars($mail); ?>" size="20" maxlength="25" />  <br /> 

<br>
<input type="Submit" name="submit" value="Register" /> 

</form>