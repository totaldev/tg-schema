<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\Message\MessageCopyOptions;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A forwarded message.
 */
class InputMessageForwarded extends InputMessageContent
{
    public const TYPE_NAME = 'inputMessageForwarded';

    public function __construct(
        /**
         * Identifier for the chat this forwarded message came from.
         */
        protected int                $fromChatId,
        /**
         * Identifier of the message to forward. A message can be forwarded only if messageProperties.can_be_forwarded.
         */
        protected int                $messageId,
        /**
         * True, if a game message is being shared from a launched game; applies only to game messages.
         */
        protected bool               $inGameShare,
        /**
         * Options to be used to copy content of the message without reference to the original sender; pass null to forward the message as usual.
         */
        protected MessageCopyOptions $copyOptions,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputMessageForwarded
    {
        return new static(
            $array['from_chat_id'],
            $array['message_id'],
            $array['in_game_share'],
            TdSchemaRegistry::fromArray($array['copy_options']),
        );
    }

    public function getCopyOptions(): MessageCopyOptions
    {
        return $this->copyOptions;
    }

    public function getFromChatId(): int
    {
        return $this->fromChatId;
    }

    public function getInGameShare(): bool
    {
        return $this->inGameShare;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'from_chat_id'  => $this->fromChatId,
            'message_id'    => $this->messageId,
            'in_game_share' => $this->inGameShare,
            'copy_options'  => $this->copyOptions->typeSerialize(),
        ];
    }
}
