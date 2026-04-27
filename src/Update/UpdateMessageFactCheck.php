<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Fact\FactCheck;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A fact-check added to a message was changed.
 */
class UpdateMessageFactCheck extends Update
{
    public const string TYPE_NAME = 'updateMessageFactCheck';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int       $chatId,
        /**
         * The new fact-check.
         */
        protected FactCheck $factCheck,
        /**
         * Message identifier.
         */
        protected int       $messageId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateMessageFactCheck
    {
        return new static(
            chatId   : $array['chat_id'],
            factCheck: TdSchemaRegistry::fromArray($array['fact_check']),
            messageId: $array['message_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getFactCheck(): FactCheck
    {
        return $this->factCheck;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setFactCheck(FactCheck $value): static
    {
        $this->factCheck = $value;

        return $this;
    }

    public function setMessageId(int $value): static
    {
        $this->messageId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'fact_check' => $this->factCheck->jsonSerialize(),
            'message_id' => $this->messageId,
        ];
    }
}
