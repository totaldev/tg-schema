<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Supergroup\SupergroupFullInfo;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Some data in supergroupFullInfo has been changed.
 */
class UpdateSupergroupFullInfo extends Update
{
    public const TYPE_NAME = 'updateSupergroupFullInfo';

    public function __construct(
        /**
         * Identifier of the supergroup or channel.
         */
        protected int                $supergroupId,
        /**
         * New full information about the supergroup.
         */
        protected SupergroupFullInfo $supergroupFullInfo
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateSupergroupFullInfo
    {
        return new static(
            $array['supergroup_id'],
            TdSchemaRegistry::fromArray($array['supergroup_full_info']),
        );
    }

    public function getSupergroupFullInfo(): SupergroupFullInfo
    {
        return $this->supergroupFullInfo;
    }

    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'supergroup_id'        => $this->supergroupId,
            'supergroup_full_info' => $this->supergroupFullInfo->typeSerialize(),
        ];
    }
}
