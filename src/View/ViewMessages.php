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
    public const TYPE_NAME = 'viewMessages';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int           $chatId,
        /**
         * The identifiers of the messages being viewed.
         *
         * @var int[]
         */
        protected array         $messageIds,
        /**
         * Source of the message view; pass null to guess the source based on chat open state.
         */
        protected MessageSource $source,
        /**
         * Pass true to mark as read the specified messages even the chat is closed.
         */
        protected bool          $forceRead
    ) {}

    public static function fromArray(array $array): ViewMessages
    {
        return new static(
            $array['chat_id'],
            $array['message_ids'],
            TdSchemaRegistry::fromArray($array['source']),
            $array['force_read'],
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

    public function getSource(): MessageSource
    {
        return $this->source;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'chat_id'     => $this->chatId,
            'message_ids' => $this->messageIds,
            'source'      => $this->source->typeSerialize(),
            'force_read'  => $this->forceRead,
        ];
    }
}
