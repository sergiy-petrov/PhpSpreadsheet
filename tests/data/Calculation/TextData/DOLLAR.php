<?php

declare(strict_types=1);

return [
    [
        '$123.46',
        123.456,
        2,
    ],
    [
        '$123.46',
        123.456,
    ],
    [
        '$123.32',
        123.321,
        2,
    ],
    [
        '-$123.32',
        -123.321,
        2,
    ],
    [
        '$1,235,000',
        1234567,
        -3,
    ],
    [
        '$1,200,000',
        1234567,
        -5,
    ],
    [
        '-$1,200,000',
        -1234567,
        -5,
    ],
    [
        '#VALUE!',
        'ABC',
        2,
    ],
    [
        '#VALUE!',
        123.456,
        'ABC',
    ],
    'omitted amount' => ['exception'],
    'omitted decimals' => ['$123.46', 123.456],
    'null decimals' => ['$123', 123.456, null],
    'boolean decimals' => ['$123.5', 123.456, true],
    'boolean value' => ['$1.00', true],
    'null value' => ['$0.00', null],
];
