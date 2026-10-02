<?php
// Central config for API base URL and JWT auth
// Copy this file to config.php and fill in the real values.
define('API_BASE_URL', 'https://example.com');
define('DPS_UNNAO_BRANCH_ID', 0);
define('API_JWT_TOKEN', 'your-jwt-token-here');

if (!function_exists('api_auth_headers')) {
    /**
     * @param string[] $extra e.g. ['Content-Type: application/json']
     * @return string[]
     */
    function api_auth_headers(array $extra = []): array
    {
        $headers = ['Authorization: Bearer ' . API_JWT_TOKEN];
        foreach ($extra as $header) {
            $headers[] = $header;
        }
        return $headers;
    }
}
