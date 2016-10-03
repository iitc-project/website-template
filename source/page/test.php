<h2>Test Builds</h2>

<p>
These test builds are made available for those who would like to try the latest development code without
needing to build it yourself. Automated scripts should update these builds within an hour of a change being
<a href="https://github.com/iitc-project/ingress-intel-total-conversion/commits/master">committed</a> to Github.
</p>

<div class="alert alert-block alert-danger">
Test builds are built automatically. They could be <b>broken at any time</b>. If you have any doubts about using
unstable software, please use the standard <a href="?page=desktop">desktop</a> or <a href="?page=mobile">mobile</a>
builds.
</div>

<?php

include_once ( __DIR__ . "/../code/desktop-download.php" );
include_once ( __DIR__ . "/../code/mobile-download.php" );


$path = "build/test";


$timestamp_file = $path . "/.build-timestamp";
if ( file_exists ( $timestamp_file ) )
{
	$build_time = file_get_contents ( $timestamp_file );

	print "<div class=\"alert alert-info\">The current test build was built at <b>$build_time</b></div>";
}
else
{
}

$basename = basename($path);
$apkfile = "$path/IITC_Mobile-$basename.apk";

?>

<h3 id="test-mobile">Mobile test build</h3>

<div class="alert alert-block alert-info">
<b>Note</b>: Test builds have recently been changed so they can be installed alongside the standard IITC builds.
Test builds will be called "IITCm Test" - while the regular release builds remain named "IITC Mobile"
</div>

<?php


if ( file_exists($apkfile) )
{
	iitcMobileDownload ( $apkfile );
}
else
{
	print "<div class=\"alert alert-danger\">Error: <b>$apkfile</b> not found</div>\n";
}


?>

<h3 id="test-desktop">Desktop test build</h3>

<?php
iitcDesktopDownload ( $path );
?>

<hr>

<h4>Desktop test plugins</h4>

<?php
iitcDesktopPluginDownloadTable ( $path );
?>

<hr>



