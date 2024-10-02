<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns information about a chat folder by its identifier.
 */
class GetChatFolder extends TdFunction
{
    public const TYPE_NAME = 'getChatFolder';

    public function __construct(
        /**
         * Chat folder identifier.
         */
        protected int $chatFolderId
    ) {}

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
            '@type'          => static::TYPE_NAME,
            'chat_folder_id' => $this->chatFolderId,
        ];
    }
}
