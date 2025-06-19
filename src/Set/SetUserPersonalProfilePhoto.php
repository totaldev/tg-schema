<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Input\InputChatPhoto;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes a personal profile photo of a contact user.
 */
class SetUserPersonalProfilePhoto extends TdFunction
{
    public const TYPE_NAME = 'setUserPersonalProfilePhoto';

    public function __construct(
        /**
         * User identifier.
         */
        protected int            $userId,
        /**
         * Profile photo to set; pass null to delete the photo; inputChatPhotoPrevious isn't supported in this function.
         */
        protected InputChatPhoto $photo
    ) {}

    public static function fromArray(array $array): SetUserPersonalProfilePhoto
    {
        return new static(
            $array['user_id'],
            TdSchemaRegistry::fromArray($array['photo']),
        );
    }

    public function getPhoto(): InputChatPhoto
    {
        return $this->photo;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'user_id' => $this->userId,
            'photo'   => $this->photo->typeSerialize(),
        ];
    }
}
