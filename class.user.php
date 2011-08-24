<?php
/**
* User class for handling user related functions.
* @author Jaseem Abid <jaseemabid@gmail.com>
* @copyright Copyright (c) 2011 Jaseem Abid
* @license http://www.gnu.org/licenses/gpl.html GNU General Public License 
* @package content
*/

/**
* Includes files for database connectivity.
*/

include_once 'functions.php';

/**
* Class user for managing users.
* @package user
*/
class user {
	private $uid, $uname, $ubal, $upoints;
	
	/**
	* The constructor selects the appropriate function based on the number of
	* arguments and calls the appropriate protected function.
	*/
	public function __construct() {
		$a = func_get_args();
		$i = func_num_args(); 
		if($i==1)
			call_user_func_array(array($this,'view'),$a);
		if($i==3)
			call_user_func_array(array($this,'create'),$a);
	}
	
	public function __destruct() { }
	
	/**
	* Initializes the class properties for a given user id.
	* @param integer $uid User ID of a user
	*/
	protected function view($uid) {
		$sql="select em_id, em_name, em_bal, em_points from employee where em_id = '$uid'";
		$user=pg_fetch_assoc(dbquery($sql));
		$this->uid=$uid;
		$this->uname=$user['em_name'];
		$this->ubal=$user['em_bal'];
		$this->upoints=$user['em_points'];
	}
	
	/**
	* Function to create a new user.
	* @param string $uname Username of the username
	* @param string $upass Password of the user which is encrypted using sha1()
	* @param string $ufullname Full Name of the user.
	* @param string $uroll Register number of the user.
	* @param string $uemail Email ID of the user
	*/
	protected function create($uid,$uname,$upass)
	{
	
		global $global_bal, $global_points;
		$this->uid=pg_escape_string($uid);
		$this->uname=pg_escape_string($uname);
		$this->upass=sha1(pg_escape_string($upass));
		$this->ubal=$global_bal;
		$this->upoints=$global_points;

		$sql="Insert into employee (em_id, em_name, em_pass, em_bal, em_points ) values ('".$this->uid."','".$this->uname."','".$this->upass."','".$this->ubal."','".$this->upoints."')";
		$user=pg_fetch_assoc(dbquery($sql));
	}
	
	public function getUserId() {
		Return $this->uid;
	}
	
	public function getUsername() {
		return $this->uname;
	}
	
	public function getBal() {
		return $this->ubal;
	}

	public function getPoints() {
		return $this->upoints;
	}

	/**
	* Static function to check if a username already exists.
	* @param string $uname Given Username
	* @return integer returns (exists:1 | does not exist:0)
	*/
	public static function checkUsernameExists($uname) {
		$sql="Select em_id from employee where em_name='$uname'";
		$row=pg_fetch_row(dbquery($sql));
		if($row)
			return 1;
		else
			return 0;
	}
}

?>
