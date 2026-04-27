<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chats;

use Totaldev\TgSchema\TdObject;

/**
 * Represents a list of chats.
 */
class Chats extends TdObject
{
    public const string TYPE_NAME = 'chats';

    public function __construct(
        /**
         * List of chat identifiers.
         *
         * @var int[]
         */
        protected array $chatIds,
        /**
         * Approximate total number of chats found.
         */
        protected int   $totalCount,
    ) {}

    public static function fromArray(array $array): Chats
    {
        return new static(
            chatIds   : $array['chat_ids'],
            totalCount: $array['total_count'],
        );
    }

    public function getChatIds(): array
    {
        return $this->chatIds;
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function setChatIds(array $value): static
    {
        $this->chatIds = $value;

        return $this;
    }

    public function setTotalCount(int $value): static
    {
        $this->totalCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'chat_ids'    => $this->chatIds,
            'total_count' => $this->totalCount,
        ];
    }
}
