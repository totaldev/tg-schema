<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Business;

use Totaldev\TgSchema\TdObject;

/**
 * Describes private chats chosen for automatic interaction with a business.
 */
class BusinessRecipients extends TdObject
{
    public const TYPE_NAME = 'businessRecipients';

    public function __construct(
        /**
         * Identifiers of selected private chats.
         *
         * @var int[]
         */
        protected array $chatIds,
        /**
         * Identifiers of private chats that are always excluded; for businessConnectedBot only.
         *
         * @var int[]
         */
        protected array $excludedChatIds,
        /**
         * True, if all existing private chats are selected.
         */
        protected bool  $selectExistingChats,
        /**
         * True, if all new private chats are selected.
         */
        protected bool  $selectNewChats,
        /**
         * True, if all private chats with contacts are selected.
         */
        protected bool  $selectContacts,
        /**
         * True, if all private chats with non-contacts are selected.
         */
        protected bool  $selectNonContacts,
        /**
         * If true, then all private chats except the selected are chosen. Otherwise, only the selected chats are chosen.
         */
        protected bool  $excludeSelected,
    ) {}

    public static function fromArray(array $array): BusinessRecipients
    {
        return new static(
            $array['chat_ids'],
            $array['excluded_chat_ids'],
            $array['select_existing_chats'],
            $array['select_new_chats'],
            $array['select_contacts'],
            $array['select_non_contacts'],
            $array['exclude_selected'],
        );
    }

    public function getChatIds(): array
    {
        return $this->chatIds;
    }

    public function getExcludeSelected(): bool
    {
        return $this->excludeSelected;
    }

    public function getExcludedChatIds(): array
    {
        return $this->excludedChatIds;
    }

    public function getSelectContacts(): bool
    {
        return $this->selectContacts;
    }

    public function getSelectExistingChats(): bool
    {
        return $this->selectExistingChats;
    }

    public function getSelectNewChats(): bool
    {
        return $this->selectNewChats;
    }

    public function getSelectNonContacts(): bool
    {
        return $this->selectNonContacts;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'chat_ids'              => $this->chatIds,
            'excluded_chat_ids'     => $this->excludedChatIds,
            'select_existing_chats' => $this->selectExistingChats,
            'select_new_chats'      => $this->selectNewChats,
            'select_contacts'       => $this->selectContacts,
            'select_non_contacts'   => $this->selectNonContacts,
            'exclude_selected'      => $this->excludeSelected,
        ];
    }
}
