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
    public const TYPE_NAME = 'chats';

    public function __construct(
        /**
         * Approximate total number of chats found.
         */
        protected int   $totalCount,
        /**
         * List of chat identifiers.
         *
         * @var int[]
         */
        protected array $chatIds,
    ) {}

    public static function fromArray(array $array): Chats
    {
        return new static(
            $array['total_count'],
            $array['chat_ids'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'total_count' => $this->totalCount,
            'chat_ids'    => $this->chatIds,
        ];
    }
}
