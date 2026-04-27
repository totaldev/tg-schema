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
    public const string TYPE_NAME = 'businessRecipients';

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
         * If true, then all private chats except the selected are chosen. Otherwise, only the selected chats are chosen.
         */
        protected bool  $excludeSelected,
        /**
         * True, if all private chats with contacts are selected.
         */
        protected bool  $selectContacts,
        /**
         * True, if all existing private chats are selected.
         */
        protected bool  $selectExistingChats,
        /**
         * True, if all new private chats are selected.
         */
        protected bool  $selectNewChats,
        /**
         * True, if all private chats with non-contacts are selected.
         */
        protected bool  $selectNonContacts,
    ) {}

    public static function fromArray(array $array): BusinessRecipients
    {
        return new static(
            chatIds            : $array['chat_ids'],
            excludeSelected    : $array['exclude_selected'],
            excludedChatIds    : $array['excluded_chat_ids'],
            selectContacts     : $array['select_contacts'],
            selectExistingChats: $array['select_existing_chats'],
            selectNewChats     : $array['select_new_chats'],
            selectNonContacts  : $array['select_non_contacts'],
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

    public function setChatIds(array $value): static
    {
        $this->chatIds = $value;

        return $this;
    }

    public function setExcludeSelected(bool $value): static
    {
        $this->excludeSelected = $value;

        return $this;
    }

    public function setExcludedChatIds(array $value): static
    {
        $this->excludedChatIds = $value;

        return $this;
    }

    public function setSelectContacts(bool $value): static
    {
        $this->selectContacts = $value;

        return $this;
    }

    public function setSelectExistingChats(bool $value): static
    {
        $this->selectExistingChats = $value;

        return $this;
    }

    public function setSelectNewChats(bool $value): static
    {
        $this->selectNewChats = $value;

        return $this;
    }

    public function setSelectNonContacts(bool $value): static
    {
        $this->selectNonContacts = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'chat_ids'              => $this->chatIds,
            'exclude_selected'      => $this->excludeSelected,
            'excluded_chat_ids'     => $this->excludedChatIds,
            'select_contacts'       => $this->selectContacts,
            'select_existing_chats' => $this->selectExistingChats,
            'select_new_chats'      => $this->selectNewChats,
            'select_non_contacts'   => $this->selectNonContacts,
        ];
    }
}
