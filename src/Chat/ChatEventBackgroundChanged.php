<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The chat background was changed.
 */
class ChatEventBackgroundChanged extends ChatEventAction
{
    public const string TYPE_NAME = 'chatEventBackgroundChanged';

    public function __construct(
        /**
         * New background; may be null if none.
         */
        protected ?ChatBackground $newBackground,
        /**
         * Previous background; may be null if none.
         */
        protected ?ChatBackground $oldBackground,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventBackgroundChanged
    {
        return new static(
            newBackground: (isset($array['new_background']) ? TdSchemaRegistry::fromArray($array['new_background']) : null),
            oldBackground: (isset($array['old_background']) ? TdSchemaRegistry::fromArray($array['old_background']) : null),
        );
    }

    public function getNewBackground(): ?ChatBackground
    {
        return $this->newBackground;
    }

    public function getOldBackground(): ?ChatBackground
    {
        return $this->oldBackground;
    }

    public function setNewBackground(?ChatBackground $value): static
    {
        $this->newBackground = $value;

        return $this;
    }

    public function setOldBackground(?ChatBackground $value): static
    {
        $this->oldBackground = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'new_background' => (null !== $this->newBackground ? $this->newBackground->jsonSerialize() : null),
            'old_background' => (null !== $this->oldBackground ? $this->oldBackground->jsonSerialize() : null),
        ];
    }
}
