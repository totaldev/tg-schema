<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Paid\PaidReactionType;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The type of default paid reaction has changed.
 */
class UpdateDefaultPaidReactionType extends Update
{
    public const TYPE_NAME = 'updateDefaultPaidReactionType';

    public function __construct(
        /**
         * The new type of the default paid reaction.
         */
        protected PaidReactionType $type
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateDefaultPaidReactionType
    {
        return new static(
            TdSchemaRegistry::fromArray($array['type']),
        );
    }

    public function getType(): PaidReactionType
    {
        return $this->type;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'type'  => $this->type->typeSerialize(),
        ];
    }
}
