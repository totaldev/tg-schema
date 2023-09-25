<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns information about a group call
 */
class GetGroupCall extends TdFunction
{
    public const TYPE_NAME = 'getGroupCall';

    /**
     * Group call identifier
     *
     * @var int
     */
    protected int $groupCallId;

    public function __construct(int $groupCallId)
    {
        $this->groupCallId = $groupCallId;
    }

    public static function fromArray(array $array): GetGroupCall
    {
        return new static(
            $array['group_call_id'],
        );
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'group_call_id' => $this->groupCallId,
        ];
    }
}
