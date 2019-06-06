<?php
include_once("../inc/php_header.inc");

if ($action=="reply") /* if user is replying to a post... */
{
 $title = 'Forums - Reply To Post';
 $reply_data = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM forum_posts WHERE id = '$replyto'"));

 $email_checked = "checked";
 $sig_checked = "checked";
}
else if ($action=="add") /* if user is adding a post...  */
{
 $title = 'Forums - Add Topic';

 $email_checked = "checked";
 $sig_checked = "checked";
}
else if ($action=="edit") /* if user is editing a post... */
{
 $title = 'Forums - Edit Post';
 $edit_data = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM forum_posts WHERE id = '$edit'"));

 if (preg_match("\[SIGNATURE\]", $edit_data[post]))
 {
  $edit_data[post] = str_replace("\[SIGNATURE\]", "", $edit_data[post]);
  $sig_checked = "checked";
 }

 $CurrentForumsUser = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM forum_users WHERE SID = '$SID'"));
 if ($edit_data[replyto]!=0) /* if user is editing a reply... */
 {
  $editreply_data = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM forum_posts WHERE id = '$edit_data[replyto]'"));

  if (preg_match($CurrentForumsUser[username], $editreply_data[email]))
  {
   $email_checked = "checked";
  }
 }
 else
 {
  if (preg_match($CurrentForumsUser[username], $edit_data[email])) /* is user's username is found in the email field of edit post's row... */
  {
   $email_checked = "checked";
  }
 }
}

$description = '';
$keywords = '';
$menu = 'forums';
$php_header = 'false';
include("inc/header.inc");
?>

<?php
$title = $title;
include("forums/subtitle.inc");
?>

<?php

if ($action=="edit") /* if user wants to edit a post... */
{
 if ($CurrentForumsUser[username]!=$edit_data[poster]) /* if user doesn't equal the poster of the post this user want to edit... */
 {
  $error = "edit_permission"; /* set error to edit_permission, dealt with later... */
 }
}

if ($error!="")  /* if there's an error, ie, if error isn't empty... */
{
 if ($error=="edit_permission") /* if the error is the aforementioned edit_permission... */
 {
  echo "<font color=\"red\">You did not create this post.  You do not have permission to edit it.</font>";
 }
}
else /* if error is empty, ie, no error... */
{

 echo "<form action=\"/forums/doadd_edit.php\" method=\"post\">\n\n";

 echo "<table border=\"1\" cellpadding=\"5\" cellspacing=\"0\" width=\"100%\" style=\"table-layout:fixed\">\n\n";
  echo "    <tr>\n";
  echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Forum:</b></font></td>\n";
  if ($action=="reply") /* if user is replying to a topic... */
  {
   if ($forum_data = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM artists WHERE id = '$reply_data[forum]'"))) /* if forum is an artist... */
   {
   }
   else /* if forum is not an artist... */
   { /* set forum to actual forum */
    $forum_data = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM forums WHERE id = '$reply_data[forum]'"));
    $forum_data[artist] = $forum_data[forum];
   }
   echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\"><a class=\"link_onf7f7f7\" href=\"/forums/forum.php/$forum_data[id]/\">$forum_data[artist]</a></font></td>\n";
  }
  else if ($action=="add") /* if user is adding a topic...*/
  {
   if ($forum_data = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM artists WHERE id = '$forum'"))) /* again, is it an artist's forum... */
   {
   }
   else
   { /* if not set it to the actual forum...*/
    $forum_data = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM forums WHERE id = '$forum'"));
    $forum_data[artist] = $forum_data[forum];
   }
   echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\"><a class=\"link_onf7f7f7\" href=\"/forums/forum.php/$forum_data[id]/\">$forum_data[artist]</a></font></td>\n";
  }
  else if ($action=="edit") /* if user is editing a post... */
  {
   if ($forum_data = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM artists WHERE id = '$edit_data[forum]'"))) /* as above */
   {
   }
   else
   { /* as above */
    $forum_data = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM forums WHERE id = '$edit_data[forum]'"));
    $forum_data[artist] = $forum_data[forum];
   }
   echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\"><a class=\"link_onf7f7f7\" href=\"/forums/forum.php/$forum_data[id]/\">$forum_data[artist]</a></font></td>\n";
  }  
  echo "    </tr>\n";
  echo "    <tr>\n";
  echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Topic:</b></font></td>\n";
  if ($action=="reply") /* if user is replying to a post... */
  { /* they can't set the topic so give it to them */
   echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\"><b>$reply_data[topic]</b></font></td>\n";
  }
  else if ($action=="add") /* if user is adding a topic... */
  { /* ask them what they want the topic to be */
   echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><input type=\"text\" name=\"topic\" maxlength=\"255\" size=\"50\"></td>\n";
  }
  else if ($action=="edit") /* if user is editing a post... */
  {
   if ($edit_data[replyto]!=0) /* is the post NOT a reply? */
   { /* if it's his/her own topic then let them change it */
    echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\"><b>$editreply_data[topic]</b></font></td>\n";
   }
   else
   { /* however, if it's not user's topic... */
    echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><input type=\"text\" name=\"topic\" maxlength=\"255\" size=\"50\" value=\"$edit_data[topic]\"></td>\n";
   }
  }
  echo "    </tr>\n";
  echo "    <tr>\n"; /* the post */
  echo "        <td width=\"120\" valign=\"top\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Post:</b></font></td>\n";
  echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><textarea name=\"post\" cols=\"49\" rows=\"10\">$edit_data[post]</textarea></td>\n";
  echo "    </tr>\n";
  echo "    <tr>\n"; /* description of allowed code */
  echo "        <td width=\"120\" valign=\"top\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Code:</b></font></td>\n";
  echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\">You can use the following HTML tags in your post: &lt;b&gt;, &lt;i&gt; and &lt;u&gt;.<br><br>For example:<ul><li>&lt;b&gt;<b>Bold Text</b>&lt;/b&gt;</li><li>&lt;i&gt;<i>Italicised Text</i>&lt;/i&gt;</li><li>&lt;u&gt;<u>Underlined Text</u>&lt;/u&gt;</li></ul></font></td>\n";
  echo "    </tr>\n";
  if (!preg_match("Guest", $CurrentForumsUser[username])) /* is the user is registered, ie, not a guest... */
  { /* they CAN have special features such as e-mail notification etc. */
   echo "    <tr>\n";
   echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">E-Mail Notification:</b></font></td>\n";
   echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\"><input type=\"checkbox\" name=\"email\" value=\"1\" $email_checked style=\"BACKGROUND-COLOR: #FFFFFF\"> I would like to receive an e-mail when somebody replies to this topic</font></td>\n";
   echo "    </tr>\n";
   echo "    <tr>\n";
   echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Include Signature:</b></font></td>\n";
   echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\"><input type=\"checkbox\" name=\"sig\" value=\"1\" $sig_checked style=\"BACKGROUND-COLOR: #FFFFFF\"> Include my signature at the bottom of this post</font></td>\n";
   echo "    </tr>\n";
   if ($action=="edit") /* if registered user is editing a post... */
   { /* then they have option to delete it */
    echo "    <tr>\n";
    echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Delete Post:</b></font></td>\n";
    echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\"><input type=\"checkbox\" name=\"delete\" value=\"1\" style=\"BACKGROUND-COLOR: #FFFFFF\"> <font color=\"red\">Delete this post</font></font></td>\n";
    echo "    </tr>\n";
   }
  }
  echo "    <tr>\n"; /* SUBMIT */
  echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">".str_replace("Forums - ", "", $title).":</b></font></td>\n";
  echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><center><input type=\"submit\" name=\"submit\" value=\"".str_replace("Forums - ", "", $title)."\"></center></td>\n";
  echo "    </tr>\n";
 echo "</table>\n\n";
 
 echo "<input type=\"hidden\" name=\"action\" value=\"$action\">"; 

 if ($action=="reply") /* if user is replying to a topic... */
 { /* include necessary variables */
  echo "<input type=\"hidden\" name=\"replyto\" value=\"$replyto\">";
  echo "<input type=\"hidden\" name=\"forum\" value=\"$forum_data[id]\">";
 }
 else if ($action=="add") /* if user is adding a topic... */
 { /* include necessary variables */
  echo "<input type=\"hidden\" name=\"forum\" value=\"$forum_data[id]\">";
 }
 else if ($action=="edit") /* if user is editing a topic... */
 { /* include necessary variables */
  echo "<input type=\"hidden\" name=\"forum\" value=\"$forum_data[id]\">";
  echo "<input type=\"hidden\" name=\"edit\" value=\"$edit\">";
  echo "<input type=\"hidden\" name=\"poster\" value=\"$edit_data[poster]\">";
  if ($edit_data[replyto]!=0)
  {
   echo "<input type=\"hidden\" name=\"replyto\" value=\"$edit_data[replyto]\">";
  }
 } 

 echo "</form>";

}

?>

<?php

include("../inc/middle.inc");
include("../inc/bottom.inc");
include("../inc/footer.inc");

?>