<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Group\GroupCall;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Information about a group call was updated
 */
class UpdateGroupCall extends Update
{
    public const TYPE_NAME = 'updateGroupCall';

    /**
     * New data about a group call
     *
     * @var GroupCall
     */
    protected GroupCall $groupCall;

    public function __construct(GroupCall $groupCall)
    {
        parent::__construct();

        $this->groupCall = $groupCall;
    }

    public static function fromArray(array $array): UpdateGroupCall
    {
        return new static(
            TdSchemaRegistry::fromArray($array['group_call']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'group_call' => $this->groupCall->typeSerialize(),
        ];
    }

    public function getGroupCall(): GroupCall
    {
        return $this->groupCall;
    }
}
