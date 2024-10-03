<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Push;

/**
 * A chat title was edited.
 */
class PushMessageContentChatChangeTitle extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentChatChangeTitle';

    public function __construct(
        /**
         * New chat title.
         */
        protected string $title
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentChatChangeTitle
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
