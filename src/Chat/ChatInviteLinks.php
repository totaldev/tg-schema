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
    public const string TYPE_NAME = 'chatInviteLinks';

    public function __construct(
        /**
         * List of invite links.
         *
         * @var ChatInviteLink[]
         */
        protected array $inviteLinks,
        /**
         * Approximate total number of chat invite links found.
         */
        protected int   $totalCount,
    ) {}

    public static function fromArray(array $array): ChatInviteLinks
    {
        return new static(
            inviteLinks: array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['invite_links']),
            totalCount : $array['total_count'],
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

    public function setInviteLinks(array $value): static
    {
        $this->inviteLinks = $value;

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
            '@type'        => static::TYPE_NAME,
            'invite_links' => array_map(static fn($x) => $x->jsonSerialize(), $this->inviteLinks),
            'total_count'  => $this->totalCount,
        ];
    }
}
