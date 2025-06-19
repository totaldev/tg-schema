<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Sponsored;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of sponsored chats.
 */
class SponsoredChats extends TdObject
{
    public const TYPE_NAME = 'sponsoredChats';

    public function __construct(
        /**
         * List of sponsored chats.
         *
         * @var SponsoredChat[]
         */
        protected array $chats
    ) {}

    public static function fromArray(array $array): SponsoredChats
    {
        return new static(
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['chats']),
        );
    }

    public function getChats(): array
    {
        return $this->chats;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(fn($x) => $x->typeSerialize(), $this->chats),
        ];
    }
}
