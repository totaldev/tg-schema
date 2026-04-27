<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of chat members.
 */
class ChatMembers extends TdObject
{
    public const string TYPE_NAME = 'chatMembers';

    public function __construct(
        /**
         * A list of chat members.
         *
         * @var ChatMember[]
         */
        protected array $members,
        /**
         * Approximate total number of chat members found.
         */
        protected int   $totalCount,
    ) {}

    public static function fromArray(array $array): ChatMembers
    {
        return new static(
            members   : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['members']),
            totalCount: $array['total_count'],
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

    public function setMembers(array $value): static
    {
        $this->members = $value;

        return $this;
    }

    public function setTotalCount(int $value): static
    {
        $this->totalCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'members'     => array_map(static fn($x) => $x->jsonSerialize(), $this->members),
            'total_count' => $this->totalCount,
        ];
    }
}
