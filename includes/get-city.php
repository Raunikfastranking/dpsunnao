<?php
require_once dirname(__DIR__) . '/proxy/config.php';

// Fetches cities associated with branch (213 items, not paginated)
$branchId = 8;

// --- Simple Caching (same pattern as grade-api.php) ---
$cacheFile = __DIR__ . '/cache/cities_cache.json';
$cacheTime = 86400; // 24 hours – city list changes very rarely

if (file_exists($cacheFile) && (time() - filemtime($cacheFile)) < $cacheTime) {
    $cachedData = json_decode(file_get_contents($cacheFile), true);
    if (is_array($cachedData)) {
        return $cachedData;
    }
}
// --- End Caching ---

$apiUrl = "https://dps.allenhouseschools.com/api/cities/{$branchId}";

$ch = curl_init($apiUrl);
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT        => 15,          // Slightly longer – large list
    CURLOPT_CONNECTTIMEOUT => 5,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_HTTPHEADER     => api_auth_headers(),
]);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($response === false || $httpCode !== 200) {
    // Serve stale cache if API fails
    if (file_exists($cacheFile)) {
        $cachedData = json_decode(file_get_contents($cacheFile), true);
        if (is_array($cachedData)) {
            return $cachedData;
        }
    }
    return [];
}

$json = json_decode($response, true);

// Handle both possible structures: wrapped {status, count, data: [...]} or direct array
if (is_array($json) && isset($json['status']) && $json['status'] === 'success') {
    $cities = $json['data'] ?? [];           // wrapped version
} elseif (is_array($json)) {
    $cities = $json;                         // direct array version
} else {
    return [];
}

// Save to cache
$cacheDir = dirname($cacheFile);
if (!is_dir($cacheDir)) {
    mkdir($cacheDir, 0755, true);
}
file_put_contents($cacheFile . '.tmp', json_encode($cities), LOCK_EX);
rename($cacheFile . '.tmp', $cacheFile);

return $cities;
?>