<h1>Testing local/production environment</h1>
<?PHP
if(getenv("LOCATION") == "dev")
{
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
echo "This is development!";
}
else if (getenv("LOCATION") == "PRODUCTION")
{
  echo "This is production";
}
?>
<br />
<?
$_REQUEST['test']
?>
