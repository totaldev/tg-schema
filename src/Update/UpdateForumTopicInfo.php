<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Forum\ForumTopicInfo;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Basic information about a topic in a forum chat was changed
 */
class UpdateForumTopicInfo extends Update
{
    public const TYPE_NAME = 'updateForumTopicInfo';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * New information about the topic
     *
     * @var ForumTopicInfo
     */
    protected ForumTopicInfo $info;

    public function __construct(int $chatId, ForumTopicInfo $info)
    {
        parent::__construct();

        $this->chatId = $chatId;
        $this->info = $info;
    }

    public static function fromArray(array $array): UpdateForumTopicInfo
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['info']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'info' => $this->info->typeSerialize(),
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getInfo(): ForumTopicInfo
    {
        return $this->info;
    }
}
