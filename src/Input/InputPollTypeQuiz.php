<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A poll in quiz mode, which has predefined correct answers.
 */
class InputPollTypeQuiz extends InputPollType
{
    public const string TYPE_NAME = 'inputPollTypeQuiz';

    public function __construct(
        /**
         * Increasing list of 0-based identifiers of the correct answer options; must be non-empty.
         *
         * @var int[]
         */
        protected array         $correctOptionIds,
        /**
         * Text that is shown when the user chooses an incorrect answer or taps on the lamp icon; 0-200 characters with at most 2 line feeds.
         */
        protected FormattedText $explanation,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputPollTypeQuiz
    {
        return new static(
            correctOptionIds: $array['correct_option_ids'],
            explanation     : TdSchemaRegistry::fromArray($array['explanation']),
        );
    }

    public function getCorrectOptionIds(): array
    {
        return $this->correctOptionIds;
    }

    public function getExplanation(): FormattedText
    {
        return $this->explanation;
    }

    public function setCorrectOptionIds(array $value): static
    {
        $this->correctOptionIds = $value;

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
            '@type'              => static::TYPE_NAME,
            'correct_option_ids' => $this->correctOptionIds,
            'explanation'        => $this->explanation->jsonSerialize(),
        ];
    }
}
