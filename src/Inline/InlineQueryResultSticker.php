<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Inline;

use Totaldev\TgSchema\Sticker\Sticker;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a sticker.
 */
class InlineQueryResultSticker extends InlineQueryResult
{
    public const TYPE_NAME = 'inlineQueryResultSticker';

    public function __construct(
        /**
         * Unique identifier of the query result.
         */
        protected string  $id,
        /**
         * Sticker.
         */
        protected Sticker $sticker,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InlineQueryResultSticker
    {
        return new static(
            $array['id'],
            TdSchemaRegistry::fromArray($array['sticker']),
        );
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getSticker(): Sticker
    {
        return $this->sticker;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'id'      => $this->id,
            'sticker' => $this->sticker->typeSerialize(),
        ];
    }
}
