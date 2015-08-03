<?php

$functions = array();

$functions['getGoogleLinks'] = 'Extract Google links';
$functions['googleLinksSmokeTest'] = 'Extract Google links with smoke test output';

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

function getGoogleLinks($html, $limit = 100)
{
    $links = googleLinks($html, $limit);

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
