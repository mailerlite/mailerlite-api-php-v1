<?php

namespace MailerLite;
	
class Campaigns extends Base\Rest {
	
	public function __construct($apiKey)
	{
		$this->name = 'campaigns';
		parent::__construct($apiKey);
	}

	public function getRecipients()
	{
		$this->path .= 'recipients/';
		return $this->execute('GET');
	}

	public function getOpens()
	{
		$this->path .= 'opens/';
		return $this->execute('GET');
	}

	public function getClicks()
	{
		$this->path .= 'clicks/';
		return $this->execute('GET');
	}

	public function getUnsubscribes()
	{
		$this->path .= 'unsubscribes/';
		return $this->execute('GET');
	}

	public function getBounces()
	{
		$this->path .= 'bounces/';
		return $this->execute('GET');
	}

	public function getJunk()
	{
		$this->path .= 'junks/';
		return $this->execute('GET');
	}

}
