<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * The text uses HTML-style formatting. The same as Telegram Bot API "HTML" parse mode
 */
class TextParseModeHTML extends TextParseMode
{
    public const TYPE_NAME = 'textParseModeHTML';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): TextParseModeHTML
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
