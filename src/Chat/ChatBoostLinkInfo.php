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
    public const string TYPE_NAME = 'chatBoostLinkInfo';

    public function __construct(
        /**
         * Identifier of the chat to which the link points; 0 if the chat isn't found.
         */
        protected int  $chatId,
        /**
         * True, if the link will work for non-members of the chat.
         */
        protected bool $isPublic,
    ) {}

    public static function fromArray(array $array): ChatBoostLinkInfo
    {
        return new static(
            chatId  : $array['chat_id'],
            isPublic: $array['is_public'],
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

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setIsPublic(bool $value): static
    {
        $this->isPublic = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'chat_id'   => $this->chatId,
            'is_public' => $this->isPublic,
        ];
    }
}
