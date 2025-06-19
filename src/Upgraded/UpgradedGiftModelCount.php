<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Upgraded;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a model of an upgraded gift with the number of gifts found.
 */
class UpgradedGiftModelCount extends TdObject
{
    public const TYPE_NAME = 'upgradedGiftModelCount';

    public function __construct(
        /**
         * The model.
         */
        protected UpgradedGiftModel $model,
        /**
         * Total number of gifts with the model.
         */
        protected int               $totalCount
    ) {}

    public static function fromArray(array $array): UpgradedGiftModelCount
    {
        return new static(
            TdSchemaRegistry::fromArray($array['model']),
            $array['total_count'],
        );
    }

    public function getModel(): UpgradedGiftModel
    {
        return $this->model;
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'model'       => $this->model->typeSerialize(),
            'total_count' => $this->totalCount,
        ];
    }
}
