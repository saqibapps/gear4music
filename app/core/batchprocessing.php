<?php

/**
 * Class BatchProcessing
 * @author Saqib
 *
 * Handles the batch processing of the consignments
 * Will create a file, add records and close the file.
 *  
 */
class BatchProcessing {
    
    private $batchfile = DATA . DIRECTORY_SEPARATOR . "batchfile.txt" ;
    protected $batch_filehandle;
    public $consignment;
    
    public function __construct( ) {        
        
    }
	
	//open specified batch file
    public function openBatchFile( ) {
	    
        $this->batch_filehandle = new File($this->batchfile);
         echo "Batch file opened <br />";
	}
	
	// function to add single consignment to batchfile only
	public function addToBatchfile( $consignment = false ) {

	    $consignment = $this->consignment->process_consignment_for_file();
	    $this->batch_filehandle->appendTofile( $consignment );
	    
	    echo "Consignment added to batch file <br />";
	}

	// close batch file
	public function closeBatchFile( $file = false ) {
	    
        $this->batch_filehandle->closefile();
        echo "Batch file closed <br />";
	}
	
	// run test bacth file
	public function runBatch() {
        
	    echo "Batch run started <br />";
	    $this->openBatchFile();
	    $this->addToBatchfile();
	    $this->closeBatchFile();
	}

}


