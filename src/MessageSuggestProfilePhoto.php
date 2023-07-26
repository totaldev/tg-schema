<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * A profile photo was suggested to a user in a private chat
 */
class MessageSuggestProfilePhoto extends MessageContent
{
    public const TYPE_NAME = 'messageSuggestProfilePhoto';

    /**
     * The suggested chat photo. Use the method setProfilePhoto with inputChatPhotoPrevious to apply the photo
     *
     * @var ChatPhoto
     */
    protected ChatPhoto $photo;

    public function __construct(ChatPhoto $photo)
    {
        parent::__construct();

        $this->photo = $photo;
    }

    public static function fromArray(array $array): MessageSuggestProfilePhoto
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
