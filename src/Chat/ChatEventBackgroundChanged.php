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
         * Previous background; may be null if none.
         */
        protected ?ChatBackground $oldBackground,
        /**
         * New background; may be null if none.
         */
        protected ?ChatBackground $newBackground,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventBackgroundChanged
    {
        return new static(
            isset($array['old_background']) ? TdSchemaRegistry::fromArray($array['old_background']) : null,
            isset($array['new_background']) ? TdSchemaRegistry::fromArray($array['new_background']) : null,
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
            'old_background' => $this->oldBackground ?? null,
            'new_background' => $this->newBackground ?? null,
        ];
    }
}
