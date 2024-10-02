<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Add;

use Totaldev\TgSchema\TdFunction;

/**
 * Adds a message to a quick reply shortcut via inline bot. If shortcut doesn't exist and there are less than getOption("quick_reply_shortcut_count_max")
 * shortcuts, then a new shortcut is created. The shortcut must not contain more than getOption("quick_reply_shortcut_message_count_max") messages after adding
 * the new message. Returns the added message.
 */
class AddQuickReplyShortcutInlineQueryResultMessage extends TdFunction
{
    public const TYPE_NAME = 'addQuickReplyShortcutInlineQueryResultMessage';

    public function __construct(
        /**
         * Name of the target shortcut.
         */
        protected string $shortcutName,
        /**
         * Identifier of a quick reply message in the same shortcut to be replied; pass 0 if none.
         */
        protected int    $replyToMessageId,
        /**
         * Identifier of the inline query.
         */
        protected int    $queryId,
        /**
         * Identifier of the inline query result.
         */
        protected string $resultId,
        /**
         * Pass true to hide the bot, via which the message is sent. Can be used only for bots getOption("animation_search_bot_username"), getOption("photo_search_bot_username"), and getOption("venue_search_bot_username").
         */
        protected bool   $hideViaBot,
    ) {}

    public static function fromArray(array $array): AddQuickReplyShortcutInlineQueryResultMessage
    {
        return new static(
            $array['shortcut_name'],
            $array['reply_to_message_id'],
            $array['query_id'],
            $array['result_id'],
            $array['hide_via_bot'],
        );
    }

    public function getHideViaBot(): bool
    {
        return $this->hideViaBot;
    }

    public function getQueryId(): int
    {
        return $this->queryId;
    }

    public function getReplyToMessageId(): int
    {
        return $this->replyToMessageId;
    }

    public function getResultId(): string
    {
        return $this->resultId;
    }

    public function getShortcutName(): string
    {
        return $this->shortcutName;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'shortcut_name'       => $this->shortcutName,
            'reply_to_message_id' => $this->replyToMessageId,
            'query_id'            => $this->queryId,
            'result_id'           => $this->resultId,
            'hide_via_bot'        => $this->hideViaBot,
        ];
    }
}
