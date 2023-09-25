<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A forum topic has been closed or opened
 */
class MessageForumTopicIsClosedToggled extends MessageContent
{
    public const TYPE_NAME = 'messageForumTopicIsClosedToggled';

    /**
     * True, if the topic was closed; otherwise, the topic was reopened
     *
     * @var bool
     */
    protected bool $isClosed;

    public function __construct(bool $isClosed)
    {
        parent::__construct();

        $this->isClosed = $isClosed;
    }

    public static function fromArray(array $array): MessageForumTopicIsClosedToggled
    {
        return new static(
            $array['is_closed'],
        );
    }

    public function getIsClosed(): bool
    {
        return $this->isClosed;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'is_closed' => $this->isClosed,
        ];
    }
}
