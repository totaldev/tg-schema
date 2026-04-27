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
    public const string TYPE_NAME = 'updateSupergroupFullInfo';

    public function __construct(
        /**
         * New full information about the supergroup.
         */
        protected SupergroupFullInfo $supergroupFullInfo,
        /**
         * Identifier of the supergroup or channel.
         */
        protected int                $supergroupId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateSupergroupFullInfo
    {
        return new static(
            supergroupFullInfo: TdSchemaRegistry::fromArray($array['supergroup_full_info']),
            supergroupId      : $array['supergroup_id'],
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

    public function setSupergroupFullInfo(SupergroupFullInfo $value): static
    {
        $this->supergroupFullInfo = $value;

        return $this;
    }

    public function setSupergroupId(int $value): static
    {
        $this->supergroupId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'supergroup_full_info' => $this->supergroupFullInfo->jsonSerialize(),
            'supergroup_id'        => $this->supergroupId,
        ];
    }
}
