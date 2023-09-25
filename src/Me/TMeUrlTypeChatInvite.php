<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Me;

use Totaldev\TgSchema\Chat\ChatInviteLinkInfo;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A chat invite link
 */
class TMeUrlTypeChatInvite extends TMeUrlType
{
    public const TYPE_NAME = 'tMeUrlTypeChatInvite';

    /**
     * Information about the chat invite link
     *
     * @var ChatInviteLinkInfo
     */
    protected ChatInviteLinkInfo $info;

    public function __construct(ChatInviteLinkInfo $info)
    {
        parent::__construct();

        $this->info = $info;
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
            'info' => $this->info->typeSerialize(),
        ];
    }
}
