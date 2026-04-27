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
    public const string TYPE_NAME = 'updateQuickReplyShortcutMessages';

    public function __construct(
        /**
         * The new list of quick reply messages for the shortcut in order from the first to the last sent.
         *
         * @var QuickReplyMessage[]
         */
        protected array $messages,
        /**
         * The identifier of the shortcut.
         */
        protected int   $shortcutId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateQuickReplyShortcutMessages
    {
        return new static(
            messages  : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['messages']),
            shortcutId: $array['shortcut_id'],
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

    public function setMessages(array $value): static
    {
        $this->messages = $value;

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
            'messages'    => array_map(static fn($x) => $x->jsonSerialize(), $this->messages),
            'shortcut_id' => $this->shortcutId,
        ];
    }
}
