<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Basic\BasicGroup;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Some data of a basic group has changed. This update is guaranteed to come before the basic group identifier is returned to the application.
 */
class UpdateBasicGroup extends Update
{
    public const TYPE_NAME = 'updateBasicGroup';

    public function __construct(
        /**
         * New data about the group.
         */
        protected BasicGroup $basicGroup
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateBasicGroup
    {
        return new static(
            TdSchemaRegistry::fromArray($array['basic_group']),
        );
    }

    public function getBasicGroup(): BasicGroup
    {
        return $this->basicGroup;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'basic_group' => $this->basicGroup->typeSerialize(),
        ];
    }
}
