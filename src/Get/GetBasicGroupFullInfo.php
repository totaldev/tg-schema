<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns full information about a basic group by its identifier.
 */
class GetBasicGroupFullInfo extends TdFunction
{
    public const string TYPE_NAME = 'getBasicGroupFullInfo';

    public function __construct(
        /**
         * Basic group identifier.
         */
        protected int $basicGroupId
    ) {}

    public static function fromArray(array $array): GetBasicGroupFullInfo
    {
        return new static(
            basicGroupId: $array['basic_group_id'],
        );
    }

    public function getBasicGroupId(): int
    {
        return $this->basicGroupId;
    }

    public function setBasicGroupId(int $value): static
    {
        $this->basicGroupId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'basic_group_id' => $this->basicGroupId,
        ];
    }
}
