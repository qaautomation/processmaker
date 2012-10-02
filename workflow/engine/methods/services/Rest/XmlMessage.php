<?php

require_once("FormatedMessage.php");

//Class defined to be instanced and handle XML format messages.
class XmlMessage extends FormatedMessage
{
	//call the parent Curl initialization and set the type of the message
	public function XmlMessage()
	{
		parent::__construct();
	    $this->type = "xml";
	}
	//Format the array parameter to a xml valid format. TODO: Need to find out a better way to do it.
	protected function format( array $message)
	{
		if ( empty( $message) )
		{		
			return ;
		}
		if ( is_array( $message) )
		{
			$xml = "<?xml version='1.0'?><request>";
			foreach( $message as $index => $data)
			{
				$xml .= "<".$index.">".$data."</".$index.">";
			}
			$xml .= "</request>";
		}
		return $xml;
	}
}

?>
