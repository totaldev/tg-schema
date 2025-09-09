<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Reorder;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes the order of quick reply shortcuts.
 */
class ReorderQuickReplyShortcuts extends TdFunction
{
    public const TYPE_NAME = 'reorderQuickReplyShortcuts';

    public function __construct(
        /**
         * The new order of quick reply shortcuts.
         *
         * @var int[]
         */
        protected array $shortcutIds
    ) {}

    public static function fromArray(array $array): ReorderQuickReplyShortcuts
    {
        return new static(
            $array['shortcut_ids'],
        );
    }

    public function getShortcutIds(): array
    {
        return $this->shortcutIds;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'shortcut_ids' => $this->shortcutIds,
        ];
    }
}
