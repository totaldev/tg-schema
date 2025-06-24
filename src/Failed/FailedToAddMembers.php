<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Failed;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a list of users that has failed to be added to a chat.
 */
class FailedToAddMembers extends TdObject
{
    public const TYPE_NAME = 'failedToAddMembers';

    public function __construct(
        /**
         * Information about users that weren't added to the chat.
         *
         * @var FailedToAddMember[]
         */
        protected array $failedToAddMembers
    ) {}

    public static function fromArray(array $array): FailedToAddMembers
    {
        return new static(
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['failed_to_add_members']),
        );
    }

    public function getFailedToAddMembers(): array
    {
        return $this->failedToAddMembers;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(static fn($x) => $x->typeSerialize(), $this->failedToAddMembers),
        ];
    }
}
