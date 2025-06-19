<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Suggest;

use Totaldev\TgSchema\Input\InputChatPhoto;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Suggests a profile photo to another regular user with common messages and allowing non-paid messages.
 */
class SuggestUserProfilePhoto extends TdFunction
{
    public const TYPE_NAME = 'suggestUserProfilePhoto';

    public function __construct(
        /**
         * User identifier.
         */
        protected int            $userId,
        /**
         * Profile photo to suggest; inputChatPhotoPrevious isn't supported in this function.
         */
        protected InputChatPhoto $photo
    ) {}

    public static function fromArray(array $array): SuggestUserProfilePhoto
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
