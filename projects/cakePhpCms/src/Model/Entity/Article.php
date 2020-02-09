<?php 
// src/Model/Entity/Article.php
namespace App\Model\Entity;

use Cake\Collection\Collection;
use Cake\ORM\Entity;

class Article extends Entity
{
    protected $_accessible = [
        '*' => true,
        'id' => false,
        'slug' => false,
        'tag_string' => true,
        'blurb'=> true
    ];

    protected function _getBlurb(){
        if (isset($this->_properties['blurb'])) {
            return $this->_properties['blurb'];
        }
        $blurbLength = strlen($this->body) >= 35 ? 35 : strlen($this->body);

        return substr($this->body, 0, $blurbLength) . "...";
    }

    protected function _getTagString()
    {
        if (isset($this->_properties['tag_string'])) {
            return $this->_properties['tag_string'];
        }
        if (empty($this->tags)) {
            return '';
        }
        $tags = new Collection($this->tags);
        $str = $tags->reduce(function ($string, $tag) {
            return $string . $tag->title . ', ';
        }, '');
        return trim($str, ', ');
    }
}
