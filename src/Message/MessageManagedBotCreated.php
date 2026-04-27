<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * A bot managed by another bot was created by the user.
 */
class MessageManagedBotCreated extends MessageContent
{
    public const string TYPE_NAME = 'messageManagedBotCreated';

    public function __construct(
        /**
         * User identifier of the created bot.
         */
        protected int $botUserId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageManagedBotCreated
    {
        return new static(
            botUserId: $array['bot_user_id'],
        );
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function setBotUserId(int $value): static
    {
        $this->botUserId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'bot_user_id' => $this->botUserId,
        ];
    }
}
