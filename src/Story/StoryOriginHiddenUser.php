<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Story;

/**
 * The original story was sent by an unknown user.
 */
class StoryOriginHiddenUser extends StoryOrigin
{
    public const TYPE_NAME = 'storyOriginHiddenUser';

    public function __construct(
        /**
         * Name of the story sender.
         */
        protected string $senderName
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StoryOriginHiddenUser
    {
        return new static(
            $array['sender_name'],
        );
    }

    public function getSenderName(): string
    {
        return $this->senderName;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'sender_name' => $this->senderName,
        ];
    }
}
