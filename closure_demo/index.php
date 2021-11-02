<?php
$b = "aaaa";
$a = function(){
return "abc";
};
echo !($b instanceof \Closure) ? "false" : "true";
