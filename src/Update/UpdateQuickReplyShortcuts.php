<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * The list of quick reply shortcuts has changed.
 */
class UpdateQuickReplyShortcuts extends Update
{
    public const TYPE_NAME = 'updateQuickReplyShortcuts';

    public function __construct(
        /**
         * The new list of identifiers of quick reply shortcuts.
         *
         * @var int[]
         */
        protected array $shortcutIds
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateQuickReplyShortcuts
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
