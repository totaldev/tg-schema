<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Chat\ChatPhoto;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A profile photo was suggested to a user in a private chat.
 */
class MessageSuggestProfilePhoto extends MessageContent
{
    public const TYPE_NAME = 'messageSuggestProfilePhoto';

    public function __construct(
        /**
         * The suggested chat photo. Use the method setProfilePhoto with inputChatPhotoPrevious to apply the photo.
         */
        protected ChatPhoto $photo
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageSuggestProfilePhoto
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
