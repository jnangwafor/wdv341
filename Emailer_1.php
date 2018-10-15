<?php

class Emailer_1
{
	//Define class variables
	private $messageOut ="";
	
	private $msgSubject ="";
	
	private $senderAddress ="";
	
	private $sendToAddress ="";
	
	//Define methods of the class
	//default constructor
	
	public function __constuct()
	{
		
	}
	//create set methods
	public function setMessageOut($inMessageOut)
	{
		$this->messageOut = $inMessageOut;
	}
	public function setMsgSubject($inMsgSubject)
	{
		$this->msgSubject = $inMsgSubject;
	}
	public function setSenderAddress($inSenderAddress)
	{
		$this->senderAddress = $inSenderAddress;
	}
	public function setSendToAddress($inSendToAddress)
	{
		$this->sendToAddress = $inSendToAddress;
	}
	
	//create get methods
	public function getMessageOut()
	{
		return $this->messageOut;
	}
	public function getMsgSubject()
	{
		return $this->msgSubject;
	}
	public function getSenderAddress()
	{
		return $this->senderAddress;
	}
	public function getSendToAddress()
	{
		return $this->sendToAddress;
	}
	
	public function sendEmail()
	{
		$additionalHeader = "From: $this->senderAddress";
		echo "<h1>Additional headers $additionalHeaders</h1>";
		mail($this->SendToAddress, $this->msgSubject,$this->messageOut, 
			 $this->$additionalHeader); 
	}
	
}




?>