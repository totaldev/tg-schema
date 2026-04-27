<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns the list of boosts applied to a chat; requires administrator rights in the chat.
 */
class GetChatBoosts extends TdFunction
{
    public const string TYPE_NAME = 'getChatBoosts';

    public function __construct(
        /**
         * Identifier of the chat.
         */
        protected int    $chatId,
        /**
         * The maximum number of boosts to be returned; up to 100. For optimal performance, the number of returned boosts can be smaller than the specified limit.
         */
        protected int    $limit,
        /**
         * Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results.
         */
        protected string $offset,
        /**
         * Pass true to receive only boosts received from gift codes and giveaways created by the chat.
         */
        protected bool   $onlyGiftCodes,
    ) {}

    public static function fromArray(array $array): GetChatBoosts
    {
        return new static(
            chatId       : $array['chat_id'],
            limit        : $array['limit'],
            offset       : $array['offset'],
            onlyGiftCodes: $array['only_gift_codes'],
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

    public function getOffset(): string
    {
        return $this->offset;
    }

    public function getOnlyGiftCodes(): bool
    {
        return $this->onlyGiftCodes;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setLimit(int $value): static
    {
        $this->limit = $value;

        return $this;
    }

    public function setOffset(string $value): static
    {
        $this->offset = $value;

        return $this;
    }

    public function setOnlyGiftCodes(bool $value): static
    {
        $this->onlyGiftCodes = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'chat_id'         => $this->chatId,
            'limit'           => $this->limit,
            'offset'          => $this->offset,
            'only_gift_codes' => $this->onlyGiftCodes,
        ];
    }
}
