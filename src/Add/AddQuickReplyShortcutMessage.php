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
    public const string TYPE_NAME = 'addQuickReplyShortcutMessage';

    public function __construct(
        /**
         * The content of the message to be added; inputMessagePaidMedia, inputMessageForwarded and inputMessageLocation with live_period aren't supported.
         */
        protected InputMessageContent $inputMessageContent,
        /**
         * Identifier of a quick reply message in the same shortcut to be replied; pass 0 if none.
         */
        protected int                 $replyToMessageId,
        /**
         * Name of the target shortcut.
         */
        protected string              $shortcutName,
    ) {}

    public static function fromArray(array $array): AddQuickReplyShortcutMessage
    {
        return new static(
            inputMessageContent: TdSchemaRegistry::fromArray($array['input_message_content']),
            replyToMessageId   : $array['reply_to_message_id'],
            shortcutName       : $array['shortcut_name'],
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

    public function setInputMessageContent(InputMessageContent $value): static
    {
        $this->inputMessageContent = $value;

        return $this;
    }

    public function setReplyToMessageId(int $value): static
    {
        $this->replyToMessageId = $value;

        return $this;
    }

    public function setShortcutName(string $value): static
    {
        $this->shortcutName = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'input_message_content' => $this->inputMessageContent->jsonSerialize(),
            'reply_to_message_id'   => $this->replyToMessageId,
            'shortcut_name'         => $this->shortcutName,
        ];
    }
}
