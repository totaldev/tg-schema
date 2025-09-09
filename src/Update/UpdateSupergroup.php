<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Supergroup\Supergroup;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Some data of a supergroup or a channel has changed. This update is guaranteed to come before the supergroup identifier is returned to the application.
 */
class UpdateSupergroup extends Update
{
    public const TYPE_NAME = 'updateSupergroup';

    public function __construct(
        /**
         * New data about the supergroup.
         */
        protected Supergroup $supergroup
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateSupergroup
    {
        return new static(
            TdSchemaRegistry::fromArray($array['supergroup']),
        );
    }

    public function getSupergroup(): Supergroup
    {
        return $this->supergroup;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'supergroup' => $this->supergroup->typeSerialize(),
        ];
    }
}
