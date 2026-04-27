<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\View;

use Totaldev\TgSchema\Message\MessageSource;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Informs TDLib that messages are being viewed by the user. Sponsored messages must be marked as viewed only when the entire text of the message is shown on
 * the screen (excluding the button). Many useful activities depend on whether the messages are currently being viewed or not (e.g., marking messages as read,
 * incrementing a view counter, updating a view counter, removing deleted messages in supergroups and channels).
 */
class ViewMessages extends TdFunction
{
    public const string TYPE_NAME = 'viewMessages';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int            $chatId,
        /**
         * Pass true to mark as read the specified messages even if the chat is closed.
         */
        protected bool           $forceRead,
        /**
         * The identifiers of the messages being viewed.
         *
         * @var int[]
         */
        protected array          $messageIds,
        /**
         * Source of the message view; pass null to guess the source based on chat open state.
         */
        protected ?MessageSource $source = null,
    ) {}

    public static function fromArray(array $array): ViewMessages
    {
        return new static(
            chatId    : $array['chat_id'],
            forceRead : $array['force_read'],
            messageIds: $array['message_ids'],
            source    : (isset($array['source']) ? TdSchemaRegistry::fromArray($array['source']) : null),
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getForceRead(): bool
    {
        return $this->forceRead;
    }

    public function getMessageIds(): array
    {
        return $this->messageIds;
    }

    public function getSource(): ?MessageSource
    {
        return $this->source;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setForceRead(bool $value): static
    {
        $this->forceRead = $value;

        return $this;
    }

    public function setMessageIds(array $value): static
    {
        $this->messageIds = $value;

        return $this;
    }

    public function setSource(?MessageSource $value): static
    {
        $this->source = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'chat_id'     => $this->chatId,
            'force_read'  => $this->forceRead,
            'message_ids' => $this->messageIds,
            'source'      => (null !== $this->source ? $this->source->jsonSerialize() : null),
        ];
    }
}
