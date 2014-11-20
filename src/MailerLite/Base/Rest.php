<?php

namespace MailerLite\Base;

use InvalidArgumentException;

class Rest extends RestBase
{
	var $name = '';

	var $id = null;

	function __construct( $api_key )
	{
		parent::__construct();

		$this->apiKey = $api_key;

		$this->path = $this->url . $this->name . '/';
	}

	function setId( $id )
	{
		$this->id = $id;

		if ( $this->id )
			$this->path = $this->url . $this->name . '/' . $id . '/';
		else
			$this->path = $this->url . $this->name . '/';

		return $this;
	}

	function getAll( )
	{
		return $this->execute( 'GET' );
	}

	function get( $data = null )
	{
		if (!$this->id)
			throw new InvalidArgumentException('ID is not set.');

		return $this->execute( 'GET' );
	}

	function add( $data = null )
	{
		return $this->execute( 'POST', $data );
	}

	function put( $data = null)
	{
		return $this->execute( 'PUT', $data );
	}

	function remove( $data = null )
	{
		return $this->execute( 'DELETE' );
	}
}