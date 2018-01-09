<?php
/**
 * Created by PhpStorm.
 * User: Zhilevan
 * Date: 1/9/18
 * Time: 23:38
 */

namespace Drupal\ctwigfilters\TwigExtention;


class MyHumanize extends \Twig_Extension {
    public function getFilters()
    {
        return [ new \Twig_SimpleFilter('myhumanize', array($this, 'myHumanize'))];
    }

    public function getName()
    {
        return 'ctwigfilters.twig_extension';
    }

    public static function myHumanize($string)
    {
        $str = trim(strtolower($str));
        $str = preg_replace('/[^a-z0-9\s+]/', '', $str);
        $str = preg_replace('/\s+/', ' ', $str);
        $str = explode(' ', $str);
        $str = array_map('ucwords', $str);
        return implode(' ', $str);
    }
}