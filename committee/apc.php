<?php
 $title = "SIGCSE 2012 - Home";
 $onload = "pageLoad(null, 'committee');";
 include("../parts/top.php");
?>
<div class="SectionHeader"><div class="Full">
<h2>SIGCSE 2012 Program Committee</h2>
</div></div>
<table class="FadeTable" cellspacing="0" cellpadding="0">
  <tr class="header"><td colspan="2" align="center">
	<a href="index.php">PROGRAM COMMITTEE</a> | <a href="apc.php">ASSOCIATE PROGRAM CHAIRS</a></td></tr> 
  <tr><td align="left" valign="top">
<p><strong>Associate Program Chairs</strong></p>
  </td><td>&nbsp;</td></tr>

<tr><td valign="top" align="left"><p>Doug Baldwin<br/>SUNY Geneseo<br/><script>write_email("baldwin", "geneseo.edu");</script></p></td><td valign="top" align="left">&nbsp;</td></tr>
<tr><td valign="top" align="left"><p>Joel Adams<br/>Calvin College<br/><script>write_email("adams", "calvin.edu");</script></p></td><td valign="top" align="left">&nbsp;</td></tr>
<tr><td valign="top" align="left"><p>Tim Fossum<br/>SUNY Potsdam<br/><script>write_email("fossumtv", "potsdam.edu");</script></p></td><td valign="top" align="left">&nbsp;</td></tr>
<tr><td valign="top" align="left"><p>Nancy Kinnersley<br/>University of Kansas<br/><script>write_email("kinners", "eecs.ku.edu");</script></p></td><td valign="top" align="left">&nbsp;</td></tr>
<tr><td valign="top" align="left"><p>Sheila Castaneda<br/>Clarke College<br/><script>write_email("sheila.castaneda", "clarke.edu");</script></p></td><td valign="top" align="left">&nbsp;</td></tr>
<tr><td valign="top" align="left"><p>Lori Pollock<br/>University of Delaware<br/><script>write_email("pollock", "cis.udel.edu");</script></p></td><td valign="top" align="left">&nbsp;</td></tr>
<tr><td valign="top" align="left"><p>Tim Bell<br/>University of Canterbury<br/><script>write_email("tim.bell", "canterbury.ac.nz");</script></p></td><td valign="top" align="left">&nbsp;</td></tr>
<tr><td valign="top" align="left"><p>Sami Rollins<br/>University of San Francisco<br/><script>write_email("srollins", "cs.usfca.edu");</script></p></td><td valign="top" align="left">&nbsp;</td></tr>
<tr><td valign="top" align="left"><p>Sherri Goings<br/>Carleton College<br/><script>write_email("sgoings", "carleton.edu");</script></p></td><td valign="top" align="left">&nbsp;</td></tr>

</table>
<?php
 $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
 $mainPage = true;
 include("../parts/bottom.php");
?>