<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

/**
 * The link is a link to the screen with information about Telegram Star balance and transactions of the current user.
 */
class InternalLinkTypeMyStars extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeMyStars';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeMyStars
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
