<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

/**
 * The maximum number of added shareable chat folders.
 */
class PremiumLimitTypeShareableChatFolderCount extends PremiumLimitType
{
    public const TYPE_NAME = 'premiumLimitTypeShareableChatFolderCount';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumLimitTypeShareableChatFolderCount
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
