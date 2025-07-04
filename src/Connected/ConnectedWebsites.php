<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Connected;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of websites the current user is logged in with Telegram.
 */
class ConnectedWebsites extends TdObject
{
    public const TYPE_NAME = 'connectedWebsites';

    public function __construct(
        /**
         * List of connected websites.
         *
         * @var ConnectedWebsite[]
         */
        protected array $websites
    ) {}

    public static function fromArray(array $array): ConnectedWebsites
    {
        return new static(
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['websites']),
        );
    }

    public function getWebsites(): array
    {
        return $this->websites;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'websites' => array_map(static fn($x) => $x->typeSerialize(), $this->websites),
        ];
    }
}
