<?php

namespace Mad\Interfaces;

/**
 * Resolves a callable.
 */
interface RouteInterface {
    
    /**
     * @param string $url 
     */
    public function parseUrl();

    /**
     * @param string $url
     */
    public function getParams();

    /**
    * @param string $url
    */
    public function throwException();

    /**
     * @param string $url
     */
    public function redirect();

}

