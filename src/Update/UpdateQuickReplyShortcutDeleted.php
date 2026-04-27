<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * A quick reply shortcut and all its messages were deleted.
 */
class UpdateQuickReplyShortcutDeleted extends Update
{
    public const string TYPE_NAME = 'updateQuickReplyShortcutDeleted';

    public function __construct(
        /**
         * The identifier of the deleted shortcut.
         */
        protected int $shortcutId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateQuickReplyShortcutDeleted
    {
        return new static(
            shortcutId: $array['shortcut_id'],
        );
    }

    public function getShortcutId(): int
    {
        return $this->shortcutId;
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
            'shortcut_id' => $this->shortcutId,
        ];
    }
}
