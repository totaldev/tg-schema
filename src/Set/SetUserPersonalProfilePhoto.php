<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Input\InputChatPhoto;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes a personal profile photo of a contact user
 */
class SetUserPersonalProfilePhoto extends TdFunction
{
    public const TYPE_NAME = 'setUserPersonalProfilePhoto';

    /**
     * Profile photo to set; pass null to delete the photo; inputChatPhotoPrevious isn't supported in this function
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
            '@type' => static::TYPE_NAME,
            'user_id' => $this->userId,
            'photo' => $this->photo->typeSerialize(),
        ];
    }
}
