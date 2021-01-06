<?php

function get_word($i){
	$DICT = "american-english";
	$word = trim(shell_exec("head -n $i $DICT  | tail -n 1"));
	return $word;
}
?><?php

	$DICT = "american-english";
	$max_id = trim(str_replace(" american-english","",shell_exec("wc -l $DICT")));
    $shinzon=null;
    $danatra=null;
	while( is_null($shinzon) ) {
		$shinzon = get_word( rand(1,$max_id) );
	}
	while( is_null($danatra) ) {
		$danatra = get_word( rand(1,$max_id) );
	}
?>

<html>
<head>
<title>There's a word I want you to consider...</title>
<link rel="stylesheet" href="css/nemesis.css" type="text/css" />
</head>
<body>

<center><a href=""><img src="images/shinzon_considers_a_word.gif" alt="Shinzon Considers A Word" border="0" /></a></center><br/><br/>


<center>
<table border="0"><tr>
<td valign="top">
<img src="images/Shinzon.jpg" width="500px" height="300px" alt="Praetor Shinzon" title="Praetor Shinzon" /><br/>
<span class="line">There's a word I want you to consider:</span><br/>
</td>

<td>
<div id="spacer"></div>
</td>

<td valign="top">
<img src="images/Donatra.jpg" width="500px" height="300px" alt="Commander Donatra" title="Commander Donatra" /><br/>
<span class="line">Here's another word:</span><br/>
</td>

<tr>
<td> <span class="word"><?php echo $shinzon ?></span> </td>
<td></td>
<td> <span class="word"><?php echo $danatra?></span> </td>
</td>
</table>

<p><a href="">Consider Another Word With Shinzon and Donatra</a></p>

</center>

<br /><br />
<!--
<a href="http://www.blinkbox.com/Movies/30544/Star-Trek-Nemesis?Scene=34575" target="_blank">allegiance</a>
-->
<a href="wtf.html">WTF is this?</a>

<!-- Start of StatCounter Code for Default Guide -->
<!--
<script type="text/javascript">
var sc_project=8968587; 
var sc_invisible=1; 
var sc_security="10401ba7"; 
var scJsHost = (("https:" == document.location.protocol) ?
"https://secure." : "http://www.");
document.write("<sc"+"ript type='text/javascript' src='" +
scJsHost+
"statcounter.com/counter/counter.js'></"+"script>");
</script>
<noscript><div class="statcounter"><a title="website
statistics" href="http://statcounter.com/"
target="_blank"><img class="statcounter"
src="http://c.statcounter.com/8968587/0/10401ba7/1/"
alt="website statistics"></a></div></noscript>
-->
<!-- End of StatCounter Code for Default Guide -->
</body>
</html>

