<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Me;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a URL linking to an internal Telegram entity.
 */
class TMeUrl extends TdObject
{
    public const string TYPE_NAME = 'tMeUrl';

    public function __construct(
        /**
         * Type of the URL.
         */
        protected TMeUrlType $type,
        /**
         * URL.
         */
        protected string     $url,
    ) {}

    public static function fromArray(array $array): TMeUrl
    {
        return new static(
            type: TdSchemaRegistry::fromArray($array['type']),
            url : $array['url'],
        );
    }

    public function getType(): TMeUrlType
    {
        return $this->type;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setType(TMeUrlType $value): static
    {
        $this->type = $value;

        return $this;
    }

    public function setUrl(string $value): static
    {
        $this->url = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'type'  => $this->type->jsonSerialize(),
            'url'   => $this->url,
        ];
    }
}
