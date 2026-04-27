<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Basic\BasicGroupFullInfo;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Some data in basicGroupFullInfo has been changed.
 */
class UpdateBasicGroupFullInfo extends Update
{
    public const string TYPE_NAME = 'updateBasicGroupFullInfo';

    public function __construct(
        /**
         * New full information about the group.
         */
        protected BasicGroupFullInfo $basicGroupFullInfo,
        /**
         * Identifier of a basic group.
         */
        protected int                $basicGroupId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateBasicGroupFullInfo
    {
        return new static(
            basicGroupFullInfo: TdSchemaRegistry::fromArray($array['basic_group_full_info']),
            basicGroupId      : $array['basic_group_id'],
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

    public function setBasicGroupFullInfo(BasicGroupFullInfo $value): static
    {
        $this->basicGroupFullInfo = $value;

        return $this;
    }

    public function setBasicGroupId(int $value): static
    {
        $this->basicGroupId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'basic_group_full_info' => $this->basicGroupFullInfo->jsonSerialize(),
            'basic_group_id'        => $this->basicGroupId,
        ];
    }
}
