<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Poll;

/**
 * A regular poll.
 */
class PollTypeRegular extends PollType
{
    public const string TYPE_NAME = 'pollTypeRegular';

    public function __construct(
        /**
         * True, if multiple answer options can be chosen simultaneously.
         */
        protected bool $allowMultipleAnswers
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PollTypeRegular
    {
        return new static(
            allowMultipleAnswers: $array['allow_multiple_answers'],
        );
    }

    public function getAllowMultipleAnswers(): bool
    {
        return $this->allowMultipleAnswers;
    }

    public function setAllowMultipleAnswers(bool $value): static
    {
        $this->allowMultipleAnswers = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'allow_multiple_answers' => $this->allowMultipleAnswers,
        ];
    }
}
