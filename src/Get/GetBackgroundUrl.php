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
    public const TYPE_NAME = 'getBackgroundUrl';

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
            $array['name'],
            TdSchemaRegistry::fromArray($array['type']),
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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'name'  => $this->name,
            'type'  => $this->type->typeSerialize(),
        ];
    }
}
