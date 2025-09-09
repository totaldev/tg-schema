<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * An updated chat title.
 */
class MessageChatChangeTitle extends MessageContent
{
    public const TYPE_NAME = 'messageChatChangeTitle';

    public function __construct(
        /**
         * New chat title.
         */
        protected string $title
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageChatChangeTitle
    {
        return new static(
            $array['title'],
        );
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'title' => $this->title,
        ];
    }
}
