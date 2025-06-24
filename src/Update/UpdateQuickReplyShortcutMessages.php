<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Quick\QuickReplyMessage;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The list of quick reply shortcut messages has changed.
 */
class UpdateQuickReplyShortcutMessages extends Update
{
    public const TYPE_NAME = 'updateQuickReplyShortcutMessages';

    public function __construct(
        /**
         * The identifier of the shortcut.
         */
        protected int   $shortcutId,
        /**
         * The new list of quick reply messages for the shortcut in order from the first to the last sent.
         *
         * @var QuickReplyMessage[]
         */
        protected array $messages
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateQuickReplyShortcutMessages
    {
        return new static(
            $array['shortcut_id'],
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['messages']),
        );
    }

    public function getMessages(): array
    {
        return $this->messages;
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
            array_map(static fn($x) => $x->typeSerialize(), $this->messages),
        ];
    }
}
