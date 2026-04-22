$files = @(
    "C:\Users\nosou\Desktop\sky\skyclean\bucharest\index.html",
    "C:\Users\nosou\Desktop\sky\skyclean\curatare-canapele\index.html",
    "C:\Users\nosou\Desktop\sky\skyclean\curatare-covoare\index.html",
    "C:\Users\nosou\Desktop\sky\skyclean\curatare-mochete\index.html",
    "C:\Users\nosou\Desktop\sky\skyclean\curatare-saltele\index.html",
    "C:\Users\nosou\Desktop\sky\skyclean\drumul-taberei\index.html",
    "C:\Users\nosou\Desktop\sky\skyclean\ilfov\index.html",
    "C:\Users\nosou\Desktop\sky\skyclean\militari\index.html",
    "C:\Users\nosou\Desktop\sky\skyclean\otopeni\index.html",
    "C:\Users\nosou\Desktop\sky\skyclean\pipera\index.html",
    "C:\Users\nosou\Desktop\sky\skyclean\sector-1\index.html",
    "C:\Users\nosou\Desktop\sky\skyclean\sector-2\index.html",
    "C:\Users\nosou\Desktop\sky\skyclean\sector-3\index.html",
    "C:\Users\nosou\Desktop\sky\skyclean\sector-4\index.html",
    "C:\Users\nosou\Desktop\sky\skyclean\sector-5\index.html",
    "C:\Users\nosou\Desktop\sky\skyclean\sector-6\index.html",
    "C:\Users\nosou\Desktop\sky\skyclean\voluntari\index.html"
)

$replacements = [ordered]@{
    "'hero-subtitle2': 'Prețuri transparente • Programări rapide în 24h'" = "'hero-subtitle2': 'Prețuri clare și fixe • Programări rapide în 24h'"
    "'pricing-title': 'Prețuri transparente'" = "'pricing-title': 'Prețuri clare și fixe'"
    "'pricing-note': '*Deplasare gratuită pentru comenzi peste 200 RON'" = "'pricing-note': 'Prețurile sunt fixe pentru utilizare normală și NU cresc în funcție de gradul de murdărie. *Deplasare gratuită pentru comenzi peste 200 RON'"
    "'hero-subtitle2': 'Transparent prices • Fast appointments in 24h'" = "'hero-subtitle2': 'Clear and fixed prices • Fast appointments in 24h'"
    "'pricing-title': 'Transparent pricing'" = "'pricing-title': 'Clear and fixed prices'"
    "'pricing-note': '*Free travel for orders over 200 RON'" = "'pricing-note': 'Prices are fixed for normal use and DO NOT increase based on the level of dirt. *Free travel for orders over 200 RON'"
    'data-translate="hero-subtitle2">Prețuri transparente • Programări rapide în 24h</p>' = 'data-translate="hero-subtitle2">Prețuri clare și fixe • Programări rapide în 24h</p>'
    'data-translate="pricing-title">Prețuri transparente</h2>' = 'data-translate="pricing-title">Prețuri clare și fixe</h2>'
    '*Deplasare gratuită pentru comenzi peste 200 RON' = 'Prețurile sunt fixe pentru utilizare normală și NU cresc în funcție de gradul de murdărie. *Deplasare gratuită pentru comenzi peste 200 RON'
    'Estimated Prices' = 'Clear and Fixed Prices'
    'Prețuri orientative' = 'Prețuri clare și fixe'
}

foreach ($file in $files) {
    if (Test-Path $file) {
        $content = Get-Content $file -Raw
        if ($null -ne $content) {
            foreach ($key in $replacements.Keys) {
                $content = $content.Replace($key, $replacements[$key])
            }
            [System.IO.File]::WriteAllText($file, $content, [System.Text.Encoding]::UTF8)
            Write-Host "Updated $file"
        } else {
            Write-Host "File $file is empty or could not be read."
        }
    } else {
        Write-Host "File not found: $file"
    }
}
