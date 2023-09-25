<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Sticker\StickerType;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns unique emoji that correspond to stickers to be found by the getStickers(sticker_type, query, 1000000, chat_id)
 */
class GetAllStickerEmojis extends TdFunction
{
    public const TYPE_NAME = 'getAllStickerEmojis';

    /**
     * Chat identifier for which to find stickers
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Search query
     *
     * @var string
     */
    protected string $query;

    /**
     * Pass true if only main emoji for each found sticker must be included in the result
     *
     * @var bool
     */
    protected bool $returnOnlyMainEmoji;

    /**
     * Type of the stickers to search for
     *
     * @var StickerType
     */
    protected StickerType $stickerType;

    public function __construct(StickerType $stickerType, string $query, int $chatId, bool $returnOnlyMainEmoji)
    {
        $this->stickerType = $stickerType;
        $this->query = $query;
        $this->chatId = $chatId;
        $this->returnOnlyMainEmoji = $returnOnlyMainEmoji;
    }

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
            '@type' => static::TYPE_NAME,
            'sticker_type' => $this->stickerType->typeSerialize(),
            'query' => $this->query,
            'chat_id' => $this->chatId,
            'return_only_main_emoji' => $this->returnOnlyMainEmoji,
        ];
    }
}
