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
    public const TYPE_NAME = 'sharedChat';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int    $chatId,
        /**
         * Title of the chat; for bots only.
         */
        protected string $title,
        /**
         * Username of the chat; for bots only.
         */
        protected string $username,
        /**
         * Photo of the chat; for bots only; may be null.
         */
        protected ?Photo $photo
    ) {}

    public static function fromArray(array $array): SharedChat
    {
        return new static(
            $array['chat_id'],
            $array['title'],
            $array['username'],
            isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null,
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

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'chat_id'  => $this->chatId,
            'title'    => $this->title,
            'username' => $this->username,
            'photo'    => (isset($this->photo) ? $this->photo : null),
        ];
    }
}
