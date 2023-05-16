<?php   
$xml=<<<ST
<coder>
<name>Min Kyaw Thu</name>
<age>19</age>
<subject>HTML CSS JAVA </subject>
</coder>
ST;
$data = simplexml_load_string($xml);
print_r($data);
?>