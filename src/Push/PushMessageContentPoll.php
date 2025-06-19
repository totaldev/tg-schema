<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Push;

/**
 * A message with a poll.
 */
class PushMessageContentPoll extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentPoll';

    public function __construct(
        /**
         * Poll question.
         */
        protected string $question,
        /**
         * True, if the poll is regular and not in quiz mode.
         */
        protected bool   $isRegular,
        /**
         * True, if the message is a pinned message with the specified content.
         */
        protected bool   $isPinned
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentPoll
    {
        return new static(
            $array['question'],
            $array['is_regular'],
            $array['is_pinned'],
        );
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }

    public function getIsRegular(): bool
    {
        return $this->isRegular;
    }

    public function getQuestion(): string
    {
        return $this->question;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'question'   => $this->question,
            'is_regular' => $this->isRegular,
            'is_pinned'  => $this->isPinned,
        ];
    }
}
