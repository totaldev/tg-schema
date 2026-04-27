<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Push;

/**
 * An option was added to a poll.
 */
class PushMessageContentPollOptionAdded extends PushMessageContent
{
    public const string TYPE_NAME = 'pushMessageContentPollOptionAdded';

    public function __construct(
        /**
         * Text of the option.
         */
        protected string $text
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentPollOptionAdded
    {
        return new static(
            text: $array['text'],
        );
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $value): static
    {
        $this->text = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'text'  => $this->text,
        ];
    }
}
