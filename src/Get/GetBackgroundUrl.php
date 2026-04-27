<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Background\BackgroundType;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Constructs a persistent HTTP URL for a background.
 */
class GetBackgroundUrl extends TdFunction
{
    public const string TYPE_NAME = 'getBackgroundUrl';

    public function __construct(
        /**
         * Background name.
         */
        protected string         $name,
        /**
         * Background type; backgroundTypeChatTheme isn't supported.
         */
        protected BackgroundType $type,
    ) {}

    public static function fromArray(array $array): GetBackgroundUrl
    {
        return new static(
            name: $array['name'],
            type: TdSchemaRegistry::fromArray($array['type']),
        );
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getType(): BackgroundType
    {
        return $this->type;
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
            '@type' => static::TYPE_NAME,
            'name'  => $this->name,
            'type'  => $this->type->jsonSerialize(),
        ];
    }
}
