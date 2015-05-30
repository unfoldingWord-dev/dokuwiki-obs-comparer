<?php
/**
 * Name: VrsUpload.php
 * Description: A Dokuwiki syntax plugin to display a page for uploading OBS audio files for VRS.
 *
 * Author: Richard Mahn
 * Date:   2015-05-24
 */

// must be run within Dokuwiki
if(!defined('DOKU_INC')) die();

// $door43shared is a global instance, and can be used by any of the door43 plugins
if (empty($door43shared)) {
    $door43shared = plugin_load('helper', 'door43shared');
}

/* @var $door43shared helper_plugin_door43shared */
$door43shared->loadPluginBase();

class syntax_plugin_door43obscomparer_OBSComparerSyntax extends Door43_Syntax_Plugin {

    public function __construct() {
        parent::__construct('obscomparer', 'comparer.html');
    }

	protected function getTextToRender($match) {
		//$obsComparer = new plugin_door43obscomparer_ObsComparer();
		return "test222444";
	}
}
