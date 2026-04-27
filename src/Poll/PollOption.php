<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Poll;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\Message\MessageContent;
use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes one answer option of a poll.
 */
class PollOption extends TdObject
{
    public const string TYPE_NAME = 'pollOption';

    public function __construct(
        /**
         * Point in time (Unix timestamp) when the option was added; 0 if the option existed from creation of the poll.
         */
        protected int            $additionDate,
        /**
         * Identifier of the user or chat who added the option; may be null if the option existed from creation of the poll.
         */
        protected ?MessageSender $author,
        /**
         * Unique identifier of the option in the poll; may be empty if yet unassigned.
         */
        protected string         $id,
        /**
         * True, if the option is being chosen by a pending setPollAnswer request.
         */
        protected bool           $isBeingChosen,
        /**
         * True, if the option was chosen by the user.
         */
        protected bool           $isChosen,
        /**
         * Option media. Currently, can be only of the types messageAnimation, messageLocation, messagePhoto, messageSticker, messageVenue, or messageVideo without caption.
         */
        protected MessageContent $media,
        /**
         * Identifiers of recent voters for the option, if the poll is non-anonymous and poll results are available.
         *
         * @var MessageSender[]
         */
        protected array          $recentVoterIds,
        /**
         * Option text; 1-100 characters; may contain only custom emoji entities.
         */
        protected FormattedText  $text,
        /**
         * The percentage of votes for this option; 0-100.
         */
        protected int            $votePercentage,
        /**
         * Number of voters for this option, available only for closed or voted polls, or if the current user is the creator of the poll.
         */
        protected int            $voterCount,
    ) {}

    public static function fromArray(array $array): PollOption
    {
        return new static(
            additionDate  : $array['addition_date'],
            author        : (isset($array['author']) ? TdSchemaRegistry::fromArray($array['author']) : null),
            id            : $array['id'],
            isBeingChosen : $array['is_being_chosen'],
            isChosen      : $array['is_chosen'],
            media         : TdSchemaRegistry::fromArray($array['media']),
            recentVoterIds: array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['recent_voter_ids']),
            text          : TdSchemaRegistry::fromArray($array['text']),
            votePercentage: $array['vote_percentage'],
            voterCount    : $array['voter_count'],
        );
    }

    public function getAdditionDate(): int
    {
        return $this->additionDate;
    }

    public function getAuthor(): ?MessageSender
    {
        return $this->author;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getIsBeingChosen(): bool
    {
        return $this->isBeingChosen;
    }

    public function getIsChosen(): bool
    {
        return $this->isChosen;
    }

    public function getMedia(): MessageContent
    {
        return $this->media;
    }

    public function getRecentVoterIds(): array
    {
        return $this->recentVoterIds;
    }

    public function getText(): FormattedText
    {
        return $this->text;
    }

    public function getVotePercentage(): int
    {
        return $this->votePercentage;
    }

    public function getVoterCount(): int
    {
        return $this->voterCount;
    }

    public function setAdditionDate(int $value): static
    {
        $this->additionDate = $value;

        return $this;
    }

    public function setAuthor(?MessageSender $value): static
    {
        $this->author = $value;

        return $this;
    }

    public function setId(string $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setIsBeingChosen(bool $value): static
    {
        $this->isBeingChosen = $value;

        return $this;
    }

    public function setIsChosen(bool $value): static
    {
        $this->isChosen = $value;

        return $this;
    }

    public function setMedia(MessageContent $value): static
    {
        $this->media = $value;

        return $this;
    }

    public function setRecentVoterIds(array $value): static
    {
        $this->recentVoterIds = $value;

        return $this;
    }

    public function setText(FormattedText $value): static
    {
        $this->text = $value;

        return $this;
    }

    public function setVotePercentage(int $value): static
    {
        $this->votePercentage = $value;

        return $this;
    }

    public function setVoterCount(int $value): static
    {
        $this->voterCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'addition_date'    => $this->additionDate,
            'author'           => (null !== $this->author ? $this->author->jsonSerialize() : null),
            'id'               => $this->id,
            'is_being_chosen'  => $this->isBeingChosen,
            'is_chosen'        => $this->isChosen,
            'media'            => $this->media->jsonSerialize(),
            'recent_voter_ids' => array_map(static fn($x) => $x->jsonSerialize(), $this->recentVoterIds),
            'text'             => $this->text->jsonSerialize(),
            'vote_percentage'  => $this->votePercentage,
            'voter_count'      => $this->voterCount,
        ];
    }
}
