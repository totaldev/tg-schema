<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Story;

use Totaldev\TgSchema\Message\Message;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A forward of the story as a message.
 */
class StoryInteractionTypeForward extends StoryInteractionType
{
    public const TYPE_NAME = 'storyInteractionTypeForward';

    public function __construct(
        /**
         * The message with story forward.
         */
        protected Message $message
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StoryInteractionTypeForward
    {
        return new static(
            TdSchemaRegistry::fromArray($array['message']),
        );
    }

    public function getMessage(): Message
    {
        return $this->message;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'message' => $this->message->typeSerialize(),
        ];
    }
}
