<?php
// Dev-only router for PHP's built-in server: mirrors the IIS URL Rewrite rules in web.config
// so clean URLs (e.g. /about-us, /blog/slug) work locally.
// Production IIS ignores this file entirely — web.config handles routing there.
// Usage: php -S localhost:8000 -t . router.php

$docroot = $_SERVER['DOCUMENT_ROOT'];
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path = '/' . ltrim((string) $path, '/');
$slug = trim($path, '/');

// Real files (including .php, images, css, js) are served directly
if ($slug !== '' && is_file($docroot . '/' . $slug)) {
    return false;
}

// Directory with an index.php (e.g. /admissions-open-2026-27)
if ($slug !== '' && is_dir($docroot . '/' . $slug)
    && is_file($docroot . '/' . $slug . '/index.php')) {
    require $docroot . '/' . $slug . '/index.php';
    return true;
}

$isStatic = preg_match('/\.(jpg|jpeg|png|gif|css|js|pdf|svg|ico|webp|apk|zip|rar|txt|xml|json|mp4|webm|ogg|map|woff|woff2|ttf|eot)$/i', $slug);

// /proxy/name -> proxy/name.php
if (preg_match('#^proxy/([A-Za-z0-9_-]+)$#i', $slug, $m)
    && is_file($docroot . '/proxy/' . $m[1] . '.php')) {
    require $docroot . '/proxy/' . $m[1] . '.php';
    return true;
}

// /home and /index -> index.php
if (preg_match('#^(home|index)$#i', $slug)) {
    require $docroot . '/index.php';
    return true;
}

// /blog/slug -> detail.php?slug=
if (preg_match('#^blog/([A-Za-z0-9-]+)$#i', $slug, $m)
    && is_file($docroot . '/detail.php')) {
    $_GET['slug'] = $m[1];
    require $docroot . '/detail.php';
    return true;
}

// /view/slug -> detail-view.php?slug=
if (preg_match('#^view/([A-Za-z0-9-]+)$#i', $slug, $m)
    && is_file($docroot . '/detail-view.php')) {
    $_GET['slug'] = $m[1];
    require $docroot . '/detail-view.php';
    return true;
}

// Clean URL -> existing .php file (e.g. /smart-classrooms -> smart-classrooms.php)
if (!$isStatic && $slug !== '' && is_file($docroot . '/' . $slug . '.php')) {
    require $docroot . '/' . $slug . '.php';
    return true;
}

// CMS page template fallback (single-segment slugs only)
if (!$isStatic && $slug !== '' && strpos($slug, '/') === false) {
    $_GET['page'] = $slug;
    require $docroot . '/page-template.php';
    return true;
}

// Root and anything unmatched
if ($slug === '') {
    require $docroot . '/index.php';
    return true;
}

return false;
