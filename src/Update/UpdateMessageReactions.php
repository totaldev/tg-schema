<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Message\MessageReaction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Reactions added to a message with anonymous reactions have changed; for bots only.
 */
class UpdateMessageReactions extends Update
{
    public const TYPE_NAME = 'updateMessageReactions';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int   $chatId,
        /**
         * Message identifier.
         */
        protected int   $messageId,
        /**
         * Point in time (Unix timestamp) when the reactions were changed.
         */
        protected int   $date,
        /**
         * The list of reactions added to the message.
         *
         * @var MessageReaction[]
         */
        protected array $reactions
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateMessageReactions
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            $array['date'],
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['reactions']),
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getReactions(): array
    {
        return $this->reactions;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'message_id' => $this->messageId,
            'date'       => $this->date,
            'reactions'  => array_map(static fn($x) => $x->typeSerialize(), $this->reactions),
        ];
    }
}
