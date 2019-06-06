<?php
include_once($HTTP_SERVER_VARS[DOCUMENT_ROOT]."/inc/php_header.inc");

if ($CurrentForumsUser = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM forum_users WHERE SID = '$SID'")))
{

}
else
{
 $CurrentForumsUser = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM forum_users WHERE username = 'Guest$CookieID'"));
}

$post = addslashes($post);

$datetime = datetime();

if ($sig==1)
{
 $post = "[SIGNATURE]".$post;
}
else
{
 $post = ereg_replace("\[SIGNATURE\]", "", $post);
}

if ($action=="reply")
{
 $num = mysql_num_rows(mysqli_query($link, "SELECT * FROM forum_posts")) + 1;
 mysqli_query($link, "INSERT INTO forum_posts (id, poster, topic, post, replyto, forum, datetime) VALUES ('$num', '$CurrentForumsUser[username]', '$topic', '$post', '$replyto', '$forum', '$datetime')");

 $RowReplyingTo = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM forum_posts WHERE id = '$replyto'"));

 if ($email==1)
 {
  if (!ereg($CurrentForumsUser[username], $RowReplyingTo[email]))
  {
   mysqli_query($link, "UPDATE forum_posts SET email = '$RowReplyingTo[email]|$CurrentForumsUser[username]' WHERE id = '$replyto'");
  }
 }

 $RowReplyingTo[email] = substr($RowReplyingTo[email], 1, strlen($RowReplyingTo[email]));
 $emails = explode("|", $RowReplyingTo[email]);
 foreach ($emails as $user)
 {
  if ($CurrentForumsUser[username]!=$user)
  {
   $message = "";
   $UserWantingEMail = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM forum_users WHERE username = '$user'"));
   $replyto_row = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM forum_posts WHERE id = '$replyto'"));
   $message = "Hello $UserWantingEMail[name]\n\n$CurrentForumsUser[name] ($CurrentForumsUser[username]) has replied to '$replyto_row[topic]' at Music Goes On's forums.  You requested to receive notification if this message was replied to.\n\nYou can read the reply at http://www.musicgoeson.com/forums/topic.php/$replyto/";
   mail("".$UserWantingEMail[name]." <".$UserWantingEMail[email].">", "Music Goes On - Forums Reply", $message, "From: Music Goes On <mgo@musicgoeson.com>");
  }
 }

 header("Location: https://mgo.girish-gupta.com/forums/topic.php/".$replyto."/");
}

if ($action=="add")
{
 $topic = addslashes($topic);

 $num = mysql_num_rows(mysqli_query($link, "SELECT * FROM forum_posts")) + 1;
 mysqli_query($link, "INSERT INTO forum_posts (id, poster, topic, post, replyto, forum, datetime) VALUES ('$num', '$CurrentForumsUser[username]', '$topic', '$post', '0', '$forum', '$datetime')");

 $RowUserIsAdding = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM forum_posts WHERE id = '$num'"));

 if ($email==1)
 {
  mysqli_query($link, "UPDATE forum_posts SET email = '$RowUserIsAdding[email]|$CurrentForumsUser[username]' WHERE id = '$num'");
 }

 //if (is_int($forum))
 //{
  //$redirect = "http://www.musicgoeson.com/article.php/".$forum."/";
 //}
 //else
 //{
  header("Location: https://mgo.girish-gupta.com/forums/topic.php/".$num."/");
 //}
}

if ($action=="edit")
{
 if ($CurrentForumsUser[username]==$poster)
 {
  if (empty($replyto))
  {
   if ($delete==1)
   {
    mysqli_query($link, "UPDATE forum_posts SET deleted = '1' WHERE id = '$edit' OR replyto = '$edit'");
    header("Location: https://mgo.girish-gupta.com/forums/forum.php/".$forum."/");
   }
   else
   {
    mysqli_query($link, "UPDATE forum_posts SET topic = '$topic', post = '$post' WHERE id = '$edit'");
    if ($email==1)
    {
     $RowUserIsEditing = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM forum_posts WHERE id = '$edit'"));
     if (!ereg($CurrentForumsUser[username], $RowUserIsEditing[email]))
     {
      mysqli_query($link, "UPDATE forum_posts SET email = '$RowUserIsEditing[email]|$CurrentForumsUser[username]' WHERE id = '$num'");
     }
    }
    else
    {
     $RowUserIsEditing = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM forum_posts WHERE id = '$edit'"));
     $email = ereg_replace("\|".$CurrentForumsUser[username], "", $RowUserIsEditing[email]);
     mysqli_query($link, "UPDATE forum_posts SET email = '$email' WHERE id = '$edit'");
    }
    header("Location: https://mgo.girish-gupta.com/forums/topic.php/".$edit."/");
   }
  }
  else
  {
   if ($delete==1)
   {
    mysqli_query($link, "UPDATE forum_posts SET deleted = '1' WHERE id = '$edit'");
    header("Location: https://mgo.girish-gupta.com/forums/topic.php/".$replyto."/");
   }
   else
   {
    mysqli_query($link, "UPDATE forum_posts SET post = '$post' WHERE id = '$edit'");
    if ($email==1)
    {
     $RowUserIsReplyingTo = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM forum_posts WHERE id = '$replyto'"));
     if (!ereg($CurrentForumsUser[username], $RowUserIsReplyingTo[email]))
     {
      mysqli_query($link, "UPDATE forum_posts SET email = '$RowUserIsReplyingTo[email]|$CurrentForumsUser[username]' WHERE id = '$replyto'");
     }
    }
    else
    {
     $RowUserIsReplyingTo = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM forum_posts WHERE id = '$replyto'"));
     $email = ereg_replace("\|".$CurrentForumsUser[username], "", $RowUserIsReplyingTo[email]);
     mysqli_query($link, "UPDATE forum_posts SET email = '$email' WHERE id = '$replyto'");
    }
    header("Location: https://mgo.girish-gupta.com/forums/topic.php/".$replyto."/");
   }
  }
 }
 else
 {
  header("Location: https://mgo.girish-gupta.com/forums/add_edit.php?error=edit_permission");
 }
}

?>