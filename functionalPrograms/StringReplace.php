<?php
include 'Utility.php';

echo ($replacestring="Hello <<UserName>>, How are you?");
echo "\nEnter the name :";

if(($username=stringReplace())!="")
{
    echo str_replace("<<UserName>>",$username,$replacestring);
}
else
     echo "Username should be minimun 3 character";
?>
