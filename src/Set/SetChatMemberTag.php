<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes the tag or custom title of a chat member; requires can_manage_tags administrator right to change tag of other users; for basic groups and
 * supergroups only.
 */
class SetChatMemberTag extends TdFunction
{
    public const string TYPE_NAME = 'setChatMemberTag';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int    $chatId,
        /**
         * The new tag of the member in the chat; 0-16 characters without emoji.
         */
        protected string $tag,
        /**
         * Identifier of the user, which tag is changed. Chats can't have member tags.
         */
        protected int    $userId,
    ) {}

    public static function fromArray(array $array): SetChatMemberTag
    {
        return new static(
            chatId: $array['chat_id'],
            tag   : $array['tag'],
            userId: $array['user_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getTag(): string
    {
        return $this->tag;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setTag(string $value): static
    {
        $this->tag = $value;

        return $this;
    }

    public function setUserId(int $value): static
    {
        $this->userId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'tag'     => $this->tag,
            'user_id' => $this->userId,
        ];
    }
}
