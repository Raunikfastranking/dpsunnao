<?php
/**
 * Normalize CMS-provided alt text. API responses use media_alt_text, image_alt, or image_alt_text by context.
 *
 * @param array|null $row CMS row/column/item/media object
 */
function cms_image_alt(?array $row, string $fallback = ''): string
{
    $row = is_array($row) ? $row : [];
    $raw = trim((string)(
        ($row['media_alt_text'] ?? null)
        ?: ($row['image_alt'] ?? null)
        ?: ($row['image_alt_text'] ?? null)
        ?: ''
    ));
    if ($raw === '') {
        $raw = $fallback;
    }
    return htmlspecialchars($raw, ENT_QUOTES, 'UTF-8');
}
