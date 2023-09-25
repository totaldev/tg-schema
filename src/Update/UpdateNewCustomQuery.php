<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A new incoming query; for bots only
 */
class UpdateNewCustomQuery extends Update
{
    public const TYPE_NAME = 'updateNewCustomQuery';

    /**
     * JSON-serialized query data
     *
     * @var string
     */
    protected string $data;

    /**
     * The query identifier
     *
     * @var int
     */
    protected int $id;

    /**
     * Query timeout
     *
     * @var int
     */
    protected int $timeout;

    public function __construct(int $id, string $data, int $timeout)
    {
        parent::__construct();

        $this->id = $id;
        $this->data = $data;
        $this->timeout = $timeout;
    }

    public static function fromArray(array $array): UpdateNewCustomQuery
    {
        return new static(
            $array['id'],
            $array['data'],
            $array['timeout'],
        );
    }

    public function getData(): string
    {
        return $this->data;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTimeout(): int
    {
        return $this->timeout;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'id' => $this->id,
            'data' => $this->data,
            'timeout' => $this->timeout,
        ];
    }
}
