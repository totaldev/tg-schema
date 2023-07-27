<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Sent;

use Totaldev\TgSchema\TdObject;

/**
 * Information about the message sent by answerWebAppQuery
 */
class SentWebAppMessage extends TdObject
{
    public const TYPE_NAME = 'sentWebAppMessage';

    /**
     * Identifier of the sent inline message, if known
     *
     * @var string
     */
    protected string $inlineMessageId;

    public function __construct(string $inlineMessageId)
    {
        $this->inlineMessageId = $inlineMessageId;
    }

    public static function fromArray(array $array): SentWebAppMessage
    {
        return new static(
            $array['inline_message_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'inline_message_id' => $this->inlineMessageId,
        ];
    }

    public function getInlineMessageId(): string
    {
        return $this->inlineMessageId;
    }
}
