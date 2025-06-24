<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Chat\ChatPosition;
use Totaldev\TgSchema\Message\Message;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The last message of a chat was changed.
 */
class UpdateChatLastMessage extends Update
{
    public const TYPE_NAME = 'updateChatLastMessage';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int      $chatId,
        /**
         * The new last message in the chat; may be null if the last message became unknown. While the last message is unknown, new messages can be added to the chat without corresponding updateNewMessage update.
         */
        protected ?Message $lastMessage,
        /**
         * The new chat positions in the chat lists.
         *
         * @var ChatPosition[]
         */
        protected array    $positions
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateChatLastMessage
    {
        return new static(
            $array['chat_id'],
            isset($array['last_message']) ? TdSchemaRegistry::fromArray($array['last_message']) : null,
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['positions']),
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getLastMessage(): ?Message
    {
        return $this->lastMessage;
    }

    public function getPositions(): array
    {
        return $this->positions;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'chat_id'      => $this->chatId,
            'last_message' => $this->lastMessage ?? null,
            array_map(static fn($x) => $x->typeSerialize(), $this->positions),
        ];
    }
}
