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
    public const string TYPE_NAME = 'setBusinessAccountProfilePhoto';

    public function __construct(
        /**
         * Unique identifier of business connection.
         */
        protected string          $businessConnectionId,
        /**
         * Pass true to set the public photo, which will be visible even if the main photo is hidden by privacy settings.
         */
        protected bool            $isPublic,
        /**
         * Profile photo to set; pass null to remove the photo.
         */
        protected ?InputChatPhoto $photo = null,
    ) {}

    public static function fromArray(array $array): SetBusinessAccountProfilePhoto
    {
        return new static(
            businessConnectionId: $array['business_connection_id'],
            isPublic            : $array['is_public'],
            photo               : (isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null),
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

    public function getPhoto(): ?InputChatPhoto
    {
        return $this->photo;
    }

    public function setBusinessConnectionId(string $value): static
    {
        $this->businessConnectionId = $value;

        return $this;
    }

    public function setIsPublic(bool $value): static
    {
        $this->isPublic = $value;

        return $this;
    }

    public function setPhoto(?InputChatPhoto $value): static
    {
        $this->photo = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'business_connection_id' => $this->businessConnectionId,
            'is_public'              => $this->isPublic,
            'photo'                  => (null !== $this->photo ? $this->photo->jsonSerialize() : null),
        ];
    }
}
