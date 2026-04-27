<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Passkey;

use Totaldev\TgSchema\TdObject;

/**
 * Describes a passkey.
 */
class Passkey extends TdObject
{
    public const string TYPE_NAME = 'passkey';

    public function __construct(
        /**
         * Point in time (Unix timestamp) when the passkey was added.
         */
        protected int    $additionDate,
        /**
         * Unique identifier of the passkey.
         */
        protected string $id,
        /**
         * Point in time (Unix timestamp) when the passkey was used last time; 0 if never.
         */
        protected int    $lastUsageDate,
        /**
         * Name of the passkey.
         */
        protected string $name,
        /**
         * Identifier of the custom emoji that is used as the icon of the software, which created the passkey; 0 if unknown.
         */
        protected int    $softwareIconCustomEmojiId,
    ) {}

    public static function fromArray(array $array): Passkey
    {
        return new static(
            additionDate             : $array['addition_date'],
            id                       : $array['id'],
            lastUsageDate            : $array['last_usage_date'],
            name                     : $array['name'],
            softwareIconCustomEmojiId: $array['software_icon_custom_emoji_id'],
        );
    }

    public function getAdditionDate(): int
    {
        return $this->additionDate;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getLastUsageDate(): int
    {
        return $this->lastUsageDate;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSoftwareIconCustomEmojiId(): int
    {
        return $this->softwareIconCustomEmojiId;
    }

    public function setAdditionDate(int $value): static
    {
        $this->additionDate = $value;

        return $this;
    }

    public function setId(string $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setLastUsageDate(int $value): static
    {
        $this->lastUsageDate = $value;

        return $this;
    }

    public function setName(string $value): static
    {
        $this->name = $value;

        return $this;
    }

    public function setSoftwareIconCustomEmojiId(int $value): static
    {
        $this->softwareIconCustomEmojiId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                         => static::TYPE_NAME,
            'addition_date'                 => $this->additionDate,
            'id'                            => $this->id,
            'last_usage_date'               => $this->lastUsageDate,
            'name'                          => $this->name,
            'software_icon_custom_emoji_id' => $this->softwareIconCustomEmojiId,
        ];
    }
}
