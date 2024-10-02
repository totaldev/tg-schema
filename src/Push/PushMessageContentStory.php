<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Push;

/**
 * A message with a story.
 */
class PushMessageContentStory extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentStory';

    public function __construct(
        /**
         * True, if the message is a pinned message with the specified content.
         */
        protected bool $isPinned
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentStory
    {
        return new static(
            $array['is_pinned'],
        );
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'is_pinned' => $this->isPinned,
        ];
    }
}
