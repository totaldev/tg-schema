<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

/**
 * The link is a link to the screen with information about Toncoin balance and transactions of the current user.
 */
class InternalLinkTypeMyToncoins extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeMyToncoins';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeMyToncoins
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
