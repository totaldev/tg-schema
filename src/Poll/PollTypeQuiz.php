<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Poll;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\Message\MessageContent;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A poll in quiz mode, which has predefined correct answers.
 */
class PollTypeQuiz extends PollType
{
    public const string TYPE_NAME = 'pollTypeQuiz';

    public function __construct(
        /**
         * Increasing list of 0-based identifiers of the correct answer options; empty for a yet unanswered poll.
         *
         * @var int[]
         */
        protected array           $correctOptionIds,
        /**
         * Text that is shown when the user chooses an incorrect answer or taps on the lamp icon; empty for a yet unanswered poll.
         */
        protected FormattedText   $explanation,
        /**
         * Media that is shown when the user chooses an incorrect answer or taps on the lamp icon; may be null if none or the poll is unanswered yet. Currently, can be only of the types messageAnimation, messageAudio, messageDocument, messageLocation, messagePhoto, messageVenue, or messageVideo without caption.
         */
        protected ?MessageContent $explanationMedia,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PollTypeQuiz
    {
        return new static(
            correctOptionIds: $array['correct_option_ids'],
            explanation     : TdSchemaRegistry::fromArray($array['explanation']),
            explanationMedia: (isset($array['explanation_media']) ? TdSchemaRegistry::fromArray($array['explanation_media']) : null),
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

    public function getExplanationMedia(): ?MessageContent
    {
        return $this->explanationMedia;
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

    public function setExplanationMedia(?MessageContent $value): static
    {
        $this->explanationMedia = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'correct_option_ids' => $this->correctOptionIds,
            'explanation'        => $this->explanation->jsonSerialize(),
            'explanation_media'  => (null !== $this->explanationMedia ? $this->explanationMedia->jsonSerialize() : null),
        ];
    }
}
