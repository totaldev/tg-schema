<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_folder_id' => $this->chatFolderId,
        ];
    }

    public function getChatFolderId(): int
    {
        return $this->chatFolderId;
    }
}
