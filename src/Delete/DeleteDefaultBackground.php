<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Delete;

use Totaldev\TgSchema\TdFunction;

/**
 * Deletes default background for chats.
 */
class DeleteDefaultBackground extends TdFunction
{
    public const TYPE_NAME = 'deleteDefaultBackground';

    public function __construct(
        /**
         * Pass true if the background is deleted for a dark theme.
         */
        protected bool $forDarkTheme
    ) {}

    public static function fromArray(array $array): DeleteDefaultBackground
    {
        return new static(
            $array['for_dark_theme'],
        );
    }

    public function getForDarkTheme(): bool
    {
        return $this->forDarkTheme;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'for_dark_theme' => $this->forDarkTheme,
        ];
    }
}
