<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Background;

use Totaldev\TgSchema\Document\Document;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a chat background.
 */
class Background extends TdObject
{
    public const string TYPE_NAME = 'background';

    public function __construct(
        /**
         * Unique background identifier.
         */
        protected int            $id,
        /**
         * True, if this is one of default backgrounds.
         */
        protected bool           $isDefault,
        /**
         * True, if the background is dark and is recommended to be used with dark theme.
         */
        protected bool           $isDark,
        /**
         * Unique background name.
         */
        protected string         $name,
        /**
         * Document with the background; may be null. Null only for filled and chat theme backgrounds.
         */
        protected ?Document      $document,
        /**
         * Type of the background.
         */
        protected BackgroundType $type,
    ) {}

    public static function fromArray(array $array): Background
    {
        return new static(
            $array['id'],
            $array['is_default'],
            $array['is_dark'],
            $array['name'],
            isset($array['document']) ? TdSchemaRegistry::fromArray($array['document']) : null,
            TdSchemaRegistry::fromArray($array['type']),
        );
    }

    public function getDocument(): ?Document
    {
        return $this->document;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getIsDark(): bool
    {
        return $this->isDark;
    }

    public function getIsDefault(): bool
    {
        return $this->isDefault;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getType(): BackgroundType
    {
        return $this->type;
    }

    public function setDocument(?Document $value): static
    {
        $this->document = $value;

        return $this;
    }

    public function setId(int $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setIsDark(bool $value): static
    {
        $this->isDark = $value;

        return $this;
    }

    public function setIsDefault(bool $value): static
    {
        $this->isDefault = $value;

        return $this;
    }

    public function setName(string $value): static
    {
        $this->name = $value;

        return $this;
    }

    public function setType(BackgroundType $value): static
    {
        $this->type = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'id'         => $this->id,
            'is_default' => $this->isDefault,
            'is_dark'    => $this->isDark,
            'name'       => $this->name,
            'document'   => $this->document ?? null,
            'type'       => $this->type->typeSerialize(),
        ];
    }
}
