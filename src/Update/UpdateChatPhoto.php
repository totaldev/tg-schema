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
    public const TYPE_NAME = 'updateChatPhoto';

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
            $array['chat_id'],
            isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null,
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

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'photo'   => (isset($this->photo) ? $this->photo : null),
        ];
    }
}
