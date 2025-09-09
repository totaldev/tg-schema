<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Chat\ChatPosition;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The position of a chat in a chat list has changed. An updateChatLastMessage or updateChatDraftMessage update might be sent instead of the update.
 */
class UpdateChatPosition extends Update
{
    public const TYPE_NAME = 'updateChatPosition';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int          $chatId,
        /**
         * New chat position. If new order is 0, then the chat needs to be removed from the list.
         */
        protected ChatPosition $position,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateChatPosition
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['position']),
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getPosition(): ChatPosition
    {
        return $this->position;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'chat_id'  => $this->chatId,
            'position' => $this->position->typeSerialize(),
        ];
    }
}
