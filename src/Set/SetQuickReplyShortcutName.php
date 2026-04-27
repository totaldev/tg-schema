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
    public const string TYPE_NAME = 'setQuickReplyShortcutName';

    public function __construct(
        /**
         * New name for the shortcut. Use checkQuickReplyShortcutName to check its validness.
         */
        protected string $name,
        /**
         * Unique identifier of the quick reply shortcut.
         */
        protected int    $shortcutId,
    ) {}

    public static function fromArray(array $array): SetQuickReplyShortcutName
    {
        return new static(
            name      : $array['name'],
            shortcutId: $array['shortcut_id'],
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

    public function setName(string $value): static
    {
        $this->name = $value;

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
            'name'        => $this->name,
            'shortcut_id' => $this->shortcutId,
        ];
    }
}
