<?php
/**
* General functions used in the code are defined here.
* @author Jaseem Abid <jaseemabid@gmail.com>
* @copyright Copyright (c) 2011, Jaseem Abid
* @license http://www.gnu.org/licenses/gpl.html GNU General Public License 
* @package general
*/

/**
* Settings.php file contains default application settings.(Database settings for eg.)
*/

include_once 'settings.php';

/**
* Function to connect to the database. Creates a persistent connection.
* @return resource Database connection resource.
*/
function dbconnect()
{
	global $global_host,$global_dbname,$global_user,$global_password,$global_port;
	$dbconn = pg_pconnect("host=$global_host port=$global_port dbname=$global_dbname user=$global_user password=$global_password");
	return $dbconn;
}

/**
* Function to query database.
* @param string $sql A sql query. Any variable in sql statement MUST be escaped.
* @return result_resource Result resource.
*/
function dbquery($sql)
{
	dbconnect();
	return pg_query($sql);
}

/**
* This function take a postgres result resource as an input and converts it to 
* an array.
* @param resource $res Result resource from a PSQL database
* @return array resource is converted into array and returned.
*/
function resource2array($res)
{
	$arr=array();
	while($row=pg_fetch_row($res))
		$arr=array_merge($arr,$row);
	return $arr;
}


/**
* Checks if a tag exists, else creates one and returns the Tag ID
* @param string $tag Content Tag
* @return integer Returns the Tag ID of the Tag.
*/

function createDeal($cost, $points) {
	$sql="Insert into deal(dl_cost , dl_points ) values('$cost', '$points') returning dl_id";
	$row=pg_fetch_row(dbquery($sql));
	return $row[0];
}

/**
* Checks if the session exists.
*/
function checkSession()
{
	session_start();
	if(isset($_SESSION['uid']))
		return true;
	else
		return false;
}


?>
