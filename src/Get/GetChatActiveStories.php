<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns the list of active stories posted by the given chat.
 */
class GetChatActiveStories extends TdFunction
{
    public const TYPE_NAME = 'getChatActiveStories';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int $chatId
    ) {}

    public static function fromArray(array $array): GetChatActiveStories
    {
        return new static(
            $array['chat_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'chat_id' => $this->chatId,
        ];
    }
}
