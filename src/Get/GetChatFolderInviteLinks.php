<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns invite links created by the current user for a shareable chat folder.
 */
class GetChatFolderInviteLinks extends TdFunction
{
    public const TYPE_NAME = 'getChatFolderInviteLinks';

    public function __construct(
        /**
         * Chat folder identifier.
         */
        protected int $chatFolderId
    ) {}

    public static function fromArray(array $array): GetChatFolderInviteLinks
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
