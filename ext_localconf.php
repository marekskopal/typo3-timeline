<?php

declare(strict_types=1);

use MarekSkopal\MsTimeline\Controller\TimelineController;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') or die();

ExtensionUtility::configurePlugin(
    'MsTimeline',
    'Timeline',
    [TimelineController::class => 'list'],
    [],
    ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT,
);
