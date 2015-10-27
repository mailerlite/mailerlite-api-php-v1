<?php

namespace MailerLite;

class ML_Lists extends Base\Rest {

	public function __construct($apiKey)
	{
		$this->name = 'lists';
		parent::__construct($apiKey);
	}

	public function getActive()
	{
		$this->path .= 'active/';
		return $this->execute('GET');
	}

	public function getUnsubscribed()
	{
		$this->path .= 'unsubscribed/';
		return $this->execute('GET');
	}

	public function getBounced()
	{
		$this->path .= 'bounced/';
		return $this->execute('GET');
	}
	
}
