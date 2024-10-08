<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema;

use JsonSerializable;

abstract class TdObject implements JsonSerializable, TdTypeSerializableInterface
{
    public const TYPE_NAME = '_tdObject';

    public ?string $tdExtra = null;

    public function getTdExtra(): ?string
    {
        return $this->tdExtra;
    }

    public function setTdExtra(?string $tdExtra): self
    {
        $this->tdExtra = $tdExtra;

        return $this;
    }

    public function getTdTypeName(): string
    {
        return static::TYPE_NAME;
    }

    public function jsonSerialize(): array
    {
        $output = [];
        if (null !== $this->tdExtra) {
            $output['@extra'] = $this->tdExtra;
        }

        return array_merge($output, $this->typeSerialize());
    }
}
