<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Send;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sends a message to other participants of a group call. Requires groupCall.can_send_messages right.
 */
class SendGroupCallMessage extends TdFunction
{
    public const string TYPE_NAME = 'sendGroupCallMessage';

    public function __construct(
        /**
         * Group call identifier.
         */
        protected int           $groupCallId,
        /**
         * The number of Telegram Stars the user agreed to pay to send the message; for live stories only; 0-getOption("paid_group_call_message_star_count_max"). Must be 0 for messages sent to live stories posted by the current user.
         */
        protected int           $paidMessageStarCount,
        /**
         * Text of the message to send; 1-getOption("group_call_message_text_length_max") characters for non-live-stories; see updateGroupCallMessageLevels for live story restrictions, which depends on paid_message_star_count. Can't contain line feeds for live stories. Can contain only Bold, Italic, Underline, Strikethrough, Spoiler, CustomEmoji, and DateTime entities for live stories.
         */
        protected FormattedText $text,
    ) {}

    public static function fromArray(array $array): SendGroupCallMessage
    {
        return new static(
            groupCallId         : $array['group_call_id'],
            paidMessageStarCount: $array['paid_message_star_count'],
            text                : TdSchemaRegistry::fromArray($array['text']),
        );
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function getPaidMessageStarCount(): int
    {
        return $this->paidMessageStarCount;
    }

    public function getText(): FormattedText
    {
        return $this->text;
    }

    public function setGroupCallId(int $value): static
    {
        $this->groupCallId = $value;

        return $this;
    }

    public function setPaidMessageStarCount(int $value): static
    {
        $this->paidMessageStarCount = $value;

        return $this;
    }

    public function setText(FormattedText $value): static
    {
        $this->text = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'group_call_id'           => $this->groupCallId,
            'paid_message_star_count' => $this->paidMessageStarCount,
            'text'                    => $this->text->jsonSerialize(),
        ];
    }
}
