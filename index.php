<?php

/**
 * Kirby 3 Arena Embeds
 *
 * @version   0.1.0
 * @author    Tim Duvendack <timduvendack@gmail.com>
 * @copyright Tim Duvendack <timduvendack@gmail.com>
 * @link      https://github.com/kx550/kirby3-arena
 * @license   MIT
 */

Kirby::plugin('kx550/arena', [
    'tags' => [
        'arena' => [
            'attr' => [
                'class',
                'height',
                'width'
            ],
            'html' => function($tag) {
                $class = $tag->class ?? 'arena-embed';
                $height = $tag->height ?? '400';
                $width = $tag->width ?? '100%';

                return '<iframe class="' . $class . '" width="' . $width . '" height="' . $height . '" src="https://www.are.na/' . $tag->value . '/embed"></iframe>';
            }
        ]
    ]
]);
