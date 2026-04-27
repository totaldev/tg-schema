<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Chat\ChatPhotoInfo;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A chat photo was changed.
 */
class UpdateChatPhoto extends Update
{
    public const string TYPE_NAME = 'updateChatPhoto';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int            $chatId,
        /**
         * The new chat photo; may be null.
         */
        protected ?ChatPhotoInfo $photo,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateChatPhoto
    {
        return new static(
            chatId: $array['chat_id'],
            photo : (isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null),
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getPhoto(): ?ChatPhotoInfo
    {
        return $this->photo;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setPhoto(?ChatPhotoInfo $value): static
    {
        $this->photo = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'photo'   => (null !== $this->photo ? $this->photo->jsonSerialize() : null),
        ];
    }
}
