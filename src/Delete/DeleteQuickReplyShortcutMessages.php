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
    public const string TYPE_NAME = 'deleteQuickReplyShortcutMessages';

    public function __construct(
        /**
         * Unique identifiers of the messages.
         *
         * @var int[]
         */
        protected array $messageIds,
        /**
         * Unique identifier of the quick reply shortcut to which the messages belong.
         */
        protected int   $shortcutId,
    ) {}

    public static function fromArray(array $array): DeleteQuickReplyShortcutMessages
    {
        return new static(
            messageIds: $array['message_ids'],
            shortcutId: $array['shortcut_id'],
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

    public function setMessageIds(array $value): static
    {
        $this->messageIds = $value;

        return $this;
    }

    public function setShortcutId(int $value): static
    {
        $this->shortcutId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'message_ids' => $this->messageIds,
            'shortcut_id' => $this->shortcutId,
        ];
    }
}
