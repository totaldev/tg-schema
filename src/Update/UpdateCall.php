<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Call\Call;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * New call was created or information about a call was updated
 */
class UpdateCall extends Update
{
    public const TYPE_NAME = 'updateCall';

    /**
     * New data about a call
     *
     * @var Call
     */
    protected Call $call;

    public function __construct(Call $call)
    {
        parent::__construct();

        $this->call = $call;
    }

    public static function fromArray(array $array): UpdateCall
    {
        return new static(
            TdSchemaRegistry::fromArray($array['call']),
        );
    }

    public function getCall(): Call
    {
        return $this->call;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'call' => $this->call->typeSerialize(),
        ];
    }
}
