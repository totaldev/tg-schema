<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns storage usage statistics. Can be called before authorization.
 */
class GetStorageStatistics extends TdFunction
{
    public const TYPE_NAME = 'getStorageStatistics';

    public function __construct(
        /**
         * The maximum number of chats with the largest storage usage for which separate statistics need to be returned. All other chats will be grouped in entries with chat_id == 0. If the chat info database is not used, the chat_limit is ignored and is always set to 0.
         */
        protected int $chatLimit
    ) {}

    public static function fromArray(array $array): GetStorageStatistics
    {
        return new static(
            $array['chat_limit'],
        );
    }

    public function getChatLimit(): int
    {
        return $this->chatLimit;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_limit' => $this->chatLimit,
        ];
    }
}
