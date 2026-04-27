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
    public const string TYPE_NAME = 'updateMessageReactions';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int   $chatId,
        /**
         * Point in time (Unix timestamp) when the reactions were changed.
         */
        protected int   $date,
        /**
         * Message identifier.
         */
        protected int   $messageId,
        /**
         * The list of reactions added to the message.
         *
         * @var MessageReaction[]
         */
        protected array $reactions,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateMessageReactions
    {
        return new static(
            chatId   : $array['chat_id'],
            date     : $array['date'],
            messageId: $array['message_id'],
            reactions: array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['reactions']),
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

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setDate(int $value): static
    {
        $this->date = $value;

        return $this;
    }

    public function setMessageId(int $value): static
    {
        $this->messageId = $value;

        return $this;
    }

    public function setReactions(array $value): static
    {
        $this->reactions = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'date'       => $this->date,
            'message_id' => $this->messageId,
            'reactions'  => array_map(static fn($x) => $x->jsonSerialize(), $this->reactions),
        ];
    }
}
