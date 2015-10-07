<?php

$functions = array();

$functions['getGoogleLinks'] = 'Extract Google links';
$functions['getSitemapLinks'] = 'Extract Sitemap links';
$functions['googleLinksSmokeTest'] = 'Extract Google links with smoke test output';
$functions['smokeToSitemap'] = 'Convert smoke links to sitemap output';
$functions['getH1TagsFromGoogleList'] = 'Extract google links and count the h1 tags';

/**
 * @param string $html
 * @param int $limit
 * @return array
 */
function googleLinks($html, $limit = 100)
{
    $links = [];

    /*** a new dom object ***/
    $dom = new domDocument;
    $dom->loadHTML($html);

    $items = $dom->getElementsByTagName('h3');

    /** @var DOMNode $item */
    foreach ($items as $item) {

        if ($item->hasChildNodes()) {

            $child = $item->childNodes;

            foreach ($child as $i) {

                if ($i instanceof DOMElement && $i->tagName === 'a') {

                    $link = $i->getAttribute('href');
                    if (strlen($link) <= $limit) {

                        $links[] = $link;

                    }

                }

            }

        }

    }

    return $links;
}

function getH1TagsFromGoogleList($html, $limit = 100)
{
    $links = googleLinks($html, $limit);

    echo "SKIPPED LINKS MORE THAN $limit CHARS!<br />";
    foreach ($links as $link) {

        ob_end_flush();

        countH1Tags($link);

        ob_start();

    }
}

function countH1Tags($link)
{
    $content = file_get_contents($link);

    echo $link . ' : <b>' . substr_count ($content, '</h1>') . ' "h1"</b> times found';
    echo '<br />';
}

function sitemapLinks($html, $limit = 100)
{
    $links = [];

    /*** a new dom object ***/
    $dom = new domDocument;
    $dom->loadHTML($html);

    $items = $dom->getElementsByTagName('loc');

    /** @var DOMNode $item */
    foreach ($items as $item) {

        if ($item->hasChildNodes()) {

            $child = $item->childNodes;

            foreach ($child as $i) {

                $links[] = $i->wholeText;

            }

        }

    }

    return $links;
}

function getGoogleLinks($html, $limit = 100)
{
    $links = googleLinks($html, $limit);

    echo "SKIPPED LINKS MORE THAN $limit CHARS!<br />";
    foreach ($links as $link) {

        echo $link;
        echo '<br />';

    }

}

function getSitemapLinks($content, $limit = 100)
{
    $links = sitemapLinks($content, $limit);

    echo "SKIPPED LINKS MORE THAN $limit CHARS!<br />";
    foreach ($links as $link) {

        echo $link;
        echo '<br />';

    }

}

function googleLinksSmokeTest($html, $limit = 100)
{
    $links = googleLinks($html, $limit);

    echo "SKIPPED LINKS MORE THAN $limit CHARS!<br />";
    foreach ($links as $link) {

        echo '<pre>';
        echo 'smoke_url_ok "' . $link . '"' . "\n";
        echo '    smoke_assert_body ' . htmlentities('"<!-- ctrl-webcontent: ok-->"') . "\n";
        echo '</pre>';

    }

}

function smokeToSitemap($input)
{
    $matches = [];
    $pattern = '/smoke_url_ok \"(.*)\"/';

    preg_match_all($pattern, $input, $matches);

    $links = $matches[1];

    $output = '';
    $output .= '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
    $output .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"'
        . ' xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" '
        . ' xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">' . "\n";

    $count = 0;
    $priority = '1.00';
    foreach ($links as $link) {

        $output .= '<url>'
            . '<loc>' . $link . '</loc>'
            . '<changefreq>daily</changefreq>'
            . '<priority>' . $priority . '</priority>'
            . '</url>' . "\n";
        $count++;

        if ($count > 0) {
            $priority = '0.85';
        }
        if ($count > 10) {
            $priority = '0.69';
        }


    }

    $output .= '</urlset>' . "\n";

    echo htmlentities($output);
}
