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
    public const string TYPE_NAME = 'suggestUserProfilePhoto';

    public function __construct(
        /**
         * Profile photo to suggest; inputChatPhotoPrevious isn't supported in this function.
         */
        protected InputChatPhoto $photo,
        /**
         * User identifier.
         */
        protected int            $userId,
    ) {}

    public static function fromArray(array $array): SuggestUserProfilePhoto
    {
        return new static(
            photo : TdSchemaRegistry::fromArray($array['photo']),
            userId: $array['user_id'],
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

    public function setPhoto(InputChatPhoto $value): static
    {
        $this->photo = $value;

        return $this;
    }

    public function setUserId(int $value): static
    {
        $this->userId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'photo'   => $this->photo->jsonSerialize(),
            'user_id' => $this->userId,
        ];
    }
}
