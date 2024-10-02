<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Business;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of business chat links created by the user.
 */
class BusinessChatLinks extends TdObject
{
    public const TYPE_NAME = 'businessChatLinks';

    public function __construct(
        /**
         * List of links.
         *
         * @var BusinessChatLink[]
         */
        protected array $links
    ) {}

    public static function fromArray(array $array): BusinessChatLinks
    {
        return new static(
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['links']),
        );
    }

    public function getLinks(): array
    {
        return $this->links;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(fn($x) => $x->typeSerialize(), $this->links),
        ];
    }
}
