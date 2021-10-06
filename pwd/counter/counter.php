<?php
$filecounter="counter.txt";
$fl=fopen($filecounter,"r+");

$hit=fread($fl,filesize($filecounter));

echo("<table widht=250 align=center border=1 cellspacing=0 cllpadding=0 bordercolor=#000FF><tr>");
echo("<td widht=250 valign=middle align=center");
echo("<font face=verdana size=2 color=#FF0000><b>");
echo ("anda pengunjung ke : ");
echo ($hit);
echo ("</b></font>");
echo ("</td>");
echo("</tr></table>");

fclose($fl);

$fl=fopen($filecounter,"w+");
$hit=$hit+1;

fwrite($fl,$hit,strlen($hit));

fclose($fl);
?>