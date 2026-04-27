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
    public const string TYPE_NAME = 'businessChatLinks';

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
            links: array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['links']),
        );
    }

    public function getLinks(): array
    {
        return $this->links;
    }

    public function setLinks(array $value): static
    {
        $this->links = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'links' => array_map(static fn($x) => $x->jsonSerialize(), $this->links),
        ];
    }
}
