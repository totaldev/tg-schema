<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The maximum number of invite links for a chat folder
 */
class PremiumLimitTypeChatFolderInviteLinkCount extends PremiumLimitType
{
    public const TYPE_NAME = 'premiumLimitTypeChatFolderInviteLinkCount';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumLimitTypeChatFolderInviteLinkCount
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
