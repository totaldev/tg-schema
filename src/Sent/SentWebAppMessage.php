<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Sent;

use Totaldev\TgSchema\TdObject;

/**
 * Information about the message sent by answerWebAppQuery.
 */
class SentWebAppMessage extends TdObject
{
    public const string TYPE_NAME = 'sentWebAppMessage';

    public function __construct(
        /**
         * Identifier of the sent inline message, if known.
         */
        protected string $inlineMessageId
    ) {}

    public static function fromArray(array $array): SentWebAppMessage
    {
        return new static(
            inlineMessageId: $array['inline_message_id'],
        );
    }

    public function getInlineMessageId(): string
    {
        return $this->inlineMessageId;
    }

    public function setInlineMessageId(string $value): static
    {
        $this->inlineMessageId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'inline_message_id' => $this->inlineMessageId,
        ];
    }
}
