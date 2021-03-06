<?php
/*
 * This file is part of The Framework Pagination Library.
 *
 * (c) Natan Felles <natanfelles@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
/**
 * HTTP Header Link.
 *
 * @see https://tools.ietf.org/html/rfc5988
 *
 * @var Framework\Pagination\Pager $pager
 */
$links = '';

if ($pager->getPreviousPage() > 0) {
    $links .= '<' . $pager->getFirstPageURL() . '>; rel="first",';
    $links .= '<' . $pager->getPreviousPageURL() . '>; rel="prev"';
}

if ($pager->getNextPage()) {
    if ($links !== '') {
        $links .= ',';
    }
    $links .= '<' . $pager->getNextPageURL() . '>; rel="next",';
    $links .= '<' . $pager->getLastPageURL() . '>; rel="last"';
}

echo $links;
