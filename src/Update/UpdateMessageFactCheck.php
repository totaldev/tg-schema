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
    public const TYPE_NAME = 'updateMessageFactCheck';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int       $chatId,
        /**
         * Message identifier.
         */
        protected int       $messageId,
        /**
         * The new fact-check.
         */
        protected FactCheck $factCheck
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateMessageFactCheck
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            TdSchemaRegistry::fromArray($array['fact_check']),
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

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'message_id' => $this->messageId,
            'fact_check' => $this->factCheck->typeSerialize(),
        ];
    }
}
