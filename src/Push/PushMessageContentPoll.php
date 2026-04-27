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
    public const string TYPE_NAME = 'pushMessageContentPoll';

    public function __construct(
        /**
         * True, if the message is a pinned message with the specified content.
         */
        protected bool   $isPinned,
        /**
         * True, if the poll is regular and not in quiz mode.
         */
        protected bool   $isRegular,
        /**
         * Poll question.
         */
        protected string $question,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentPoll
    {
        return new static(
            isPinned : $array['is_pinned'],
            isRegular: $array['is_regular'],
            question : $array['question'],
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

    public function setIsPinned(bool $value): static
    {
        $this->isPinned = $value;

        return $this;
    }

    public function setIsRegular(bool $value): static
    {
        $this->isRegular = $value;

        return $this;
    }

    public function setQuestion(string $value): static
    {
        $this->question = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'is_pinned'  => $this->isPinned,
            'is_regular' => $this->isRegular,
            'question'   => $this->question,
        ];
    }
}
