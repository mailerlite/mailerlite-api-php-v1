<?php

namespace MailerLite;
	
class Campaigns extends Base\Rest
{
	function __construct( $api_key )
	{
		$this->name = 'campaigns';

		parent::__construct($api_key);
	}

	function getRecipients( )
	{
		$this->path .= 'recipients/';

		return $this->execute( 'GET' );
	}

	function getOpens( )
	{
		$this->path .= 'opens/';

		return $this->execute( 'GET' );
	}

	function getClicks( )
	{
		$this->path .= 'clicks/';

		return $this->execute( 'GET' );
	}

	function getUnsubscribes( )
	{
		$this->path .= 'unsubscribes/';

		return $this->execute( 'GET' );
	}

	function getBounces( )
	{
		$this->path .= 'bounces/';

		return $this->execute( 'GET' );
	}

	function getJunk( )
	{
		$this->path .= 'junks/';

		return $this->execute( 'GET' );
	}
}