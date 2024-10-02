<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\New;

use Totaldev\TgSchema\TdObject;

/**
 * Contains privacy settings for new chats with non-contacts.
 */
class NewChatPrivacySettings extends TdObject
{
    public const TYPE_NAME = 'newChatPrivacySettings';

    public function __construct(
        /**
         * True, if non-contacts users are able to write first to the current user. Telegram Premium subscribers are able to write first regardless of this setting.
         */
        protected bool $allowNewChatsFromUnknownUsers
    ) {}

    public static function fromArray(array $array): NewChatPrivacySettings
    {
        return new static(
            $array['allow_new_chats_from_unknown_users'],
        );
    }

    public function getAllowNewChatsFromUnknownUsers(): bool
    {
        return $this->allowNewChatsFromUnknownUsers;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                              => static::TYPE_NAME,
            'allow_new_chats_from_unknown_users' => $this->allowNewChatsFromUnknownUsers,
        ];
    }
}
