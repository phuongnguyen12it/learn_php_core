<?php

namespace ref;

require_once(__DIR__.'/Author.php');
require_once(__DIR__.'/Book.php');

//$book1 = new Book;
//$book1->setAuthor("Nam Cao");//set string => error khi su dung cac method cua object author
//var_dump($book1->getAuthor());echo "<br/>";
//
//$book2 = new Book;
//$book2->setAuthor(new Author("Nam Cao","29-10-1915"));//set object Author
//var_dump($book1->getAuthor());echo "<br/>";

$reflectionClass = new \ReflectionClass("foo");