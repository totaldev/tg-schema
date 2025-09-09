<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Chat\ChatPhoto;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * An updated chat photo.
 */
class MessageChatChangePhoto extends MessageContent
{
    public const TYPE_NAME = 'messageChatChangePhoto';

    public function __construct(
        /**
         * New chat photo.
         */
        protected ChatPhoto $photo
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageChatChangePhoto
    {
        return new static(
            TdSchemaRegistry::fromArray($array['photo']),
        );
    }

    public function getPhoto(): ChatPhoto
    {
        return $this->photo;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'photo' => $this->photo->typeSerialize(),
        ];
    }
}
