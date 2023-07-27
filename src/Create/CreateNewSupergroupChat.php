<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Create;

use Totaldev\TgSchema\Chat\ChatLocation;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Creates a new supergroup or channel and sends a corresponding messageSupergroupChatCreate. Returns the newly created chat
 */
class CreateNewSupergroupChat extends TdFunction
{
    public const TYPE_NAME = 'createNewSupergroupChat';

    /**
     * Title of the new chat; 1-128 characters
     *
     * @var string
     */
    protected string $title;

    /**
     * Pass true to create a forum supergroup chat
     *
     * @var bool
     */
    protected bool $isForum;

    /**
     * Pass true to create a channel chat; ignored if a forum is created
     *
     * @var bool
     */
    protected bool $isChannel;

    /**
     * Chat description; 0-255 characters
     *
     * @var string
     */
    protected string $description;

    /**
     * Chat location if a location-based supergroup is being created; pass null to create an ordinary supergroup chat
     *
     * @var ChatLocation
     */
    protected ChatLocation $location;

    /**
     * Message auto-delete time value, in seconds; must be from 0 up to 365 * 86400 and be divisible by 86400. If 0, then messages aren't deleted automatically
     *
     * @var int
     */
    protected int $messageAutoDeleteTime;

    /**
     * Pass true to create a supergroup for importing messages using importMessage
     *
     * @var bool
     */
    protected bool $forImport;

    public function __construct(
        string $title,
        bool $isForum,
        bool $isChannel,
        string $description,
        ChatLocation $location,
        int $messageAutoDeleteTime,
        bool $forImport,
    ) {
        $this->title = $title;
        $this->isForum = $isForum;
        $this->isChannel = $isChannel;
        $this->description = $description;
        $this->location = $location;
        $this->messageAutoDeleteTime = $messageAutoDeleteTime;
        $this->forImport = $forImport;
    }

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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'title' => $this->title,
            'is_forum' => $this->isForum,
            'is_channel' => $this->isChannel,
            'description' => $this->description,
            'location' => $this->location->typeSerialize(),
            'message_auto_delete_time' => $this->messageAutoDeleteTime,
            'for_import' => $this->forImport,
        ];
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getIsForum(): bool
    {
        return $this->isForum;
    }

    public function getIsChannel(): bool
    {
        return $this->isChannel;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getLocation(): ChatLocation
    {
        return $this->location;
    }

    public function getMessageAutoDeleteTime(): int
    {
        return $this->messageAutoDeleteTime;
    }

    public function getForImport(): bool
    {
        return $this->forImport;
    }
}
