<?php

$row_[email] = "girish@musicgoeson.com";

  $message = '';
  $message .= "<STYLE type=\"text/css\">\n<!--\na {color:\"#CC3300\"; text-decoration:\"none\";}\na:visited {color:\"#E68164\"; text-decoration:\"none\";}\na:hover {color:\"#006699\"; text-decoration:\"underline\";}\ninput {background-color:\"#006699\"; font-family:\"verdana\"; color:\"white\"; font-size:\"11px\";}\nselect {background-color:\"#006699\"; font-family:\"verdana\"; color:\"white\"; font-size:\"11px\";}\ntextarea {background-color:\"#006699\"; font-family:\"verdana\"; color:\"white\"; font-size:\"11px\";}\n.linked_img {border: \"#000000\"; border-style: \"solid\"; border-width: \"1,4\";}\n-->\n</STYLE>\n\n<SCRIPT LANGUAGE=\"JavaScript\">\n<!-- Begin\nfunction OpenWindow(url, width, height)\n{\n window.open(url, 'kr943j509jt', config='height=' + height + ',width=' + width + ',toolbar=no,menubar=no,scrollbars=no,resizable=no,location=no,directories=no,status=no');\n}\n// End -->\n</SCRIPT>\n\n<base href=\"http://www.musicgoeson.com/\">\n\n<p align=\"justify\">\n\n<font face=\"verdana\" size=\"1\">";
  $message .= $message_html;
  $message .= "<br><br><hr align=\"left\" width=\"25%\"><font size=\"1\">To change your subscription details/lists or to unsubscribe, please visit <a href=\"/mail/manager/\">www.musicgoeson.com/mail/manager/</a></font></font>\n\n</p>";

  mail("".$row_[name]." <".$row_[email].">", $subject, $message, "From: Music Goes On <mgo@musicgoeson.com>\nContent-Type: text/html; charset=iso-8859-1");

?>