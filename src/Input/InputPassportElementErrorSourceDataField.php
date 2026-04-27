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
    public const string TYPE_NAME = 'inputPassportElementErrorSourceDataField';

    public function __construct(
        /**
         * Current data hash.
         */
        protected string $dataHash,
        /**
         * Field name.
         */
        protected string $fieldName,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputPassportElementErrorSourceDataField
    {
        return new static(
            dataHash : $array['data_hash'],
            fieldName: $array['field_name'],
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

    public function setDataHash(string $value): static
    {
        $this->dataHash = $value;

        return $this;
    }

    public function setFieldName(string $value): static
    {
        $this->fieldName = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'data_hash'  => $this->dataHash,
            'field_name' => $this->fieldName,
        ];
    }
}
