<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Delete;

use Totaldev\TgSchema\TdFunction;

/**
 * Deletes a profile photo.
 */
class DeleteProfilePhoto extends TdFunction
{
    public const TYPE_NAME = 'deleteProfilePhoto';

    public function __construct(
        /**
         * Identifier of the profile photo to delete.
         */
        protected int $profilePhotoId
    ) {}

    public static function fromArray(array $array): DeleteProfilePhoto
    {
        return new static(
            $array['profile_photo_id'],
        );
    }

    public function getProfilePhotoId(): int
    {
        return $this->profilePhotoId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'profile_photo_id' => $this->profilePhotoId,
        ];
    }
}
