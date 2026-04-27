<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Create;

use Totaldev\TgSchema\Chat\ChatLocation;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Creates a new supergroup or channel and sends a corresponding messageSupergroupChatCreate. Returns the newly created chat.
 */
class CreateNewSupergroupChat extends TdFunction
{
    public const string TYPE_NAME = 'createNewSupergroupChat';

    public function __construct(
        /**
         * Chat description; 0-255 characters.
         */
        protected string        $description,
        /**
         * Pass true to create a supergroup for importing messages using importMessages.
         */
        protected bool          $forImport,
        /**
         * Pass true to create a channel chat; ignored if a forum is created.
         */
        protected bool          $isChannel,
        /**
         * Pass true to create a forum supergroup chat.
         */
        protected bool          $isForum,
        /**
         * Message auto-delete time value, in seconds; must be from 0 up to 365 * 86400 and be divisible by 86400. If 0, then messages aren't deleted automatically.
         */
        protected int           $messageAutoDeleteTime,
        /**
         * Title of the new chat; 1-128 characters.
         */
        protected string        $title,
        /**
         * Chat location if a location-based supergroup is being created; pass null to create an ordinary supergroup chat.
         */
        protected ?ChatLocation $location = null,
    ) {}

    public static function fromArray(array $array): CreateNewSupergroupChat
    {
        return new static(
            description          : $array['description'],
            forImport            : $array['for_import'],
            isChannel            : $array['is_channel'],
            isForum              : $array['is_forum'],
            location             : (isset($array['location']) ? TdSchemaRegistry::fromArray($array['location']) : null),
            messageAutoDeleteTime: $array['message_auto_delete_time'],
            title                : $array['title'],
        );
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getForImport(): bool
    {
        return $this->forImport;
    }

    public function getIsChannel(): bool
    {
        return $this->isChannel;
    }

    public function getIsForum(): bool
    {
        return $this->isForum;
    }

    public function getLocation(): ?ChatLocation
    {
        return $this->location;
    }

    public function getMessageAutoDeleteTime(): int
    {
        return $this->messageAutoDeleteTime;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setDescription(string $value): static
    {
        $this->description = $value;

        return $this;
    }

    public function setForImport(bool $value): static
    {
        $this->forImport = $value;

        return $this;
    }

    public function setIsChannel(bool $value): static
    {
        $this->isChannel = $value;

        return $this;
    }

    public function setIsForum(bool $value): static
    {
        $this->isForum = $value;

        return $this;
    }

    public function setLocation(?ChatLocation $value): static
    {
        $this->location = $value;

        return $this;
    }

    public function setMessageAutoDeleteTime(int $value): static
    {
        $this->messageAutoDeleteTime = $value;

        return $this;
    }

    public function setTitle(string $value): static
    {
        $this->title = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                    => static::TYPE_NAME,
            'description'              => $this->description,
            'for_import'               => $this->forImport,
            'is_channel'               => $this->isChannel,
            'is_forum'                 => $this->isForum,
            'location'                 => (null !== $this->location ? $this->location->jsonSerialize() : null),
            'message_auto_delete_time' => $this->messageAutoDeleteTime,
            'title'                    => $this->title,
        ];
    }
}
