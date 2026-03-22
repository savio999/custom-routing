<?php

/**
 * Generate the base URL for the application.
 *
 * @param string 
 * @return string 
 */
function base_url(string $path = ''): string 
{
    $protocol = (! empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'];
    $script = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');
    $baseUrl = $protocol . "://" . $host . ($script !== '' ? $script : '');
    return rtrim($baseUrl, '/') . '/' . ltrim($path, '/');
}