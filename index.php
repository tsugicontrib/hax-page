<?php
require_once "../config.php";

use \Tsugi\Core\LTIX;
use \Tsugi\Core\Settings;

// No parameter means we require CONTEXT, USER, and LINK
$LAUNCH = LTIX::requireData();

// Handle Post Data
$p = $CFG->dbprefix;

$hax = Settings::linkGet('hax', false);

// Render view
$OUTPUT->header();
if ( $USER->instructor ) {
?>
<script src="https://cdn.rawgit.com/LRNWebComponents/hax-builds/0.17.0/builds/bower_components/webcomponentsjs/webcomponents.min.js"></script>
<script src="https://cdn.rawgit.com/LRNWebComponents/hax-builds/0.17.0/builds/bower_components/document-register-element/build/document-register-element.js"></script>
<link rel="import" href="https://cdn.rawgit.com/LRNWebComponents/hax-builds/0.17.0/builds/wysiwyg-hax.html">
<?php
} else {
?>
<link rel="import" href="https://cdn.rawgit.com/LRNWebComponents/hax-builds/0.17.0/builds/elements.html">
<?php
}
$OUTPUT->bodyStart();
$OUTPUT->topNav();
$OUTPUT->welcomeUserCourse();
$OUTPUT->flashMessages();

if ( $USER->instructor ) {
?>
<br/>
<br/>
<br/>
<wysiwyg-hax open-default="" align="left" app-store-connection="{&quot;url&quot;:&quot;example-store.json&quot;}" end-point="<?= addSession('save.php') ?>">
<?= $hax ?>
</wysiwyg-hax>
<?php
} else {
echo($hax);
}


$OUTPUT->footerStart();
$OUTPUT->footerEnd();

