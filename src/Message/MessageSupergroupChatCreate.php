<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * A newly created supergroup or channel.
 */
class MessageSupergroupChatCreate extends MessageContent
{
    public const string TYPE_NAME = 'messageSupergroupChatCreate';

    public function __construct(
        /**
         * Title of the supergroup or channel.
         */
        protected string $title
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageSupergroupChatCreate
    {
        return new static(
            title: $array['title'],
        );
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $value): static
    {
        $this->title = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'title' => $this->title,
        ];
    }
}
