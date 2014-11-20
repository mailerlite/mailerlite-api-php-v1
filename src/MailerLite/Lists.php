<?php

namespace MailerLite;

class Lists extends Base\Rest
{
	function ML_Lists( $api_key )
	{
		$this->name = 'lists';

		parent::__construct($api_key);
	}

	function getActive( )
	{
		$this->path .= 'active/';

		return $this->execute( 'GET' );
	}

	function getUnsubscribed( )
	{
		$this->path .= 'unsubscribed/';

		return $this->execute( 'GET' );
	}

	function getBounced( )
	{
		$this->path .= 'bounced/';

		return $this->execute( 'GET' );
	}
}