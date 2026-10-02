<?php

declare(strict_types=1);

if (!function_exists('dps_web_base')) {
    function dps_web_base(): string
    {
        // Use PHP_SELF which is always a web URL path, not filesystem path
        $script = $_SERVER['PHP_SELF'] ?? $_SERVER['SCRIPT_NAME'] ?? '';
        $script = str_replace('\\', '/', (string) $script);
        
        // Remove filesystem path if present
        if (strpos($script, ':/') !== false) {
            // This is a Windows filesystem path, extract just the web path
            $script = str_replace('C:/xampp/htdocs/delhi', '', $script);
            $script = str_replace('c:/xampp/htdocs/delhi', '', $script);
        }
        
        if ($script === '' || $script === '/') {
            return '';
        }
        $dir = dirname($script);
        $dir = str_replace('\\', '/', $dir);
        if ($dir === '/' || $dir === '.' || $dir === '') {
            return '';
        }

        return rtrim($dir, '/');
    }

    function dps_asset_url(string $relativeUnderAssets): string
    {
        $relativeUnderAssets = ltrim(str_replace('\\', '/', $relativeUnderAssets), '/');
        $base = dps_web_base();

        if ($base === '') {
            return '/assets/' . $relativeUnderAssets;
        }

        return $base . '/assets/' . $relativeUnderAssets;
    }
}
