<?php
$title = 'www.musicgoeson.com';
$description = 'Visit Music Goes On for your very own upbeat player in the music industry with the latest music news and reviews; including features, competitions and loads more...';
$keywords = 'music, uk, entertainment, pop, indie, rock, dance, garage, news, reviews, features, promos, live, gig, concert, artists';
$menu = 'home';
include("/home/mgo/musicgoeson-www/inc/header.php");
?>

<?php /* NEWS BEGIN */ ?>

<?php $title = 'N E W S'; include("/home/mgo/musicgoeson-www/inc/top.php"); ?>

<?php
$headline = 'No Brits For Craig David';
$uri = '2001/02/24-cd.php';
$date = '24 February 2001';
$description = 'Despite being nominated for six Brit Awards Craig David will not win anything';
include("/home/mgo/musicgoeson-www/news/news.inc");
?>

<?php
$headline = 'Robbie Williams Attacked';
$uri = '2001/02/22-rw.php';
$date = '22 February 2001';
$description = 'Robbie Williams was thrown off stage by a man believed to have psychiatric problems';
include("/home/mgo/musicgoeson-www/news/news.inc");
?>

<?php
$headline = 'Eminem and U2 Dominate 43rd Grammy Awards';
$uri = '2001/02/22-grammys.php';
$date = '22 February 2001';
$description = 'Eminem, U2 and Steely Dan were all winners at the 43rd annual Grammy Awards';
include("/home/mgo/musicgoeson-www/news/news.inc");
?>

<?php
$headline = 'Napster Offers $1 Billion To Labels';
$uri = '2001/02/21-napster.php';
$date = '21 February 2001';
$description = 'Napster is offering $1 billion to the major labels';
include("/home/mgo/musicgoeson-www/news/news.inc");
?>

<?php
$headline = 'Radiohead To Tour USA';
$uri = '2001/02/21-radiohead.php';
$date = '21 February 2001';
$description = 'Radiohead are planning to tour the US in June';
include("/home/mgo/musicgoeson-www/news/news.inc");
?>

<?php
$headline = 'Atomic Kitten Set To Stay At Number One';
$uri = '2001/02/20-mcharts.php';
$date = '20 February 2001';
$description = 'Atomic Kitten are set to stay at Number One for a fourth week';
include("/home/mgo/musicgoeson-www/news/news.inc");
?>

<?php
$headline = 'Nick Cave and The Bad Seeds Announce European Tour Dates';
$uri = '2001/02/15-bad.php';
$date = '15 February 2001';
$description = 'Nick Cave and The Bad Seeds have announced details of a European tour';
include("/home/mgo/musicgoeson-www/news/news.inc");
?>

<?php include("/home/mgo/musicgoeson-www/inc/middle.php"); ?>

<form method="post" action="/redir.php">
<font color="black" size="1" face="verdana">More News...</font><br>
<select name="uri">

<!--<option value="/news/2001/02/15-bad.php">Nick Cave and The Bad Seeds Announce European Tour Dates</option>-->
<option value="/news/2001/02/14-napster.php">Napster Trying To Make Up With Music Industry</option>
<option value="/news/2001/02/13-napster.php">Napster Finally Defeated</option>
<option value="/news/2001/02/8-mb_blade.php">Mark B and Blade To Support Eminem Tonight</option>
<option value="/news/2001/02/7-mcharts.php">Wheatus Set To Top Singles Chart</option>
<option value="/news/2001/02/4-manics.php">Manics Bring Release Dates Forward</option>
<option value="/news/2001/02/4-u2.php">U2 Stuck At Number Two</option>
<option value="/news/2001/01/30-hat2.php">Badly Drawn Boy's Trademark Hat Returned!</option>
<option value="/news/2001/01/30-hat.php">Badly Drawn Boy's Trademark Hat Stolen</option>
<option value="/news/2001/01/30-placebo.php">New Single From Placebo</option>
<option value="/news/2001/01/29-brits.php">Eminem To Play Brits</option>
<option value="/news/2001/01/18-atomic_kitten.php">Kerry Leaves Atomic Kitten</option>
<option value="/news/2001/01/16-msp.php">Manic Street Preachers Announce UK Tour Dates</option>
<option value="/news/2001/01/16-oasis.php">Liam Gallagher: John Lennon? More Like Jack Lemmon</option>
<option value="/news/2001/01/15-brits.php">Brit Nominations Announced</option>
<option value="/news/2001/01/9-ashcroft_tour.php">Richard Ashcroft New Tour Dates</option>
<option value="/news/2001/01/4-glasto.php">Glastonbury 2001 Cancelled</option>
<option value="/news/2000/12/24-xmas_chart.php">Bob The Builder's Christmas Number One</option>
<option value="/news/2000/12/19-maccoll.php.php">Kirsty MacColl Has Died</option>
<option value="/news/2000/12/17-btb.php.php">Bob The Builder Beats Eminem To Top The Charts</option>
<option value="/news/2000/12/14-embrace.php.php">Festive Treat For Embrace Fans</option>
<option value="/news/2000/12/14-ashcroft.php.php">Richard Ashcroft London Shows Postponed</option>
<option value="/news/2000/12/12-radiohead.php">Radiohead Reveal New Album Title</option>
<option value="/news/2000/12/12-cave.php">Nick Cave and The Bad Seeds New Album Details</option>
<option value="/news/2000/12/10-stan.php">Eminem Beats Bob The Builder To Top The Charts</option>
<option value="/news/2000/12/6-lennon.php">Julian Lennon Speaks Out About His Father</option>
<option value="/news/2000/12/5-moby.php">Moby Goes Five Times Platinum</option>
<option value="/news/2000/11/24-u2.php">U2's Album Banned In Burma</option>
<option value="/news/2000/11/12-westlife.php">Westlife's First Number One Album</option>
<option value="/news/2000/11/7-brits.php">Ant & Dec To Present Brit Awards</option>
<option value="/news/2000/11/1-q.php">Q Award Winners</option>
<option value="/news/2000/10/24-michael.php">Bono Agrees With George Michael</option>
<option value="/news/2000/10/23-michael.php">George Michael Attacks British Music Industry</option>
<option value="/news/2000/10/4-chapman.php">Mark Chapman Denied Parole</option>
<option value="/news/2000/10/3-oasis_live.php">Oasis Live Album Confirmed</option>
<option value="/news/2000/09/26-ashcroft_tour.php">Richard Ashcroft UK Tour Confirmed</option>
<option value="/news/2000/09/13-moby.php">New Single From Moby</option>
<option value="/news/2000/08/29-placebo_tour.php">Placebo Announce Tour Dates</option>
<option value="/news/2000/08/27-spice_girls.php">Spice Girls Reveal New Album Title</option>
<option value="/news/2000/08/14-robbie_r1.php">Robbie Rocks Radio 1</option>
<option value="/news/2000/07/29-napster.php">Napster Is Back Online</option>
<option value="/news/2000/07/27-napster.php">Napster Ordered To Shut Down</option>
<option value="/news/2000/07/12-coldplay_one.php">Coldplay's Debut Album Set For Number One</option>
<option value="/news/2000/07/5-radiohead_new_album.php">Radiohead's New Album</option>
<option value="/news/2000/07/5-embrace_new_single.php">New Single From Embrace</option>
<option value="/news/2000/07/1-pearl_jam.php.php">Eight Pearl Jam Fans Crushed To Death At Danish Show</option>
<option value="/news/2000/06/28-eminem_court.php">Date Set for Eminem's Court Fight</option>
<option value="/news/2000/06/25-top_40.php">Kylie Minogue's Fifth UK Number One</option>
<option value="/news/2000/06/25-cerys_matthews_joins_pet_shop_boys_glastonbury.php">Cerys Matthews Joins Pet Shop Boys At Glastonbury</option>
<option value="/news/2000/06/22-ashcroft_album_site.php">Hear Richard Ashcroft's Debut Album Now</option>
<option value="/news/2000/06/5-glastonbury_man.php">'Glastonbury Man' - BBC Documentary On Michael Eavis</option>
<option value="/news/2000/06/2-ashcroft_documentary.php">Richard Ashcroft Documentary For Channel 4</option>
<option value="/news/2000/06/1-coldplay_album_details.php">Coldplay Announce Details of Debut Album</option>
<option value="/news/2000/05/31-oasis_first_gig_without_noel.php">Oasis' First Gig Without Noel</option>
<option value="/news/2000/05/24-geldof_netaid.php">Bob Geldof Says NetAid Shouldn't Have Gone Ahead</option>
<option value="/news/2000/05/24-noel_quits_overseas_touring_with_oasis.php">Noel Quits Overseas Touring With Oasis</option>
<option value="/news/2000/05/10-beatles_to_release_greatest_hits_album.php">Beatles To Release Greatest Hits Album</option>
<option value="/news/2000/05/6-rmx_fgth_pol_released.php">Remix Of FGTH's Power of Love To Be Released</option>

</select>
<input type="hidden" name="loc" value="mgo">
<input type="submit" value="GO!" align="absmiddle">
</form>

<font face="verdana" size="1">
<i>Music Goes On</i>'s headlines are featured on Sonicnet.com's <a href="/redir.php?url=http://www.musicnewswire.com/" target="_blank">MusicNewswire</a>
</font>

<?php include("/home/mgo/musicgoeson-www/inc/bottom.php"); ?>

<?php /* NEWS END */ ?>

<br>

<?php /* REVIEWS BEGIN */ ?>

<?php $title = 'R E V I E W S'; include("/home/mgo/musicgoeson-www/inc/top.php"); ?>

<?php
$headline = 'Kaci - Paradise';
$uri = 'singles/kaci/paradise.php';
$date = '24 February 2001';
$a_s = 'SINGLE';
$release = '26 February 2001';
$label = 'Curb/London';
$cat = '8573 87320 2';
include("/home/mgo/musicgoeson-www/reviews/reviews.inc");
?>

<?php
$headline = 'Grand Theft Audio - We Luv U';
$uri = 'singles/gta/we_luv_u.php';
$date = '21 February 2001';
$a_s = 'SINGLE';
$release = '12 March 2001';
$label = 'Sci-Fi';
$cat = 'SCIFI1CD';
include("/home/mgo/musicgoeson-www/reviews/reviews.inc");
?>

<?php
$headline = '2nd Gen - Irony Is';
$uri = 'albums/2nd_gen/irony_is.php';
$date = '20 February 2001';
$a_s = 'ALBUM';
$release = '26 February 2001';
$label = 'Novamute';
$cat = 'NOMU68CD';
include("/home/mgo/musicgoeson-www/reviews/reviews.inc");
?>

<?php
$headline = 'King Adora - Suffocate';
$uri = 'singles/king_adora/suffocate.php';
$date = '14 February 2001';
$a_s = 'SINGLE';
$release = '19 February 2001';
$label = 'Superior Quality';
$cat = 'RQS 011CD';
include("/home/mgo/musicgoeson-www/reviews/reviews.inc");
?>

<?php
$headline = 'Santos - Camels';
$uri = 'singles/santos/camels.php';
$date = '11 January 2001';
$a_s = 'SINGLE';
$release = '8 January 2001';
$label = 'Incentive';
$cat = 'CENT15CD';
include("/home/mgo/musicgoeson-www/reviews/reviews.inc");
?>

<?php include("/home/mgo/musicgoeson-www/inc/middle.php"); ?>

<form method="post" action="https://musicgoeson.com/redir.php">
<font color="black" size="1" face="verdana">More Reviews...</font><br>
<select name="uri">

<!--<option value="/reviews/singles/santos/camels.php">[SINGLE] Santos - Camels</option>-->
<option value="/reviews/singles/jj72/snow.php">[SINGLE] JJ72 - Snow</option>
<option value="/reviews/singles/mo_solid_gold/davids_soul.php">[SINGLE] Mo Solid Gold - David's Soul</option>
<option value="/reviews/albums/31.php">[ALBUM] The Offspring - Conspiracy of One</option>
<option value="/reviews/singles/ooberman/dolphin_blue.php">[SINGLE] Ooberman - Dolphin Blue</option>
<option value="/reviews/singles/bomfunk_mcs/uprocking_beats.php">[SINGLE] Bomfunk MC's - Uprocking Beats</option>
<option value="/reviews/albums/29.php">[ALBUM] Spice Girls - Forever</option>
<option value="/reviews/singles/mansun/elec_man.php">[SINGLE] Mansun - Electric Man</option>
<option value="/reviews/albums/28.php">[ALBUM] Oasis - Familiar To Millions</option>
<option value="/reviews/singles/fgth/pleasuredome.php">[SINGLE] Frankie Goes To Hollywood - Welcome / Pleasuredome</option>
<option value="/reviews/albums/26.php">[ALBUM] David Mancuso Presents The Loft Vol 2</option>
<option value="/reviews/albums/25.php">[ALBUM] Add N To (X) - Add Insult To Injury</option>
<option value="/reviews/singles/goldfrapp/utopia.php">[SINGLE] Goldfrapp - Utopia</option>
<option value="/reviews/albums/23.php">[ALBUM] Radiohead - Kid A</option>
<option value="/reviews/singles/lee_griffiths/feeling_the_strain.php">[SINGLE] Lee Griffiths - Feeling The Strain</option>
<option value="/reviews/albums/22.php">[ALBUM] Lee Griffiths - Northern Songs</option>
<option value="/reviews/albums/14.php">[ALBUM] Mansun - Little Kix</option>
<option value="/reviews/singles/fgth/two_tribes.php">[SINGLE] FGTH - Two Tribes</option>
<option value="/reviews/albums/21.php">[ALBUM] Frankie Goes To Hollywood - Maximum Joy</option>

</select>
<input type="hidden" name="loc" value="mgo">
<input type="submit" value="GO!" align="absmiddle">
</form>

<?php include("/home/mgo/musicgoeson-www/inc/bottom.php"); ?>

<?php /* REVIEWS END */ ?>

<?php include("/home/mgo/musicgoeson-www/inc/footer.php"); ?>