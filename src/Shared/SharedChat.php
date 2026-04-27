<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Shared;

use Totaldev\TgSchema\Photo\Photo;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about a chat shared with a bot.
 */
class SharedChat extends TdObject
{
    public const string TYPE_NAME = 'sharedChat';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int    $chatId,
        /**
         * Photo of the chat; for bots only; may be null.
         */
        protected ?Photo $photo,
        /**
         * Title of the chat; for bots only.
         */
        protected string $title,
        /**
         * Username of the chat; for bots only.
         */
        protected string $username,
    ) {}

    public static function fromArray(array $array): SharedChat
    {
        return new static(
            chatId  : $array['chat_id'],
            photo   : (isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null),
            title   : $array['title'],
            username: $array['username'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getPhoto(): ?Photo
    {
        return $this->photo;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setPhoto(?Photo $value): static
    {
        $this->photo = $value;

        return $this;
    }

    public function setTitle(string $value): static
    {
        $this->title = $value;

        return $this;
    }

    public function setUsername(string $value): static
    {
        $this->username = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'chat_id'  => $this->chatId,
            'photo'    => (null !== $this->photo ? $this->photo->jsonSerialize() : null),
            'title'    => $this->title,
            'username' => $this->username,
        ];
    }
}
