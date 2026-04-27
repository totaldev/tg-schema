<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Push;

use Totaldev\TgSchema\Photo\Photo;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A photo message.
 */
class PushMessageContentPhoto extends PushMessageContent
{
    public const string TYPE_NAME = 'pushMessageContentPhoto';

    public function __construct(
        /**
         * Photo caption.
         */
        protected string $caption,
        /**
         * True, if the message is a pinned message with the specified content.
         */
        protected bool   $isPinned,
        /**
         * True, if the photo is secret.
         */
        protected bool   $isSecret,
        /**
         * Message content; may be null.
         */
        protected ?Photo $photo,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentPhoto
    {
        return new static(
            caption : $array['caption'],
            isPinned: $array['is_pinned'],
            isSecret: $array['is_secret'],
            photo   : (isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null),
        );
    }

    public function getCaption(): string
    {
        return $this->caption;
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }

    public function getIsSecret(): bool
    {
        return $this->isSecret;
    }

    public function getPhoto(): ?Photo
    {
        return $this->photo;
    }

    public function setCaption(string $value): static
    {
        $this->caption = $value;

        return $this;
    }

    public function setIsPinned(bool $value): static
    {
        $this->isPinned = $value;

        return $this;
    }

    public function setIsSecret(bool $value): static
    {
        $this->isSecret = $value;

        return $this;
    }

    public function setPhoto(?Photo $value): static
    {
        $this->photo = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'caption'   => $this->caption,
            'is_pinned' => $this->isPinned,
            'is_secret' => $this->isSecret,
            'photo'     => (null !== $this->photo ? $this->photo->jsonSerialize() : null),
        ];
    }
}
