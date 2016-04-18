<?php
class Release {
	public $downloadLink = NULL;
	public $buttonClass = NULL;
	public $downloadLabel = NULL;
	public $releaseNotesLink = NULL;
	public function __construct($dlink, $btnClass, $dLabel, $relLink) {
		$this->downloadLink = $dlink;
		$this->buttonClass = $btnClass;
		$this->downloadLabel = $dLabel;
		$this->releaseNotesLink = $relLink;
	}
}
$releases = array (
		new Release ( "#", "orange", "AryaLinux 2016.04 Mate", "#" ),
		new Release ( "#", "blue", "AryaLinux 2016.04 XFCE", "#" ) 
);
?>