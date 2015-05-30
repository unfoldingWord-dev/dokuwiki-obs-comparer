<?php
class plugin_door43obscomparer_ObsComparer
{
	private $source;
	private $target;
	private $ignore_ws;
	private $ignore_punct;
	private $json;
	private $languages;
	private $catalog;

	public function __construct($source = 'en'){
		$this->source = $source;
	}
}
