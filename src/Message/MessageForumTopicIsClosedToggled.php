<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * A forum topic has been closed or opened.
 */
class MessageForumTopicIsClosedToggled extends MessageContent
{
    public const string TYPE_NAME = 'messageForumTopicIsClosedToggled';

    public function __construct(
        /**
         * True, if the topic was closed; otherwise, the topic was reopened.
         */
        protected bool $isClosed
    ) {
        parent::__construct();
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

    public function setIsClosed(bool $value): static
    {
        $this->isClosed = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'is_closed' => $this->isClosed,
        ];
    }
}
