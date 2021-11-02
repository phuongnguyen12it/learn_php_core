<?php

namespace ref;

class Book
{
    private $author;
    public function setAuthor($author)
    {
        $this->author = $author;
    }
    public function getAuthor()
    {
        return $this->author;
    }
}