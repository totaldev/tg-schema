<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Group\GroupCall;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Information about a group call was updated.
 */
class UpdateGroupCall extends Update
{
    public const TYPE_NAME = 'updateGroupCall';

    public function __construct(
        /**
         * New data about the group call.
         */
        protected GroupCall $groupCall
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateGroupCall
    {
        return new static(
            TdSchemaRegistry::fromArray($array['group_call']),
        );
    }

    public function getGroupCall(): GroupCall
    {
        return $this->groupCall;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'group_call' => $this->groupCall->typeSerialize(),
        ];
    }
}
