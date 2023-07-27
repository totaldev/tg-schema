<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Suggested;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Suggests the user to enable archive_and_mute_new_chats_from_unknown_users setting in archiveChatListSettings
 */
class SuggestedActionEnableArchiveAndMuteNewChats extends SuggestedAction
{
    public const TYPE_NAME = 'suggestedActionEnableArchiveAndMuteNewChats';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SuggestedActionEnableArchiveAndMuteNewChats
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}