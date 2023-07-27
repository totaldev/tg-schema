<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes a personal profile photo of a contact user
 */
class SetUserPersonalProfilePhoto extends TdFunction
{
    public const TYPE_NAME = 'setUserPersonalProfilePhoto';

    /**
     * User identifier
     *
     * @var int
     */
    protected int $userId;

    /**
     * Profile photo to set; pass null to delete the photo; inputChatPhotoPrevious isn't supported in this function
     *
     * @var InputChatPhoto
     */
    protected InputChatPhoto $photo;

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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'user_id' => $this->userId,
            'photo' => $this->photo->typeSerialize(),
        ];
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getPhoto(): InputChatPhoto
    {
        return $this->photo;
    }
}
