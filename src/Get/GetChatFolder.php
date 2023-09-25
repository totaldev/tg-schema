<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns information about a chat folder by its identifier
 */
class GetChatFolder extends TdFunction
{
    public const TYPE_NAME = 'getChatFolder';

    /**
     * Chat folder identifier
     *
     * @var int
     */
    protected int $chatFolderId;

    public function __construct(int $chatFolderId)
    {
        $this->chatFolderId = $chatFolderId;
    }

    public static function fromArray(array $array): GetChatFolder
    {
        return new static(
            $array['chat_folder_id'],
        );
    }

    public function getChatFolderId(): int
    {
        return $this->chatFolderId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_folder_id' => $this->chatFolderId,
        ];
    }
}
