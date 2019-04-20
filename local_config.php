<?php

$SITE_TITLE = $SHORT_ORDER.", Kingdom of Atlantia";
$SITE_TITLE_MENU = "The Order"; # Example: Menu
$SITE_TITLE_HEADER = "Welcome to the ".$SHORT_ORDER."s site."; # Example: Welcome to our page!
$SITE_WEBMIN_LABEL = "[WEB MINISTER NAME]";
$SITE_WEBMIN_ADDRESS = "[WEB MINISTER EMAIL]";
$SITE_OFFICE_IMAGE = "[YOUR GRAPHIC PATH]"; # if null, no graphic.

/*
The navigation array elements are, themselves, just basic arrays each contains 3 elements:
- label, what you want to be in the menu
- link, where you want the menu to take you OR if the value is null it is just a label with no link
- new_window, if you have a link should it open in a new window?
*/

/* Basic menu, what is used for most sites */
$SITE_MENU = array
  (
  array("Acorn eNewsletter","http://enewsletter.sca.org/atlantia.html",true),
  array("Policies","http://atlantia.sca.org/offices/seneschal/clerk-of-law/policy/chronicler",true),
  array("Chroniclers","Warranted-Chroniclers.html",false),
  array("Release Forms","Warrant.html",false),
  array("Warrant Form","Releases.html",false),
  array("Listing of Releases","Release-Listing.html",false),
  array("Baronial Newsletters","Baronial-Newsletters.html",false)
  );

/* Complicated Menu Used for Order sites. RELIES ON THE DEFINES.PHP */
/* The values below are found about 3 layers down the defines rabbit hole. */
/*
$SITE_MENU = array();

array_push($SITE_MENU, array("The Order",null,false));
array_push($SITE_MENU, array("Atlantian ".$SHORT_ORDER."s", $HOME_DIR."members.php", false));

if ($ORDER_ARRAY[$ORDER_ID]['checklist'] == 1)
{
	array_push($SITE_MENU, array("Elevation Checklist", $HOME_DIR."checklist.php", false));
}

if ($ORDER_ARRAY[$ORDER_ID]['advice'] == 1)
{
	array_push($SITE_MENU, array("Advice for ".$SHORT_ORDER."s", $HOME_DIR."advice.php", false));
}

if ($ORDER_ARRAY[$ORDER_ID]['info'] == 1)
{
	array_push($SITE_MENU, array("Info for ".$SHORT_ORDER."s", $HOME_DIR."info.php", false));
}

array_push($SITE_MENU, array("FAQ", $HOME_DIR."faq.php", false));

if ($ORDER_ARRAY[$ORDER_ID]['manual'] == 1)
{
	array_push($SITE_MENU, array($SHORT_ORDER." Manual", $HOME_DIR.$SHORT_NAME."Manual.pdf", false));
}
if ($ORDER_ARRAY[$ORDER_ID]['ask'] == 1)
{
	array_push($SITE_MENU, array("Ask the ".$SHORT_ORDER."s", $HOME_DIR."ask.php", false));
}

array_push($SITE_MENU, array("Make Recommendation", "http://award.atlantia.sca.org/", true));
array_push($SITE_MENU, array("Members", null, false));

if (isset($_SESSION['s_username']))
{
	if ((isset($_SESSION[$ORDER_ARRAY[$ORDER_ID]['session_id_field']]) && $_SESSION[$ORDER_ARRAY[$ORDER_ID]['session_id_field']] > 0))
	{
		array_push($SITE_MENU, array("Edit ".$SHORT_ORDER, $HOME_DIR."admin/atlantian.php?mode=edit&amp;atlantian_id=".$_SESSION['s_atlantian_id'], false));
	}
	else if (!((isset($_SESSION[$WEBMINISTER_ADMIN]) && $_SESSION[$WEBMINISTER_ADMIN] == 1) || (isset($_SESSION[$ORDER_ARRAY[$ORDER_ID]['session_auth']]) && $_SESSION[$ORDER_ARRAY[$ORDER_ID]['session_auth']] == 1)))
	{
		array_push($SITE_MENU, array("Request Access", $HOME_DIR."admin/request.php", false));
	}
	array_push($SITE_MENU, array("Change Password", $HOME_DIR."admin/password.php", false));
	array_push($SITE_MENU, array("Logout", $HOME_DIR."admin/logout.php", false));
}
else
{
	array_push($SITE_MENU, array("Request Account", $HOME_DIR."request.php", false));
	array_push($SITE_MENU, array("Login", $HOME_DIR."admin/index.php", false));
}


// Only Web or Order admins may access all Order Members
if ((isset($_SESSION[$WEBMINISTER_ADMIN]) && $_SESSION[$WEBMINISTER_ADMIN] == 1) || (isset($_SESSION[$ORDER_ARRAY[$ORDER_ID]['session_auth']]) && $_SESSION[$ORDER_ARRAY[$ORDER_ID]['session_auth']] == 1))
{
	array_push($SITE_MENU, array("Administration", null, false));
	array_push($SITE_MENU, array("Edit ".$SHORT_ORDER,  $HOME_DIR."admin/select_member.php", false));

	if ($ORDER_ARRAY[$ORDER_ID]['as'] == 1)
	{
		array_push($SITE_MENU, array("Art/Science", $HOME_DIR."admin/art_science.php", false));
	}

	array_push($SITE_MENU, array("FAQ", $HOME_DIR."admin/faq.php", false));
	array_push($SITE_MENU, array("Announcements", $HOME_DIR."admin/announcement.php", false));
	array_push($SITE_MENU, array("Account Requests", $HOME_DIR."admin/pending.php", false));
	array_push($SITE_MENU, array("View Accounts", $HOME_DIR."admin/accounts.php", false));
	array_push($SITE_MENU, array("View Roster", $HOME_DIR."admin/roster.php", false));
	array_push($SITE_MENU, array("Update Principal", $HOME_DIR."admin/principal.php", false));
}

if ($TEST == 1)
{
	echo '<p style="color:red;font-weight:bold;font-size:large;text-align:center">THIS IS THE TEST ENVIRONMENT</p>';
}
*/
?>