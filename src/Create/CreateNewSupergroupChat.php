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
    public const TYPE_NAME = 'createNewSupergroupChat';

    public function __construct(
        /**
         * Title of the new chat; 1-128 characters.
         */
        protected string       $title,
        /**
         * Pass true to create a forum supergroup chat.
         */
        protected bool         $isForum,
        /**
         * Pass true to create a channel chat; ignored if a forum is created.
         */
        protected bool         $isChannel,
        /**
         * Chat description; 0-255 characters.
         */
        protected string       $description,
        /**
         * Chat location if a location-based supergroup is being created; pass null to create an ordinary supergroup chat.
         */
        protected ChatLocation $location,
        /**
         * Message auto-delete time value, in seconds; must be from 0 up to 365 * 86400 and be divisible by 86400. If 0, then messages aren't deleted automatically.
         */
        protected int          $messageAutoDeleteTime,
        /**
         * Pass true to create a supergroup for importing messages using importMessages.
         */
        protected bool         $forImport,
    ) {}

    public static function fromArray(array $array): CreateNewSupergroupChat
    {
        return new static(
            $array['title'],
            $array['is_forum'],
            $array['is_channel'],
            $array['description'],
            TdSchemaRegistry::fromArray($array['location']),
            $array['message_auto_delete_time'],
            $array['for_import'],
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

    public function getLocation(): ChatLocation
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

    public function typeSerialize(): array
    {
        return [
            '@type'                    => static::TYPE_NAME,
            'title'                    => $this->title,
            'is_forum'                 => $this->isForum,
            'is_channel'               => $this->isChannel,
            'description'              => $this->description,
            'location'                 => $this->location->typeSerialize(),
            'message_auto_delete_time' => $this->messageAutoDeleteTime,
            'for_import'               => $this->forImport,
        ];
    }
}
