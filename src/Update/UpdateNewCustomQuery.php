<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * A new incoming query; for bots only.
 */
class UpdateNewCustomQuery extends Update
{
    public const TYPE_NAME = 'updateNewCustomQuery';

    public function __construct(
        /**
         * The query identifier.
         */
        protected int    $id,
        /**
         * JSON-serialized query data.
         */
        protected string $data,
        /**
         * Query timeout.
         */
        protected int    $timeout
    ) {
        parent::__construct();
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
            '@type'   => static::TYPE_NAME,
            'id'      => $this->id,
            'data'    => $this->data,
            'timeout' => $this->timeout,
        ];
    }
}
