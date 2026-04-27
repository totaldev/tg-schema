<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Callback\CallbackQueryPayload;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A new incoming callback query; for bots only.
 */
class UpdateNewCallbackQuery extends Update
{
    public const string TYPE_NAME = 'updateNewCallbackQuery';

    public function __construct(
        /**
         * Identifier of the chat where the query was sent.
         */
        protected int                  $chatId,
        /**
         * Identifier that uniquely corresponds to the chat to which the message was sent.
         */
        protected int                  $chatInstance,
        /**
         * Unique query identifier.
         */
        protected int                  $id,
        /**
         * Identifier of the message from which the query originated.
         */
        protected int                  $messageId,
        /**
         * Query payload.
         */
        protected CallbackQueryPayload $payload,
        /**
         * Identifier of the user who sent the query.
         */
        protected int                  $senderUserId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateNewCallbackQuery
    {
        return new static(
            chatId      : $array['chat_id'],
            chatInstance: $array['chat_instance'],
            id          : $array['id'],
            messageId   : $array['message_id'],
            payload     : TdSchemaRegistry::fromArray($array['payload']),
            senderUserId: $array['sender_user_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getChatInstance(): int
    {
        return $this->chatInstance;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getPayload(): CallbackQueryPayload
    {
        return $this->payload;
    }

    public function getSenderUserId(): int
    {
        return $this->senderUserId;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setChatInstance(int $value): static
    {
        $this->chatInstance = $value;

        return $this;
    }

    public function setId(int $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setMessageId(int $value): static
    {
        $this->messageId = $value;

        return $this;
    }

    public function setPayload(CallbackQueryPayload $value): static
    {
        $this->payload = $value;

        return $this;
    }

    public function setSenderUserId(int $value): static
    {
        $this->senderUserId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'chat_id'        => $this->chatId,
            'chat_instance'  => $this->chatInstance,
            'id'             => $this->id,
            'message_id'     => $this->messageId,
            'payload'        => $this->payload->jsonSerialize(),
            'sender_user_id' => $this->senderUserId,
        ];
    }
}
