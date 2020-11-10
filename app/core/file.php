<?php

/**
 * Class File
 * @author Saqib
 *
 * Handles all File actions
 * 
 */
class File {

	public $file;
	public $filehandle;
	public $method;
	
	public function __construct( $file, $method = false ) {
	    
	    $this->file = $file;
	    $this->method = File_Method::$append;
	    
	    $this->openfile();
	}

    // open or create file
	public function openfile( ) {
	    
		// open file handle
	    $this->filehandle = fopen( $this->file , $this->method );
	}

	public function appendTofile( $consignment ) {

	    fwrite( $this->filehandle, $consignment . "\n");   
	}

	public function closefile(  ) {
    
	    fclose( $this->filehandle );
	    
	}

}

