<?php 
	include "../model/db.php";

	class Users{
		public function __construct(){
			$db = new DB_con();
		}
  
    	/*** starting the session ***/
	    public function get_session(){
	        return $_SESSION['logged_in'];
	    }

	    public function user_logout() {
	        $_SESSION['logged_in'] = FALSE;
	        session_destroy();
	    }
	}
?>