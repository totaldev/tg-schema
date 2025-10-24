<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Edit;

use Totaldev\TgSchema\Input\InputMessageContent;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Asynchronously edits the text, media or caption of a quick reply message. Use quickReplyMessage.can_be_edited to check whether a message can be edited.
 * Media message can be edited only to a media message. Checklist messages can be edited only to a checklist message. The type of message content in an album
 * can't be changed with exception of replacing a photo with a video or vice versa.
 */
class EditQuickReplyMessage extends TdFunction
{
    public const string TYPE_NAME = 'editQuickReplyMessage';

    public function __construct(
        /**
         * Unique identifier of the quick reply shortcut with the message.
         */
        protected int                 $shortcutId,
        /**
         * Identifier of the message.
         */
        protected int                 $messageId,
        /**
         * New content of the message. Must be one of the following types: inputMessageAnimation, inputMessageAudio, inputMessageChecklist, inputMessageDocument, inputMessagePhoto, inputMessageText, or inputMessageVideo.
         */
        protected InputMessageContent $inputMessageContent,
    ) {}

    public static function fromArray(array $array): EditQuickReplyMessage
    {
        return new static(
            $array['shortcut_id'],
            $array['message_id'],
            TdSchemaRegistry::fromArray($array['input_message_content']),
        );
    }

    public function getInputMessageContent(): InputMessageContent
    {
        return $this->inputMessageContent;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getShortcutId(): int
    {
        return $this->shortcutId;
    }

    public function setInputMessageContent(InputMessageContent $value): static
    {
        $this->inputMessageContent = $value;

        return $this;
    }

    public function setMessageId(int $value): static
    {
        $this->messageId = $value;

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
            '@type'                 => static::TYPE_NAME,
            'shortcut_id'           => $this->shortcutId,
            'message_id'            => $this->messageId,
            'input_message_content' => $this->inputMessageContent->typeSerialize(),
        ];
    }
}
