<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of chat invite link counts.
 */
class ChatInviteLinkCounts extends TdObject
{
    public const TYPE_NAME = 'chatInviteLinkCounts';

    public function __construct(
        /**
         * List of invite link counts.
         *
         * @var ChatInviteLinkCount[]
         */
        protected array $inviteLinkCounts
    ) {}

    public static function fromArray(array $array): ChatInviteLinkCounts
    {
        return new static(
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['invite_link_counts']),
        );
    }

    public function getInviteLinkCounts(): array
    {
        return $this->inviteLinkCounts;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(fn($x) => $x->typeSerialize(), $this->inviteLinkCounts),
        ];
    }
}
