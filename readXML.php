<!--   .xml file read -->

<!-- First way -->
<!-- simplexml_load_file() -->
<!-- read from data.xml file -->
<?php
    $data = simplexml_load_file("data.xml");

    foreach($data as $key => $value){
        echo $key . " => " . $value . "<br>";
    }

?>


<!-- Second way -->
<!-- simplexml_load_string() -->
<?php
    $xml =<<<START
<coder>
    <name>Waifer Kolar</name>
    <age>33</age>
    <subject>PHP,C#,Python</subject>
    <married>Yes</married>
</coder>
START;

    $data = simplexml_load_string($xml);
    print_r($data);
?>