<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;

/**
 * Contains information about a link to boost a chat.
 */
class ChatBoostLinkInfo extends TdObject
{
    public const TYPE_NAME = 'chatBoostLinkInfo';

    public function __construct(
        /**
         * True, if the link will work for non-members of the chat.
         */
        protected bool $isPublic,
        /**
         * Identifier of the chat to which the link points; 0 if the chat isn't found.
         */
        protected int  $chatId
    ) {}

    public static function fromArray(array $array): ChatBoostLinkInfo
    {
        return new static(
            $array['is_public'],
            $array['chat_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getIsPublic(): bool
    {
        return $this->isPublic;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'is_public' => $this->isPublic,
            'chat_id'   => $this->chatId,
        ];
    }
}
