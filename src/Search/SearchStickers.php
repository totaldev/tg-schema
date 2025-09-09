<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Search;

use Totaldev\TgSchema\Sticker\StickerType;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Searches for stickers from public sticker sets that correspond to any of the given emoji.
 */
class SearchStickers extends TdFunction
{
    public const TYPE_NAME = 'searchStickers';

    public function __construct(
        /**
         * Type of the stickers to return.
         */
        protected StickerType $stickerType,
        /**
         * Space-separated list of emojis to search for.
         */
        protected string      $emojis,
        /**
         * Query to search for; may be empty to search for emoji only.
         */
        protected string      $query,
        /**
         * List of possible IETF language tags of the user's input language; may be empty if unknown.
         *
         * @var string[]
         */
        protected array       $inputLanguageCodes,
        /**
         * The offset from which to return the stickers; must be non-negative.
         */
        protected int         $offset,
        /**
         * The maximum number of stickers to be returned; 0-100.
         */
        protected int         $limit,
    ) {}

    public static function fromArray(array $array): SearchStickers
    {
        return new static(
            TdSchemaRegistry::fromArray($array['sticker_type']),
            $array['emojis'],
            $array['query'],
            $array['input_language_codes'],
            $array['offset'],
            $array['limit'],
        );
    }

    public function getEmojis(): string
    {
        return $this->emojis;
    }

    public function getInputLanguageCodes(): array
    {
        return $this->inputLanguageCodes;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getOffset(): int
    {
        return $this->offset;
    }

    public function getQuery(): string
    {
        return $this->query;
    }

    public function getStickerType(): StickerType
    {
        return $this->stickerType;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'sticker_type'         => $this->stickerType->typeSerialize(),
            'emojis'               => $this->emojis,
            'query'                => $this->query,
            'input_language_codes' => $this->inputLanguageCodes,
            'offset'               => $this->offset,
            'limit'                => $this->limit,
        ];
    }
}
