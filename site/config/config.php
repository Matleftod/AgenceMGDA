<?php
return [
    'thumbs' => [
    'driver' => 'gd',
    'quality' => 75,
    'overwrite' => true
    ],
    'panel' => [
        'slug' => 'admin-panel'
    ],
    'debug' => false,
    'cache' => [
        'pages' => [
            'active' => true
        ]
    ],

    // Données utilisées pour Schema.org (JSON-LD)
    'company' => [
        'name'      => 'Agence MGDA',
        'url'       => 'https://agencemgda.fr',
        'telephone' => '+33 6 76 76 30 55',
        'email'     => 'agence.mgda@gmail.com',
        'address'   => [
        // Remplis si tu veux être plus "local business"
        // 'streetAddress'   => '...',
        'addressLocality'  => 'Bègles',
        // 'postalCode'      => '...',
        'addressRegion'    => 'Nouvelle-Aquitaine',
        'addressCountry'   => 'FR',
        ],
        'areaServed' => [
        'Bègles',
        'Bordeaux',
        'Gironde',
        ],
        'sameAs' => [
        // Mets tes liens (ou laisse vide)
        // 'https://www.instagram.com/...',
        // 'https://www.linkedin.com/in/...',
        ],
        'logo' => '/assets/images/logoMGDA.png',
    ],

    // Sitemap sans plugin
    'routes' => [
        [
        'pattern' => 'sitemap.xml',
        'method'  => 'GET',
        'action'  => function () {

            $excludeSlugs = ['services', 'case-studies', 'contact'];
            $ignoreTemplates = ['error'];

            $pages = site()->index()->filter(function ($p) use ($ignoreTemplates, $excludeSlugs) {
            if ($p->isDraft()) return false;
            if (in_array($p->template()->name(), $ignoreTemplates, true)) return false;
            if (in_array($p->slug(), $excludeSlugs, true)) return false;
            return true;
            });

            $urls = $pages->map(function ($p) {
            return [
                'loc' => $p->isHomePage() ? rtrim($p->url(), '/') . '/' : $p->url(),
                'lastmod' => date('c', $p->modified()),
            ];
            });

            $xml = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
            $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;

            foreach ($urls as $u) {
            $xml .= '  <url>' . PHP_EOL;
            $xml .= '    <loc>' . htmlspecialchars($u['loc'], ENT_XML1) . '</loc>' . PHP_EOL;
            $xml .= '    <lastmod>' . htmlspecialchars($u['lastmod'], ENT_XML1) . '</lastmod>' . PHP_EOL;
            $xml .= '  </url>' . PHP_EOL;
            }

            $xml .= '</urlset>' . PHP_EOL;

            return new Kirby\Http\Response($xml, 'application/xml', 200);
        }
        ],
    ],
];
