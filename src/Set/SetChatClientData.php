<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes application-specific data associated with a chat.
 */
class SetChatClientData extends TdFunction
{
    public const string TYPE_NAME = 'setChatClientData';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int    $chatId,
        /**
         * New value of client_data.
         */
        protected string $clientData,
    ) {}

    public static function fromArray(array $array): SetChatClientData
    {
        return new static(
            chatId    : $array['chat_id'],
            clientData: $array['client_data'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getClientData(): string
    {
        return $this->clientData;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setClientData(string $value): static
    {
        $this->clientData = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'chat_id'     => $this->chatId,
            'client_data' => $this->clientData,
        ];
    }
}
