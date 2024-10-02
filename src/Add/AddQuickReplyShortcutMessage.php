<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Add;

use Totaldev\TgSchema\Input\InputMessageContent;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Adds a message to a quick reply shortcut. If shortcut doesn't exist and there are less than getOption("quick_reply_shortcut_count_max") shortcuts, then a
 * new shortcut is created. The shortcut must not contain more than getOption("quick_reply_shortcut_message_count_max") messages after adding the new message.
 * Returns the added message.
 */
class AddQuickReplyShortcutMessage extends TdFunction
{
    public const TYPE_NAME = 'addQuickReplyShortcutMessage';

    public function __construct(
        /**
         * Name of the target shortcut.
         */
        protected string              $shortcutName,
        /**
         * Identifier of a quick reply message in the same shortcut to be replied; pass 0 if none.
         */
        protected int                 $replyToMessageId,
        /**
         * The content of the message to be added; inputMessagePoll, inputMessageForwarded and inputMessageLocation with live_period aren't supported.
         */
        protected InputMessageContent $inputMessageContent,
    ) {}

    public static function fromArray(array $array): AddQuickReplyShortcutMessage
    {
        return new static(
            $array['shortcut_name'],
            $array['reply_to_message_id'],
            TdSchemaRegistry::fromArray($array['input_message_content']),
        );
    }

    public function getInputMessageContent(): InputMessageContent
    {
        return $this->inputMessageContent;
    }

    public function getReplyToMessageId(): int
    {
        return $this->replyToMessageId;
    }

    public function getShortcutName(): string
    {
        return $this->shortcutName;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'shortcut_name'         => $this->shortcutName,
            'reply_to_message_id'   => $this->replyToMessageId,
            'input_message_content' => $this->inputMessageContent->typeSerialize(),
        ];
    }
}
