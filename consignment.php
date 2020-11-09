<?php

/**
 * Consignment class
 * 
 * Generates consignment from data passed in
 * @array $consigment
 */
class Consignment
{
	public id;
	public ccid; // customer consignment id
	public weight;
	public length;
	public width;
	public height;
	public contents;
	public declarations;
	public recipientname;
	public recipientaddress;
	public recipientphone;
	public recipientemail;
	public depot;
	public courier;
	public datecreated;
	public createdby;
	public dateupdated;

	function __construct( $raw_consigment_passed_in )
	{
		# pass in all raw consignment details to setup consignment object

		if( isset($raw_consigment_passed_in) && !empty($raw_consigment_passed_in) ) {

			$r = $raw_consigment_passed_in;

			$this->ccid = $r['ccid']''
			$this->weight = $r['weight'];
			$this->length = $r['length'];
			$this->width = $r['width'];
			$this->height = $r['height'];
			$this->contents =$r['contents'];
			$this->declarations = $r['declarations'];
			$this->recipientname = $r['recipientname'];
			$this->recipientaddress = $r['recipientaddress'];
			$this->recipientphone = $r['recipientphone'];
			$this->recipientemail = $r['recipientemail'];
			$this->depot = $r['depot'];
			$this->courier = $r['courier'];
			$this->datecreated = $r['datecreated'];
			$this->createdby = $r['createdby'];
			$this->dateupdated = $r['dateupdated'];

		} else {
			// there would be a separate error handling and messaging system
			return 'computer says no';
		}
	}




}






?>