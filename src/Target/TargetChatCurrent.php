<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Target;

/**
 * The currently opened chat needs to be kept.
 */
class TargetChatCurrent extends TargetChat
{
    public const TYPE_NAME = 'targetChatCurrent';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): TargetChatCurrent
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
