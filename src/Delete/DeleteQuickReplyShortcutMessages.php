<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Delete;

use Totaldev\TgSchema\TdFunction;

/**
 * Deletes specified quick reply messages.
 */
class DeleteQuickReplyShortcutMessages extends TdFunction
{
    public const TYPE_NAME = 'deleteQuickReplyShortcutMessages';

    public function __construct(
        /**
         * Unique identifier of the quick reply shortcut to which the messages belong.
         */
        protected int   $shortcutId,
        /**
         * Unique identifiers of the messages.
         *
         * @var int[]
         */
        protected array $messageIds,
    ) {}

    public static function fromArray(array $array): DeleteQuickReplyShortcutMessages
    {
        return new static(
            $array['shortcut_id'],
            $array['message_ids'],
        );
    }

    public function getMessageIds(): array
    {
        return $this->messageIds;
    }

    public function getShortcutId(): int
    {
        return $this->shortcutId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'shortcut_id' => $this->shortcutId,
            'message_ids' => $this->messageIds,
        ];
    }
}
