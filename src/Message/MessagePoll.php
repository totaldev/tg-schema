<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\Poll\Poll;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A message with a poll.
 */
class MessagePoll extends MessageContent
{
    public const string TYPE_NAME = 'messagePoll';

    public function __construct(
        /**
         * True, if an option can be added to the poll using addPollOption.
         */
        protected bool           $canAddOption,
        /**
         * Description of the poll.
         */
        protected FormattedText  $description,
        /**
         * Media attached to the poll. Currently, can be only of the types messageAnimation, messageAudio, messageDocument, messageLocation, messagePhoto, messageVenue, or messageVideo without caption.
         */
        protected MessageContent $media,
        /**
         * Information about the poll.
         */
        protected Poll           $poll,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessagePoll
    {
        return new static(
            canAddOption: $array['can_add_option'],
            description : TdSchemaRegistry::fromArray($array['description']),
            media       : TdSchemaRegistry::fromArray($array['media']),
            poll        : TdSchemaRegistry::fromArray($array['poll']),
        );
    }

    public function getCanAddOption(): bool
    {
        return $this->canAddOption;
    }

    public function getDescription(): FormattedText
    {
        return $this->description;
    }

    public function getMedia(): MessageContent
    {
        return $this->media;
    }

    public function getPoll(): Poll
    {
        return $this->poll;
    }

    public function setCanAddOption(bool $value): static
    {
        $this->canAddOption = $value;

        return $this;
    }

    public function setDescription(FormattedText $value): static
    {
        $this->description = $value;

        return $this;
    }

    public function setMedia(MessageContent $value): static
    {
        $this->media = $value;

        return $this;
    }

    public function setPoll(Poll $value): static
    {
        $this->poll = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'can_add_option' => $this->canAddOption,
            'description'    => $this->description->jsonSerialize(),
            'media'          => $this->media->jsonSerialize(),
            'poll'           => $this->poll->jsonSerialize(),
        ];
    }
}
