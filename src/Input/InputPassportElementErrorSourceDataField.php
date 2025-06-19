<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

/**
 * A data field contains an error. The error is considered resolved when the field's value changes.
 */
class InputPassportElementErrorSourceDataField extends InputPassportElementErrorSource
{
    public const TYPE_NAME = 'inputPassportElementErrorSourceDataField';

    public function __construct(
        /**
         * Field name.
         */
        protected string $fieldName,
        /**
         * Current data hash.
         */
        protected string $dataHash
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputPassportElementErrorSourceDataField
    {
        return new static(
            $array['field_name'],
            $array['data_hash'],
        );
    }

    public function getDataHash(): string
    {
        return $this->dataHash;
    }

    public function getFieldName(): string
    {
        return $this->fieldName;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'field_name' => $this->fieldName,
            'data_hash'  => $this->dataHash,
        ];
    }
}
