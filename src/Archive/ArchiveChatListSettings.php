<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Archive;

use Totaldev\TgSchema\TdObject;

/**
 * Contains settings for automatic moving of chats to and from the Archive chat lists.
 */
class ArchiveChatListSettings extends TdObject
{
    public const TYPE_NAME = 'archiveChatListSettings';

    public function __construct(
        /**
         * True, if new chats from non-contacts will be automatically archived and muted. Can be set to true only if the option "can_archive_and_mute_new_chats_from_unknown_users" is true.
         */
        protected bool $archiveAndMuteNewChatsFromUnknownUsers,
        /**
         * True, if unmuted chats will be kept in the Archive chat list when they get a new message.
         */
        protected bool $keepUnmutedChatsArchived,
        /**
         * True, if unmuted chats, that are always included or pinned in a folder, will be kept in the Archive chat list when they get a new message. Ignored if keep_unmuted_chats_archived == true.
         */
        protected bool $keepChatsFromFoldersArchived,
    ) {}

    public static function fromArray(array $array): ArchiveChatListSettings
    {
        return new static(
            $array['archive_and_mute_new_chats_from_unknown_users'],
            $array['keep_unmuted_chats_archived'],
            $array['keep_chats_from_folders_archived'],
        );
    }

    public function getArchiveAndMuteNewChatsFromUnknownUsers(): bool
    {
        return $this->archiveAndMuteNewChatsFromUnknownUsers;
    }

    public function getKeepChatsFromFoldersArchived(): bool
    {
        return $this->keepChatsFromFoldersArchived;
    }

    public function getKeepUnmutedChatsArchived(): bool
    {
        return $this->keepUnmutedChatsArchived;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                                         => static::TYPE_NAME,
            'archive_and_mute_new_chats_from_unknown_users' => $this->archiveAndMuteNewChatsFromUnknownUsers,
            'keep_unmuted_chats_archived'                   => $this->keepUnmutedChatsArchived,
            'keep_chats_from_folders_archived'              => $this->keepChatsFromFoldersArchived,
        ];
    }
}
