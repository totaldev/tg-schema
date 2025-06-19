<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Input\InputChatPhoto;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes a profile photo of a business account; for bots only.
 */
class SetBusinessAccountProfilePhoto extends TdFunction
{
    public const TYPE_NAME = 'setBusinessAccountProfilePhoto';

    public function __construct(
        /**
         * Unique identifier of business connection.
         */
        protected string         $businessConnectionId,
        /**
         * Profile photo to set; pass null to remove the photo.
         */
        protected InputChatPhoto $photo,
        /**
         * Pass true to set the public photo, which will be visible even the main photo is hidden by privacy settings.
         */
        protected bool           $isPublic
    ) {}

    public static function fromArray(array $array): SetBusinessAccountProfilePhoto
    {
        return new static(
            $array['business_connection_id'],
            TdSchemaRegistry::fromArray($array['photo']),
            $array['is_public'],
        );
    }

    public function getBusinessConnectionId(): string
    {
        return $this->businessConnectionId;
    }

    public function getIsPublic(): bool
    {
        return $this->isPublic;
    }

    public function getPhoto(): InputChatPhoto
    {
        return $this->photo;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'business_connection_id' => $this->businessConnectionId,
            'photo'                  => $this->photo->typeSerialize(),
            'is_public'              => $this->isPublic,
        ];
    }
}
