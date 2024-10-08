<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Me;

use Totaldev\TgSchema\Chat\ChatInviteLinkInfo;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A chat invite link.
 */
class TMeUrlTypeChatInvite extends TMeUrlType
{
    public const TYPE_NAME = 'tMeUrlTypeChatInvite';

    public function __construct(
        /**
         * Information about the chat invite link.
         */
        protected ChatInviteLinkInfo $info
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): TMeUrlTypeChatInvite
    {
        return new static(
            TdSchemaRegistry::fromArray($array['info']),
        );
    }

    public function getInfo(): ChatInviteLinkInfo
    {
        return $this->info;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'info'  => $this->info->typeSerialize(),
        ];
    }
}
