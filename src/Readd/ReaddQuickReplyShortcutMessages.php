<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Readd;

use Totaldev\TgSchema\TdFunction;

/**
 * Readds quick reply messages which failed to add. Can be called only for messages for which messageSendingStateFailed.can_retry is true and after specified
 * in messageSendingStateFailed.retry_after time passed. If a message is readded, the corresponding failed to send message is deleted. Returns the sent
 * messages in the same order as the message identifiers passed in message_ids. If a message can't be readded, null will be returned instead of the message.
 */
class ReaddQuickReplyShortcutMessages extends TdFunction
{
    public const TYPE_NAME = 'readdQuickReplyShortcutMessages';

    public function __construct(
        /**
         * Name of the target shortcut.
         */
        protected string $shortcutName,
        /**
         * Identifiers of the quick reply messages to readd. Message identifiers must be in a strictly increasing order.
         *
         * @var int[]
         */
        protected array  $messageIds
    ) {}

    public static function fromArray(array $array): ReaddQuickReplyShortcutMessages
    {
        return new static(
            $array['shortcut_name'],
            $array['message_ids'],
        );
    }

    public function getMessageIds(): array
    {
        return $this->messageIds;
    }

    public function getShortcutName(): string
    {
        return $this->shortcutName;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'shortcut_name' => $this->shortcutName,
            'message_ids'   => $this->messageIds,
        ];
    }
}
