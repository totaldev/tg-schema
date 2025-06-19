<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Sticker\StickerType;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns stickers from the installed sticker sets that correspond to any of the given emoji or can be found by sticker-specific keywords. If the query is
 * non-empty, then favorite, recently used or trending stickers may also be returned.
 */
class GetStickers extends TdFunction
{
    public const TYPE_NAME = 'getStickers';

    public function __construct(
        /**
         * Type of the stickers to return.
         */
        protected StickerType $stickerType,
        /**
         * Search query; a space-separated list of emojis or a keyword prefix. If empty, returns all known installed stickers.
         */
        protected string      $query,
        /**
         * The maximum number of stickers to be returned.
         */
        protected int         $limit,
        /**
         * Chat identifier for which to return stickers. Available custom emoji stickers may be different for different chats.
         */
        protected int         $chatId
    ) {}

    public static function fromArray(array $array): GetStickers
    {
        return new static(
            TdSchemaRegistry::fromArray($array['sticker_type']),
            $array['query'],
            $array['limit'],
            $array['chat_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getLimit(): int
    {
        return $this->limit;
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
            '@type'        => static::TYPE_NAME,
            'sticker_type' => $this->stickerType->typeSerialize(),
            'query'        => $this->query,
            'limit'        => $this->limit,
            'chat_id'      => $this->chatId,
        ];
    }
}
