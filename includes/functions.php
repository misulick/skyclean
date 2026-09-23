<?php
declare(strict_types=1);

function render_html(string $file, array $values = []): void
{
    if (!is_file($file)) {
        http_response_code(500);
        echo '<!-- Componenta HTML nu a putut fi încărcată. -->';
        return;
    }

    $html = file_get_contents($file);
    if ($html === false) {
        http_response_code(500);
        return;
    }

    foreach ($values as $name => $value) {
        $html = str_replace('{{' . strtoupper((string) $name) . '}}', (string) $value, $html);
    }

    echo $html;
}
