<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Replace;

use Totaldev\TgSchema\TdFunction;

/**
 * Replaces current primary invite link for a chat with a new primary invite link. Available for basic groups, supergroups, and channels. Requires
 * administrator privileges and can_invite_users right.
 */
class ReplacePrimaryChatInviteLink extends TdFunction
{
    public const TYPE_NAME = 'replacePrimaryChatInviteLink';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int $chatId
    ) {}

    public static function fromArray(array $array): ReplacePrimaryChatInviteLink
    {
        return new static(
            $array['chat_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'chat_id' => $this->chatId,
        ];
    }
}
