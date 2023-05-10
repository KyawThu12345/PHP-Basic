<?php 
echo "<h1>Welcome</h1>";
echo "<p>We created website.</p>";

$doc =<<<ST
"<h1>Welcome</h1>";
"<p>We created website.</p>";
ST;
echo $doc;
$do =<<<ET
"<h1>Welcome</h1>";
"<p>We created website.</p>";
ET;
echo $do;
?>