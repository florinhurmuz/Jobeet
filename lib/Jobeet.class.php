<?php

/**
 * Created by PhpStorm.
 * User: Florin
 * Date: 5/16/2017
 * Time: 12:26 AM
 */
class Jobeet
{
    static public function slugify($text)
    {
        $text = preg_replace('/\W+/', '-', $text);
        $text = strtolower(trim($text, '-'));

        return $text;
    }
}