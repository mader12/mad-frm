<?php

namespace Mad\Interfaces;

/**
 * Resolves a callable.
 *
 * @package Slim
 * @since 0.0.1
 */
interface RouteInterface {
    
    /**
     * @param string $url 
     */
    public function parseUrl();
    
}

