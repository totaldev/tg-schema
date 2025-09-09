<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes name of a quick reply shortcut.
 */
class SetQuickReplyShortcutName extends TdFunction
{
    public const TYPE_NAME = 'setQuickReplyShortcutName';

    public function __construct(
        /**
         * Unique identifier of the quick reply shortcut.
         */
        protected int    $shortcutId,
        /**
         * New name for the shortcut. Use checkQuickReplyShortcutName to check its validness.
         */
        protected string $name,
    ) {}

    public static function fromArray(array $array): SetQuickReplyShortcutName
    {
        return new static(
            $array['shortcut_id'],
            $array['name'],
        );
    }

    public function getName(): string
    {
        return $this->name;
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
            'name'        => $this->name,
        ];
    }
}
