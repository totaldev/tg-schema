<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Edit;

use Totaldev\TgSchema\Reply\ReplyMarkup;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Edits the reply markup of an inline message sent via a bot; for bots only.
 */
class EditInlineMessageReplyMarkup extends TdFunction
{
    public const TYPE_NAME = 'editInlineMessageReplyMarkup';

    public function __construct(
        /**
         * Inline message identifier.
         */
        protected string      $inlineMessageId,
        /**
         * The new message reply markup; pass null if none.
         */
        protected ReplyMarkup $replyMarkup,
    ) {}

    public static function fromArray(array $array): EditInlineMessageReplyMarkup
    {
        return new static(
            $array['inline_message_id'],
            TdSchemaRegistry::fromArray($array['reply_markup']),
        );
    }

    public function getInlineMessageId(): string
    {
        return $this->inlineMessageId;
    }

    public function getReplyMarkup(): ReplyMarkup
    {
        return $this->replyMarkup;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'inline_message_id' => $this->inlineMessageId,
            'reply_markup'      => $this->replyMarkup->typeSerialize(),
        ];
    }
}
