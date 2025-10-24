<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * A General forum topic has been hidden or unhidden.
 */
class MessageForumTopicIsHiddenToggled extends MessageContent
{
    public const string TYPE_NAME = 'messageForumTopicIsHiddenToggled';

    public function __construct(
        /**
         * True, if the topic was hidden; otherwise, the topic was unhidden.
         */
        protected bool $isHidden
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageForumTopicIsHiddenToggled
    {
        return new static(
            $array['is_hidden'],
        );
    }

    public function getIsHidden(): bool
    {
        return $this->isHidden;
    }

    public function setIsHidden(bool $value): static
    {
        $this->isHidden = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'is_hidden' => $this->isHidden,
        ];
    }
}
