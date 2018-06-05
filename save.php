<?php
require_once "../config.php";

use \Tsugi\Core\LTIX;
use \Tsugi\Core\Settings;

// No parameter means we require CONTEXT, USER, and LINK
$LAUNCH = LTIX::requireData();

// Handle Post Data
$p = $CFG->dbprefix;

$body = file_get_contents('php://input');
$hax = Settings::linkSet('hax', $body);

echo("Yay!\n");


