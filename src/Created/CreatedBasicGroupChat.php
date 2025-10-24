<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Created;

use Totaldev\TgSchema\Failed\FailedToAddMembers;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about a newly created basic group chat.
 */
class CreatedBasicGroupChat extends TdObject
{
    public const string TYPE_NAME = 'createdBasicGroupChat';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int                $chatId,
        /**
         * Information about failed to add members.
         */
        protected FailedToAddMembers $failedToAddMembers,
    ) {}

    public static function fromArray(array $array): CreatedBasicGroupChat
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['failed_to_add_members']),
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getFailedToAddMembers(): FailedToAddMembers
    {
        return $this->failedToAddMembers;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setFailedToAddMembers(FailedToAddMembers $value): static
    {
        $this->failedToAddMembers = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'chat_id'               => $this->chatId,
            'failed_to_add_members' => $this->failedToAddMembers->typeSerialize(),
        ];
    }
}
