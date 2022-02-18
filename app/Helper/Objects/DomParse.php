<?php

namespace App\Helper\Objects;

use DOMDocument;
use DOMNodeList;
use DOMXPath;

class DomParse extends DOMDocument
{
    /**
     * @param $tagName
     * @param $className
     * @return DOMNodeList|false
     */
    public function getElementsByClass($tagName, $className)
    {
        return (new DOMXpath($this))->query("//{$tagName}[contains(@class,'$className')]");
    }

    /**
     * @param $tagName
     * @param $idName
     * @return DOMNodeList|false
     */
    public function getElementsById($tagName, $idName)
    {
        return (new DOMXpath($this))->query("//{$tagName}[contains(@id,'$idName')]");
    }

}