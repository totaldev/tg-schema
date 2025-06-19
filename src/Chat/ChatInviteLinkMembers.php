<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of chat members joined a chat via an invite link.
 */
class ChatInviteLinkMembers extends TdObject
{
    public const TYPE_NAME = 'chatInviteLinkMembers';

    public function __construct(
        /**
         * Approximate total number of chat members found.
         */
        protected int   $totalCount,
        /**
         * List of chat members, joined a chat via an invite link.
         *
         * @var ChatInviteLinkMember[]
         */
        protected array $members
    ) {}

    public static function fromArray(array $array): ChatInviteLinkMembers
    {
        return new static(
            $array['total_count'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['members']),
        );
    }

    public function getMembers(): array
    {
        return $this->members;
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'total_count' => $this->totalCount,
            array_map(fn($x) => $x->typeSerialize(), $this->members),
        ];
    }
}
