<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Me;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a URL linking to an internal Telegram entity
 */
class TMeUrl extends TdObject
{
    public const TYPE_NAME = 'tMeUrl';

    /**
     * Type of the URL
     *
     * @var TMeUrlType
     */
    protected TMeUrlType $type;

    /**
     * URL
     *
     * @var string
     */
    protected string $url;

    public function __construct(string $url, TMeUrlType $type)
    {
        $this->url = $url;
        $this->type = $type;
    }

    public static function fromArray(array $array): TMeUrl
    {
        return new static(
            $array['url'],
            TdSchemaRegistry::fromArray($array['type']),
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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'url' => $this->url,
            'type' => $this->type->typeSerialize(),
        ];
    }
}
