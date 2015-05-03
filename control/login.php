<?php 
	include '../model/db.php' ;

    class Login{
        private $username;
        private $password;
        
        public function __construct(){
            $db = new DB_con();
        }

        /*** for login process ***/
        public function login($username, $password){
            //checking if the username is available in the table
            $result = mysql_query("SELECT * FROM user WHERE username='$username' AND password='$password'");
            
            /*if (!$result){ //checks if there is a connection
                die('Invalid query: ' . mysql_error());
            }*/
            
            $user_data = mysql_fetch_array($result);
            $count_row = mysql_num_rows($result);

            if ($count_row == 1) {
                $_SESSION['logged_in'] = true; // this login var will use for the session thing
                $_SESSION['username']=$row['username'];
                $_SESSION['id'] = $user_data['id'];
                return true; 
            }
            else{
                return false;
            }
        }
    }
?>