<?php

declare(strict_types=1);

$llPath = 'LLL:EXT:ms_timeline/Resources/Private/Language/locallang_db.xlf';
$table = 'tx_mstimeline_domain_model_event';

return [
    'ctrl' => [
        'title' => $llPath . ':' . $table,
        'label' => 'title',
        'label_alt' => 'date_from',
        'label_alt_force' => true,
        'sortby' => 'date_from',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'iconfile' => 'EXT:ms_timeline/Resources/Public/Icons/Extension.svg',
    ],
    'columns' => [
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    ['label' => '', 'invertStateDisplay' => true],
                ],
            ],
        ],
        'title' => [
            'label' => $llPath . ':' . $table . '.title',
            'config' => [
                'type' => 'input',
                'size' => 40,
                'max' => 255,
                'eval' => 'trim',
                'required' => true,
            ],
        ],
        'subtitle' => [
            'label' => $llPath . ':' . $table . '.subtitle',
            'config' => [
                'type' => 'input',
                'size' => 40,
                'max' => 255,
                'eval' => 'trim',
            ],
        ],
        'perex' => [
            'label' => $llPath . ':' . $table . '.perex',
            'config' => [
                'type' => 'text',
                'rows' => 3,
                'cols' => 40,
                'eval' => 'trim',
            ],
        ],
        'description' => [
            'label' => $llPath . ':' . $table . '.description',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
            ],
        ],
        'date_from' => [
            'label' => $llPath . ':' . $table . '.date_from',
            'config' => [
                'type' => 'datetime',
                'format' => 'date',
                'required' => true,
            ],
        ],
        'date_to' => [
            'label' => $llPath . ':' . $table . '.date_to',
            'config' => [
                'type' => 'datetime',
                'format' => 'date',
                'nullable' => true,
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    title, subtitle, date_from, date_to, perex, description,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    hidden
            ',
        ],
    ],
];
