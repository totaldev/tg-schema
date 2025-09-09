<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Story;

/**
 * The original story was posted by an unknown user.
 */
class StoryOriginHiddenUser extends StoryOrigin
{
    public const TYPE_NAME = 'storyOriginHiddenUser';

    public function __construct(
        /**
         * Name of the user or the chat that posted the story.
         */
        protected string $posterName
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StoryOriginHiddenUser
    {
        return new static(
            $array['poster_name'],
        );
    }

    public function getPosterName(): string
    {
        return $this->posterName;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'poster_name' => $this->posterName,
        ];
    }
}
