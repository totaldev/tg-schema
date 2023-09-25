<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Basic\BasicGroupFullInfo;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Some data in basicGroupFullInfo has been changed
 */
class UpdateBasicGroupFullInfo extends Update
{
    public const TYPE_NAME = 'updateBasicGroupFullInfo';

    /**
     * New full information about the group
     *
     * @var BasicGroupFullInfo
     */
    protected BasicGroupFullInfo $basicGroupFullInfo;

    /**
     * Identifier of a basic group
     *
     * @var int
     */
    protected int $basicGroupId;

    public function __construct(int $basicGroupId, BasicGroupFullInfo $basicGroupFullInfo)
    {
        parent::__construct();

        $this->basicGroupId = $basicGroupId;
        $this->basicGroupFullInfo = $basicGroupFullInfo;
    }

    public static function fromArray(array $array): UpdateBasicGroupFullInfo
    {
        return new static(
            $array['basic_group_id'],
            TdSchemaRegistry::fromArray($array['basic_group_full_info']),
        );
    }

    public function getBasicGroupFullInfo(): BasicGroupFullInfo
    {
        return $this->basicGroupFullInfo;
    }

    public function getBasicGroupId(): int
    {
        return $this->basicGroupId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'basic_group_id' => $this->basicGroupId,
            'basic_group_full_info' => $this->basicGroupFullInfo->typeSerialize(),
        ];
    }
}
