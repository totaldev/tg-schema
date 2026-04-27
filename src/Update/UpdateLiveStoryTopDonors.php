<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Live\LiveStoryDonors;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The list of top donors in live story group call has changed.
 */
class UpdateLiveStoryTopDonors extends Update
{
    public const string TYPE_NAME = 'updateLiveStoryTopDonors';

    public function __construct(
        /**
         * New list of live story donors.
         */
        protected LiveStoryDonors $donors,
        /**
         * Identifier of the group call.
         */
        protected int             $groupCallId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateLiveStoryTopDonors
    {
        return new static(
            donors     : TdSchemaRegistry::fromArray($array['donors']),
            groupCallId: $array['group_call_id'],
        );
    }

    public function getDonors(): LiveStoryDonors
    {
        return $this->donors;
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function setDonors(LiveStoryDonors $value): static
    {
        $this->donors = $value;

        return $this;
    }

    public function setGroupCallId(int $value): static
    {
        $this->groupCallId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'donors'        => $this->donors->jsonSerialize(),
            'group_call_id' => $this->groupCallId,
        ];
    }
}
