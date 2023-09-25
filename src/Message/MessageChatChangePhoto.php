<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Chat\ChatPhoto;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * An updated chat photo
 */
class MessageChatChangePhoto extends MessageContent
{
    public const TYPE_NAME = 'messageChatChangePhoto';

    /**
     * New chat photo
     *
     * @var ChatPhoto
     */
    protected ChatPhoto $photo;

    public function __construct(ChatPhoto $photo)
    {
        parent::__construct();

        $this->photo = $photo;
    }

    public static function fromArray(array $array): MessageChatChangePhoto
    {
        return new static(
            TdSchemaRegistry::fromArray($array['photo']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'photo' => $this->photo->typeSerialize(),
        ];
    }

    public function getPhoto(): ChatPhoto
    {
        return $this->photo;
    }
}
