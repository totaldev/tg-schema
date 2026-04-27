<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Poll;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A poll in quiz mode, which has exactly one correct answer option and can be answered only once.
 */
class PollTypeQuiz extends PollType
{
    public const string TYPE_NAME = 'pollTypeQuiz';

    public function __construct(
        /**
         * 0-based identifier of the correct answer option; -1 for a yet unanswered poll.
         */
        protected int           $correctOptionId,
        /**
         * Text that is shown when the user chooses an incorrect answer or taps on the lamp icon; 0-200 characters with at most 2 line feeds; empty for a yet unanswered poll.
         */
        protected FormattedText $explanation,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PollTypeQuiz
    {
        return new static(
            correctOptionId: $array['correct_option_id'],
            explanation    : TdSchemaRegistry::fromArray($array['explanation']),
        );
    }

    public function getCorrectOptionId(): int
    {
        return $this->correctOptionId;
    }

    public function getExplanation(): FormattedText
    {
        return $this->explanation;
    }

    public function setCorrectOptionId(int $value): static
    {
        $this->correctOptionId = $value;

        return $this;
    }

    public function setExplanation(FormattedText $value): static
    {
        $this->explanation = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'correct_option_id' => $this->correctOptionId,
            'explanation'       => $this->explanation->jsonSerialize(),
        ];
    }
}
