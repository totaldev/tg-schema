<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\New;

use Totaldev\TgSchema\TdObject;

/**
 * Contains privacy settings for chats with non-contacts.
 */
class NewChatPrivacySettings extends TdObject
{
    public const TYPE_NAME = 'newChatPrivacySettings';

    public function __construct(
        /**
         * True, if non-contacts users are able to write first to the current user. Telegram Premium subscribers are able to write first regardless of this setting.
         */
        protected bool $allowNewChatsFromUnknownUsers,
        /**
         * Number of Telegram Stars that must be paid for every incoming private message by non-contacts; 0-getOption("paid_message_star_count_max"). If positive, then allow_new_chats_from_unknown_users must be true. The current user will receive getOption("paid_message_earnings_per_mille") Telegram Stars for each 1000 Telegram Stars paid for message sending. Can be positive, only if getOption("can_enable_paid_messages") is true.
         */
        protected int  $incomingPaidMessageStarCount
    ) {}

    public static function fromArray(array $array): NewChatPrivacySettings
    {
        return new static(
            $array['allow_new_chats_from_unknown_users'],
            $array['incoming_paid_message_star_count'],
        );
    }

    public function getAllowNewChatsFromUnknownUsers(): bool
    {
        return $this->allowNewChatsFromUnknownUsers;
    }

    public function getIncomingPaidMessageStarCount(): int
    {
        return $this->incomingPaidMessageStarCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                              => static::TYPE_NAME,
            'allow_new_chats_from_unknown_users' => $this->allowNewChatsFromUnknownUsers,
            'incoming_paid_message_star_count'   => $this->incomingPaidMessageStarCount,
        ];
    }
}
