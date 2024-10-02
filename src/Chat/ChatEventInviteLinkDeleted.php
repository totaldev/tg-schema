<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A revoked chat invite link was deleted.
 */
class ChatEventInviteLinkDeleted extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventInviteLinkDeleted';

    public function __construct(
        /**
         * The invite link.
         */
        protected ChatInviteLink $inviteLink
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventInviteLinkDeleted
    {
        return new static(
            TdSchemaRegistry::fromArray($array['invite_link']),
        );
    }

    public function getInviteLink(): ChatInviteLink
    {
        return $this->inviteLink;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'invite_link' => $this->inviteLink->typeSerialize(),
        ];
    }
}
