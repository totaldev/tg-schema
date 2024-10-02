<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Delete;

use Totaldev\TgSchema\TdFunction;

/**
 * Deletes a quick reply shortcut.
 */
class DeleteQuickReplyShortcut extends TdFunction
{
    public const TYPE_NAME = 'deleteQuickReplyShortcut';

    public function __construct(
        /**
         * Unique identifier of the quick reply shortcut.
         */
        protected int $shortcutId
    ) {}

    public static function fromArray(array $array): DeleteQuickReplyShortcut
    {
        return new static(
            $array['shortcut_id'],
        );
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
        ];
    }
}
