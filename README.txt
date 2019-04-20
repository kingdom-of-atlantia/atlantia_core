When you include files use the format
<?php include('/home/user/subdomain.atlantia.sca.org/file.php'); ?>

This makes life MUCH easier. Be sure to update teh up.php file in the same way for your menu file.
That thing is just a beast. 

The local site menu can be hard coded into the up file (see file for example) 
of you can add the following to the top of each page for custom menus

<?php
$menu = array
  (
  array("Display Text 1","URL1",boolean_new_window,boolean_is_external),
  array("Display Text 2","URL2",boolean_new_window,boolean_is_external)
  );
?>

foreach($menu as $menu_item){
  $menu_item[0]
  $menu_item[1]
  ...
  
}

Important Variables
- $site_title
- $site_local_path

$SITE_TITLE = "Test Office, Kingdom of Atlantia";
$SITE_TITLE_MENU = "Test Office";
$SITE_TITLE_HEADER = "Welcome to Test Office Site";
$SITE_WEBMIN_LABEL = "Foo the Barbarian";
$SITE_WEBMIN_ADDRESS = "foo@atlantia.sca.org";
$SITE_MENU = array
  (
  array("ITEM LABEL 1","/",boolean_new_window),
  array("ITEM LABEL 2","http://www.google.com",boolean_new_window),
  array("ITEM LABEL 2","mailto:abc@a.org",boolean_new_window)
  );