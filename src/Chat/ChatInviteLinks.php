<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of chat invite links.
 */
class ChatInviteLinks extends TdObject
{
    public const TYPE_NAME = 'chatInviteLinks';

    public function __construct(
        /**
         * Approximate total number of chat invite links found.
         */
        protected int   $totalCount,
        /**
         * List of invite links.
         *
         * @var ChatInviteLink[]
         */
        protected array $inviteLinks
    ) {}

    public static function fromArray(array $array): ChatInviteLinks
    {
        return new static(
            $array['total_count'],
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['invite_links']),
        );
    }

    public function getInviteLinks(): array
    {
        return $this->inviteLinks;
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'total_count'  => $this->totalCount,
            'invite_links' => array_map(static fn($x) => $x->typeSerialize(), $this->inviteLinks),
        ];
    }
}
