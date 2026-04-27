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
    public const string TYPE_NAME = 'getAllStickerEmojis';

    public function __construct(
        /**
         * Chat identifier for which to find stickers.
         */
        protected int         $chatId,
        /**
         * Search query.
         */
        protected string      $query,
        /**
         * Pass true if only main emoji for each found sticker must be included in the result.
         */
        protected bool        $returnOnlyMainEmoji,
        /**
         * Type of the stickers to search for.
         */
        protected StickerType $stickerType,
    ) {}

    public static function fromArray(array $array): GetAllStickerEmojis
    {
        return new static(
            chatId             : $array['chat_id'],
            query              : $array['query'],
            returnOnlyMainEmoji: $array['return_only_main_emoji'],
            stickerType        : TdSchemaRegistry::fromArray($array['sticker_type']),
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

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setQuery(string $value): static
    {
        $this->query = $value;

        return $this;
    }

    public function setReturnOnlyMainEmoji(bool $value): static
    {
        $this->returnOnlyMainEmoji = $value;

        return $this;
    }

    public function setStickerType(StickerType $value): static
    {
        $this->stickerType = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'chat_id'                => $this->chatId,
            'query'                  => $this->query,
            'return_only_main_emoji' => $this->returnOnlyMainEmoji,
            'sticker_type'           => $this->stickerType->jsonSerialize(),
        ];
    }
}
