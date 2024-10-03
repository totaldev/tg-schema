<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Callback;

/**
 * The payload for a general callback button.
 */
class CallbackQueryPayloadData extends CallbackQueryPayload
{
    public const TYPE_NAME = 'callbackQueryPayloadData';

    public function __construct(
        /**
         * Data that was attached to the callback button.
         */
        protected string $data
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): CallbackQueryPayloadData
    {
        return new static(
            $array['data'],
        );
    }

    public function getData(): string
    {
        return $this->data;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'data'  => $this->data,
        ];
    }
}
