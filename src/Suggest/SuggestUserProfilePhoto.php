<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Suggest;

use Totaldev\TgSchema\Input\InputChatPhoto;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Suggests a profile photo to another regular user with common messages
 */
class SuggestUserProfilePhoto extends TdFunction
{
    public const TYPE_NAME = 'suggestUserProfilePhoto';

    /**
     * Profile photo to suggest; inputChatPhotoPrevious isn't supported in this function
     *
     * @var InputChatPhoto
     */
    protected InputChatPhoto $photo;

    /**
     * User identifier
     *
     * @var int
     */
    protected int $userId;

    public function __construct(int $userId, InputChatPhoto $photo)
    {
        $this->userId = $userId;
        $this->photo = $photo;
    }

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
            '@type' => static::TYPE_NAME,
            'user_id' => $this->userId,
            'photo' => $this->photo->typeSerialize(),
        ];
    }
}
