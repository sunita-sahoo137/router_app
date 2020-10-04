<?php
class fileGenerator{
	public function createExtractFile($n){
		if(!is_numeric($n)){
			echo "Error: Input should be an integer".PHP_EOL;exit;
		}

		$this->createDirectory('dummy_dir');
		for($i=1; $i<=$n; $i++){
			$result = $this->createFile("dummy_dir/file".$i.".txt");
		}
		$this->zipDirectory('dummy_dir/','dummy_dir.zip');
		//$this->downloadZipFIle('dummy_dir.zip');
		$this->extractZipFile('dummy_dir.zip');

	}
	public function createDirectory($path){
		if (!file_exists($path)) {
		    mkdir($path, 0777, true);
		}
	}
	public function createFile($filepath){
		$content = "Dummy text here";
		$fp = fopen($filepath,"wb");
		fwrite($fp,$content);
		fclose($fp);
		echo $filepath." created.".PHP_EOL;
	}

	public function zipDirectory($path,$zipfilename){
		// Create new zip class 
		$zip = new ZipArchive; 
		   
		if($zip -> open($zipfilename, ZipArchive::CREATE ) === TRUE) { 
		    // Store the path into the variable 
		    $dir = opendir($path); 
		     //  print_r(readdir($dir));
		    while($file = readdir($dir)) {  
		        if(is_file($path.$file)) { 
		            $zip -> addFile($path.$file, $file);
		        } 
		    } 
		    $zip ->close(); 
		} 

		echo $zipfilename." created".PHP_EOL;
	}

	public function downloadZipFIle($zip_path){
		/*$file = fopen($zip_path, "w+");
		fputs($file, $data);
		fclose($file);

		echo $zip_path." downloaded ".PHP_EOL;*/

		$filename = "dummy_dir.zip";

	  if (file_exists($filename)) {
	     header('Content-Type: application/zip');
	     header('Content-Disposition: attachment; filename="'.basename($filename).'"');
	     header('Content-Length: ' . filesize($filename));

	     flush();
	     readfile($filename);
	     // delete file
	     unlink($filename);
	 
  		 }
	}

	public function extractZipFile($zip_path){
		// unzip
		$zip = new ZipArchive;
		$res = $zip->open($zip_path);
		if ($res === TRUE) {
		    $zip->extractTo('extracted_files'); // directory to extract contents to
		    $zip->close();
		    echo $zip_path.' extracted; '.PHP_EOL;
		    unlink($zip_path);
		    echo $zip_path.' deleted; '.PHP_EOL;
		} else {
		    echo ' unzip failed; '.PHP_EOL;
		}
	}

}


$obj = new fileGenerator();
$obj->createExtractFile($argv[1]);


// Run below command to execute this script
// cd /var/www/html/router_app/public/excercise2
// php create_extract_file_2.php 10

?>