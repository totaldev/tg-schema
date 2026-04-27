<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Link;

use Totaldev\TgSchema\Chat\ChatPhoto;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The link is a link to a user.
 */
class LinkPreviewTypeUser extends LinkPreviewType
{
    public const string TYPE_NAME = 'linkPreviewTypeUser';

    public function __construct(
        /**
         * True, if the user is a bot.
         */
        protected bool       $isBot,
        /**
         * Photo of the user; may be null if none.
         */
        protected ?ChatPhoto $photo,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): LinkPreviewTypeUser
    {
        return new static(
            isBot: $array['is_bot'],
            photo: (isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null),
        );
    }

    public function getIsBot(): bool
    {
        return $this->isBot;
    }

    public function getPhoto(): ?ChatPhoto
    {
        return $this->photo;
    }

    public function setIsBot(bool $value): static
    {
        $this->isBot = $value;

        return $this;
    }

    public function setPhoto(?ChatPhoto $value): static
    {
        $this->photo = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'is_bot' => $this->isBot,
            'photo'  => (null !== $this->photo ? $this->photo->jsonSerialize() : null),
        ];
    }
}
