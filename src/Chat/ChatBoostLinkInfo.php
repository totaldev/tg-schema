<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about a link to boost a a chat
 */
class ChatBoostLinkInfo extends TdObject
{
    public const TYPE_NAME = 'chatBoostLinkInfo';

    /**
     * Identifier of the chat to which the link points; 0 if the chat isn't found
     *
     * @var int
     */
    protected int $chatId;

    /**
     * True, if the link will work for non-members of the chat
     *
     * @var bool
     */
    protected bool $isPublic;

    public function __construct(bool $isPublic, int $chatId)
    {
        $this->isPublic = $isPublic;
        $this->chatId = $chatId;
    }

    public static function fromArray(array $array): ChatBoostLinkInfo
    {
        return new static(
            $array['is_public'],
            $array['chat_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getIsPublic(): bool
    {
        return $this->isPublic;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'is_public' => $this->isPublic,
            'chat_id' => $this->chatId,
        ];
    }
}
