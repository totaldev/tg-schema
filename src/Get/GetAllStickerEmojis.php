<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Sticker\StickerType;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns unique emoji that correspond to stickers to be found by the getStickers(sticker_type, query, 1000000, chat_id).
 */
class GetAllStickerEmojis extends TdFunction
{
    public const TYPE_NAME = 'getAllStickerEmojis';

    public function __construct(
        /**
         * Type of the stickers to search for.
         */
        protected StickerType $stickerType,
        /**
         * Search query.
         */
        protected string      $query,
        /**
         * Chat identifier for which to find stickers.
         */
        protected int         $chatId,
        /**
         * Pass true if only main emoji for each found sticker must be included in the result.
         */
        protected bool        $returnOnlyMainEmoji
    ) {}

    public static function fromArray(array $array): GetAllStickerEmojis
    {
        return new static(
            TdSchemaRegistry::fromArray($array['sticker_type']),
            $array['query'],
            $array['chat_id'],
            $array['return_only_main_emoji'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getQuery(): string
    {
        return $this->query;
    }

    public function getReturnOnlyMainEmoji(): bool
    {
        return $this->returnOnlyMainEmoji;
    }

    public function getStickerType(): StickerType
    {
        return $this->stickerType;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'sticker_type'           => $this->stickerType->typeSerialize(),
            'query'                  => $this->query,
            'chat_id'                => $this->chatId,
            'return_only_main_emoji' => $this->returnOnlyMainEmoji,
        ];
    }
}
