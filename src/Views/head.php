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
 * @var Framework\Pagination\Pager $pager
 */
?>

<?php if ($pager->getPreviousPage() > 0) : ?>
	<link rel="prev" href="<?= $pager->getPreviousPageURL() ?>">
<?php endif ?>
<link rel="canonical" href="<?= $pager->getCurrentPageURL() ?>">
<?php if ($pager->getNextPage()) : ?>
	<link rel="next" href="<?= $pager->getNextPageURL() ?>">
<?php endif ?>
