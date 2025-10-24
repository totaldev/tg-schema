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
    public const string TYPE_NAME = 'inputMessageForwarded';

    public function __construct(
        /**
         * Identifier for the chat this forwarded message came from.
         */
        protected int                 $fromChatId,
        /**
         * Identifier of the message to forward. A message can be forwarded only if messageProperties.can_be_forwarded.
         */
        protected int                 $messageId,
        /**
         * Pass true if a game message is being shared from a launched game; applies only to game messages.
         */
        protected bool                $inGameShare,
        /**
         * Pass true to replace video start timestamp in the forwarded message.
         */
        protected bool                $replaceVideoStartTimestamp,
        /**
         * The new video start timestamp; ignored if replace_video_start_timestamp == false.
         */
        protected int                 $newVideoStartTimestamp,
        /**
         * Options to be used to copy content of the message without reference to the original sender; pass null to forward the message as usual.
         */
        protected ?MessageCopyOptions $copyOptions = null,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputMessageForwarded
    {
        return new static(
            $array['from_chat_id'],
            $array['message_id'],
            $array['in_game_share'],
            $array['replace_video_start_timestamp'],
            $array['new_video_start_timestamp'],
            isset($array['copy_options']) ? TdSchemaRegistry::fromArray($array['copy_options']) : null,
        );
    }

    public function getCopyOptions(): ?MessageCopyOptions
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

    public function getNewVideoStartTimestamp(): int
    {
        return $this->newVideoStartTimestamp;
    }

    public function getReplaceVideoStartTimestamp(): bool
    {
        return $this->replaceVideoStartTimestamp;
    }

    public function setCopyOptions(?MessageCopyOptions $value): static
    {
        $this->copyOptions = $value;

        return $this;
    }

    public function setFromChatId(int $value): static
    {
        $this->fromChatId = $value;

        return $this;
    }

    public function setInGameShare(bool $value): static
    {
        $this->inGameShare = $value;

        return $this;
    }

    public function setMessageId(int $value): static
    {
        $this->messageId = $value;

        return $this;
    }

    public function setNewVideoStartTimestamp(int $value): static
    {
        $this->newVideoStartTimestamp = $value;

        return $this;
    }

    public function setReplaceVideoStartTimestamp(bool $value): static
    {
        $this->replaceVideoStartTimestamp = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                         => static::TYPE_NAME,
            'from_chat_id'                  => $this->fromChatId,
            'message_id'                    => $this->messageId,
            'in_game_share'                 => $this->inGameShare,
            'replace_video_start_timestamp' => $this->replaceVideoStartTimestamp,
            'new_video_start_timestamp'     => $this->newVideoStartTimestamp,
            'copy_options'                  => $this->copyOptions ?? null,
        ];
    }
}
