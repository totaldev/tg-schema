<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Create;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Creates a new basic group and sends a corresponding messageBasicGroupChatCreate. Returns the newly created chat
 */
class CreateNewBasicGroupChat extends TdFunction
{
    public const TYPE_NAME = 'createNewBasicGroupChat';

    /**
     * Message auto-delete time value, in seconds; must be from 0 up to 365 * 86400 and be divisible by 86400. If 0, then messages aren't deleted automatically
     *
     * @var int
     */
    protected int $messageAutoDeleteTime;

    /**
     * Title of the new basic group; 1-128 characters
     *
     * @var string
     */
    protected string $title;

    /**
     * Identifiers of users to be added to the basic group; may be empty to create a basic group without other members
     *
     * @var int[]
     */
    protected array $userIds;

    public function __construct(array $userIds, string $title, int $messageAutoDeleteTime)
    {
        $this->userIds = $userIds;
        $this->title = $title;
        $this->messageAutoDeleteTime = $messageAutoDeleteTime;
    }

    public static function fromArray(array $array): CreateNewBasicGroupChat
    {
        return new static(
            $array['user_ids'],
            $array['title'],
            $array['message_auto_delete_time'],
        );
    }

    public function getMessageAutoDeleteTime(): int
    {
        return $this->messageAutoDeleteTime;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getUserIds(): array
    {
        return $this->userIds;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'user_ids' => $this->userIds,
            'title' => $this->title,
            'message_auto_delete_time' => $this->messageAutoDeleteTime,
        ];
    }
}
