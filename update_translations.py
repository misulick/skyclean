import os

files = [
    r"C:\Users\nosou\Desktop\sky\skyclean\bucharest\index.html",
    r"C:\Users\nosou\Desktop\sky\skyclean\curatare-canapele\index.html",
    r"C:\Users\nosou\Desktop\sky\skyclean\curatare-covoare\index.html",
    r"C:\Users\nosou\Desktop\sky\skyclean\curatare-mochete\index.html",
    r"C:\Users\nosou\Desktop\sky\skyclean\curatare-saltele\index.html",
    r"C:\Users\nosou\Desktop\sky\skyclean\drumul-taberei\index.html",
    r"C:\Users\nosou\Desktop\sky\skyclean\ilfov\index.html",
    r"C:\Users\nosou\Desktop\sky\skyclean\militari\index.html",
    r"C:\Users\nosou\Desktop\sky\skyclean\otopeni\index.html",
    r"C:\Users\nosou\Desktop\sky\skyclean\pipera\index.html",
    r"C:\Users\nosou\Desktop\sky\skyclean\sector-1\index.html",
    r"C:\Users\nosou\Desktop\sky\skyclean\sector-2\index.html",
    r"C:\Users\nosou\Desktop\sky\skyclean\sector-3\index.html",
    r"C:\Users\nosou\Desktop\sky\skyclean\sector-4\index.html",
    r"C:\Users\nosou\Desktop\sky\skyclean\sector-5\index.html",
    r"C:\Users\nosou\Desktop\sky\skyclean\sector-6\index.html",
    r"C:\Users\nosou\Desktop\sky\skyclean\voluntari\index.html",
]

replacements = [
    # RO Translations
    ("'hero-subtitle2': 'Prețuri transparente • Programări rapide în 24h'", "'hero-subtitle2': 'Prețuri clare și fixe • Programări rapide în 24h'"),
    ("'pricing-title': 'Prețuri transparente'", "'pricing-title': 'Prețuri clare și fixe'"),
    ("'pricing-note': '*Deplasare gratuită pentru comenzi peste 200 RON'", "'pricing-note': 'Prețurile sunt fixe pentru utilizare normală și NU cresc în funcție de gradul de murdărie. *Deplasare gratuită pentru comenzi peste 200 RON'"),
    
    # EN Translations
    ("'hero-subtitle2': 'Transparent prices • Fast appointments in 24h'", "'hero-subtitle2': 'Clear and fixed prices • Fast appointments in 24h'"),
    ("'pricing-title': 'Transparent pricing'", "'pricing-title': 'Clear and fixed prices'"),
    ("'pricing-note': '*Free travel for orders over 200 RON'", "'pricing-note': 'Prices are fixed for normal use and DO NOT increase based on the level of dirt. *Free travel for orders over 200 RON'"),
    
    # HTML Hardcoded RO
    ('data-translate="hero-subtitle2">Prețuri transparente • Programări rapide în 24h</p>', 'data-translate="hero-subtitle2">Prețuri clare și fixe • Programări rapide în 24h</p>'),
    ('data-translate="pricing-title">Prețuri transparente</h2>', 'data-translate="pricing-title">Prețuri clare și fixe</h2>'),
    ('*Deplasare gratuită pentru comenzi peste 200 RON', 'Prețurile sunt fixe pentru utilizare normală și NU cresc în funcție de gradul de murdărie. *Deplasare gratuită pentru comenzi peste 200 RON'),

    # Additional requested replacements
    ('Estimated Prices', 'Clear and Fixed Prices'),
    ('Prețuri orientative', 'Prețuri clare și fixe'),
    ('Transparent pricing', 'Clear and fixed prices'), # Just in case it's used elsewhere as text
    ('Prețuri transparente', 'Prețuri clare și fixe'), # Just in case it's used elsewhere as text
]

for file_path in files:
    if not os.path.exists(file_path):
        print(f"File not found: {file_path}")
        continue
    
    with open(file_path, 'r', encoding='utf-8') as f:
        content = f.read()
    
    original_content = content
    for old, new in replacements:
        content = content.replace(old, new)
    
    if content != original_content:
        with open(file_path, 'w', encoding='utf-8') as f:
            f.write(content)
        print(f"Updated: {file_path}")
    else:
        print(f"No changes needed for: {file_path}")
