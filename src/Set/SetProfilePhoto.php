<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Input\InputChatPhoto;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes a profile photo for the current user
 */
class SetProfilePhoto extends TdFunction
{
    public const TYPE_NAME = 'setProfilePhoto';

    /**
     * Profile photo to set
     *
     * @var InputChatPhoto
     */
    protected InputChatPhoto $photo;

    /**
     * Pass true to set a public photo, which will be visible even the main photo is hidden by privacy settings
     *
     * @var bool
     */
    protected bool $isPublic;

    public function __construct(InputChatPhoto $photo, bool $isPublic)
    {
        $this->photo = $photo;
        $this->isPublic = $isPublic;
    }

    public static function fromArray(array $array): SetProfilePhoto
    {
        return new static(
            TdSchemaRegistry::fromArray($array['photo']),
            $array['is_public'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'photo' => $this->photo->typeSerialize(),
            'is_public' => $this->isPublic,
        ];
    }

    public function getPhoto(): InputChatPhoto
    {
        return $this->photo;
    }

    public function getIsPublic(): bool
    {
        return $this->isPublic;
    }
}
