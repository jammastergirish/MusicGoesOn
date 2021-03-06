<?php
include_once($HTTP_SERVER_VARS[DOCUMENT_ROOT]."/inc/php_header.inc");
$section = 'moreover';
admin($HTTP_SESSION_VARS["aSID"], $HTTP_COOKIE_VARS["SID"]);
$title = 'Admin - Moreover - "Music Goes On"';
$description = '';
$keywords = '';
$menu = 'admin';
$php_header = 'false';
include("inc/header.inc");
?>

<?php
$title = 'Admin - Moreover - "Music Goes On"';
$subtitle = $aSID;
include("inc/top.inc");
?>

<!-- Start Of Moreover.com News Javascript Code -->
  
  <SCRIPT LANGUAGE="Javascript">
  <!--
  // the array global_article is used to allow multiple categories
  var global_article = new Array();
  var global_article_counter = 0;
  var article = null;
  var early_exit = 1;
  var moreover_text = 0;
  function load_wizard()
    {
    
    var newwin = window.open("","clone","resizable,scrollbars,width=500,height=590");
    document.forms.moreover_clone.submit();
    return true;
    }
  
  // -->
  </SCRIPT>
  <SCRIPT LANGUAGE="JavaScript" src="http://p.moreover.com/cgi-local/page?query=%22Music%20Goes%20On%22&o=js">
  </SCRIPT>
  <SCRIPT LANGUAGE="Javascript">
  <!--
  // load global_article array with articles from category
  if (article != null)
    {
    early_exit = 0;

    for (var article_counter = 0; article_counter < Math.min(article.length,20); article_counter++)
      {
      global_article[global_article_counter] = article[article_counter];
      global_article[global_article_counter].url += "&w=624554";
      global_article[global_article_counter].url += "' TARGET='_blank";
      global_article[global_article_counter].document_url += "' TARGET='_blank";
      global_article_counter++;
      }


    }
  // -->
  </SCRIPT>
  <SCRIPT LANGUAGE="Javascript">
  <!--
  if (global_article.length == 0)
      {
      if (early_exit)
        {
        document.writeln("<CENTER>Please reload this page to view the headlines</CENTER>");
        }
      else
        {
        document.writeln("<CENTER>Sorry, no articles matched your search criteria</CENTER>");
        early_exit = 1;
        }
      }
  // -->
  </SCRIPT>
  <SCRIPT LANGUAGE="Javascript" SRC="http://p.moreover.com/dr/wizard_text.js"></SCRIPT>
  <SCRIPT LANGUAGE="Javascript">
  <!--
  if (!early_exit)
  {
  var webfeed_heading = "";
  var width = "400";
  var numberofarticles = global_article.length;
  var item_spacing = "5";
  var cluster_bgcolor = "ffffff";
  var cluster_border = "0";
  var heading_display = "Yes";
  var time_display = "Yes";
  var cell_spacing = "0";
  var cell_padding = "1";
  var heading_bgcolor = "ffffff";
  var heading_font = "Verdana, Arial,Helvetica, sans-serif";
  var heading_font_size = "-1";
  var heading_fgcolor = "333333";
  var headline_bgcolor = "ffffff";
  var headline_font = "Verdana, Arial,Helvetica, sans-serif";
  var headline_font_size = "-1";
  var headline_fgcolor = "333333";
  var source_font = "Verdana, Arial,Helvetica, sans-serif";
  var source_font_size = "-2";
  var source_fgcolor = "ff6600";
  var access_font = "Verdana, Arial,Helvetica, sans-serif";
  var access_font_size = "-2";
  var access_fgcolor = "ff6600";
  var time_font = "Verdana, Arial,Helvetica, sans-serif";
  var time_font_size = "-2";
  var time_fgcolor = "ff6600";
  var time = new Array(global_article.length);

  // Print out the table containing the headlines
  document.writeln("<CENTER><TABLE BORDER="+cluster_border+" BGCOLOR='#"+cluster_bgcolor+"' WIDTH='"+width+"' CELLPADDING=2 CELLSPACING=0>");
  document.writeln("<tr><td  align='center'><img src='http://i.moreover.com/images/moreover_wizard_link.gif' border='0'></td></tr>")
  document.writeln("<TR><TD><CENTER><TABLE BGCOLOR='#"+cluster_bgcolor+"' CELLPADDING="+cell_padding+" CELLSPACING="+cell_spacing+"  WIDTH='100%'>");

  if (heading_display == "Yes")
    {
    // Print a new category heading
    document.writeln("<TR BGCOLOR='#"+heading_bgcolor+"'><TD>");
    document.writeln("<FONT SIZE="+heading_font_size+" FACE="+heading_font+" COLOR='#"+heading_fgcolor+"'>");
    document.writeln("<B>"+webfeed_heading+"</B></FONT></TD></TR>");
    }

  // Start loop for articles
    for (var counter=0; counter < numberofarticles; counter++)
    {
    if ((counter == (global_article.length - 1)) && moreover_text == 1) 
      { 
      headline_fgcolor = source_fgcolor; 
      time_display = "No";
      }

    // Print out the headline
    document.writeln("<TR BGCOLOR='#"+headline_bgcolor+"'><TD><A HREF='"+global_article[counter].url+"' >");
    document.writeln("<FONT SIZE="+headline_font_size+" FACE="+headline_font+" COLOR='#"+headline_fgcolor+"'");
    document.writeln(">"+global_article[counter].headline_text+"...</FONT></A><br>");

    
      // Print out the source
        if ((counter != (global_article.length - 1)) || moreover_text != 1)
        {
        document.writeln("<A HREF='"+global_article[counter].document_url+"' >");
        document.writeln("<FONT FACE="+source_font+" SIZE="+source_font_size+" COLOR='#"+source_fgcolor+"'>");
        document.writeln(""+global_article[counter].source+"</FONT></A>&nbsp;&nbsp;");
        }
    

    // Print out reg/sub if appropriate
    if (global_article[counter].access_status == "sub" || global_article[counter].access_status == "reg")
      {
      document.writeln(" <A HREF='"+global_article[counter].access_registration+"'>");
      document.writeln("<FONT FACE="+access_font+" SIZE="+access_font_size);
      document.writeln(" COLOR='#"+access_fgcolor+"'>"+global_article[counter].access_status+"</FONT></A>&nbsp;&nbsp;");
      }


        // Print out the harvest time
    if (time_display == "Yes")
      {
      // Make a new date object
      time[counter] = new Date(global_article[counter].harvest_time);
      time[counter].setHours(time[counter].getHours() - (time[counter].getTimezoneOffset() / 60 ));
      document.writeln("<FONT FACE="+time_font+" SIZE="+time_font_size+" COLOR='#"+time_fgcolor+"'>");
      document.writeln(""+time[counter].toString()+"</FONT>");
      } 



    document.writeln("</TD></TR><TR BGCOLOR='#"+headline_bgcolor+"'><TD BGCOLOR='#"+headline_bgcolor+"' HEIGHT="+item_spacing+"></TD></TR>");
    } // End of article loop

  // Start of clone button code //
  // NOTE: DO NOT REMOVE any of the code in this section //
  document.writeln("<FORM METHOD='POST' ACTION='http://www.moreover.com/cgi-local/wizard_clone.pl' target='clone' name='moreover_clone'>");
  document.writeln("<INPUT TYPE='hidden' NAME='parent_code' VALUE='624554'>");
  document.writeln("<INPUT TYPE='hidden' NAME='heading_font_size' VALUE='-1'><INPUT TYPE='hidden' NAME='source_font_size' VALUE='-2'>")
  document.writeln("<INPUT TYPE='hidden' NAME='cluster_width' VALUE='400'><INPUT TYPE='hidden' NAME='time_display' VALUE='Yes'>")
  document.writeln("<INPUT TYPE='hidden' NAME='time_font' VALUE='Verdana, Arial,Helvetica, sans-serif'><INPUT TYPE='hidden' NAME='cluster_cellspacing' VALUE='0'>")
  document.writeln("<INPUT TYPE='hidden' NAME='heading_font' VALUE='Verdana, Arial,Helvetica, sans-serif'><INPUT TYPE='hidden' NAME='number_of_headlines' VALUE='20'>")
  document.writeln("<INPUT TYPE='hidden' NAME='cluster_bgcolor' VALUE='ffffff'><INPUT TYPE='hidden' NAME='search_keywords' VALUE='&quot;Music Goes On&quot;'>")
  document.writeln("<INPUT TYPE='hidden' NAME='time_fgcolor' VALUE='ff6600'><INPUT TYPE='hidden' NAME='access_fgcolor' VALUE='ff6600'>")
  document.writeln("<INPUT TYPE='hidden' NAME='time_font_size' VALUE='-2'><INPUT TYPE='hidden' NAME='headline_bgcolor' VALUE='ffffff'>")
  document.writeln("<INPUT TYPE='hidden' NAME='cluster_name' VALUE='query=%22Music%20Goes%20On%22&o=js'><INPUT TYPE='hidden' NAME='access_font_size' VALUE='-2'>")
  document.writeln("<INPUT TYPE='hidden' NAME='heading_display' VALUE='Yes'><INPUT TYPE='hidden' NAME='headline_fgcolor' VALUE='333333'>")
  document.writeln("<INPUT TYPE='hidden' NAME='source_font' VALUE='Verdana, Arial,Helvetica, sans-serif'><INPUT TYPE='hidden' NAME='access_font' VALUE='Verdana, Arial,Helvetica, sans-serif'>")
  document.writeln("<INPUT TYPE='hidden' NAME='headline_font_size' VALUE='-1'><INPUT TYPE='hidden' NAME='headline_font' VALUE='Verdana, Arial,Helvetica, sans-serif'>")
  document.writeln("<INPUT TYPE='hidden' NAME='heading_bold' VALUE='Yes'><INPUT TYPE='hidden' NAME='item_spacing' VALUE='5'>")
  document.writeln("<INPUT TYPE='hidden' NAME='heading_bgcolor' VALUE='ffffff'><INPUT TYPE='hidden' NAME='wizard_brand' VALUE='moreover_new'>")
  document.writeln("<INPUT TYPE='hidden' NAME='cluster_cellpadding' VALUE='1'><INPUT TYPE='hidden' NAME='heading_fgcolor' VALUE='333333'>")
  document.writeln("<INPUT TYPE='hidden' NAME='source_fgcolor' VALUE='ff6600'><INPUT TYPE='hidden' NAME='cluster_border' VALUE='0'>")
  document.writeln("<INPUT TYPE='hidden' NAME='cluster_layout' VALUE='<br>'>")

  document.writeln("</FORM>");
  // End of clone button code //

  document.writeln("</TABLE></CENTER></TD></TR></TABLE></CENTER>");

  // ************************************************************************************
  // This code is subject to the copyright and warranty restrictions detailed at 
  // http://www.moreover.com/wizard_copyright.html
  // Copyright 2000 Moreover.com Inc. All rights reserved.
  // *************************************************************************************
  } 
  // -->
  </SCRIPT>
  <A HREF="http://www.moreover.com"><FONT COLOR="#ffffff"> </FONT></A>
  <!-- End Of Moreover.com News Javascript Code -->

<?php

include("inc/middle.inc");
include("inc/bottom.inc");
include("inc/footer.inc");

?>