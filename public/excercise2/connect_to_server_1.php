<?php

class connectToServer{
	public function connectServerAndPerformActivity(){
		//$this->telnetToServer();
		$conn = $this->sshToServer();
		if($conn){
			$disk_space = disk_free_space("/var/www/html/router_app"); 
			echo "Disk space ==".$disk_space.PHP_EOL;
			$this->inodeUses();
			$files = $this->getFileList("/var/www/html/router_app");
			echo "<pre>";print_r($files);

			//Copy files to server via FTP
			$con = ftp_connect("127.0.0.1"); 
			if($con){
				$login_result = ftp_login ($con, "username", "password"); 
				if ( ftp_get($con,"/var/www/html/targetpath", "/var/www/html/router_app", FTP_BINARY) ) {
				    echo "Copying file Successfully".PHP_EOL;
				}else {
				    echo "Copy Failed via FTP";
				}
			}else{
				 echo "FTP connection Fail".PHP_EOL;
			}
			
		}
	}

	public function telnetToServer(){
		$output = shell_exec('telnet 192.168.43.143 22');
		echo $output;
	}

	public function sshToServer(){
		return true;

		if (!function_exists("ssh2_connect")) die("function ssh2_connect doesn't exist");
		$connection_string = ssh2_connect('127.0.0.1', 22);
		if (@ssh2_auth_password($connection_string, 'username', 'password')){
			echo "Connection successfull.";
			return true;
		}else{
			throw new Exception("Authentication failed!");
		}

	}

	public function inodeUses(){
		$output = shell_exec('df -ih');
		echo $output;
	}

	public function getFileList($path){
		$files = scandir($path,1);

		//Other Option to get list of directory
		/*$files = array();
		if (is_dir($path))
		{
	        if ($handle = opendir($path))
	        {
                while(($file = readdir($handle)) !== FALSE){
                        $files[] = $file;
                }
                closedir($handle);
	        }
		}*/

		return $files;
		
	}
}

$obj = new connectToServer();
$obj->connectServerAndPerformActivity();


// Run below command to execute this script
// cd /var/www/html/router_app/public/excercise2
// php connect_to_server_1.php
?>