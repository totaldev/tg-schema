<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A data field contains an error. The error is considered resolved when the field's value changes
 */
class InputPassportElementErrorSourceDataField extends InputPassportElementErrorSource
{
    public const TYPE_NAME = 'inputPassportElementErrorSourceDataField';

    /**
     * Current data hash
     *
     * @var string
     */
    protected string $dataHash;

    /**
     * Field name
     *
     * @var string
     */
    protected string $fieldName;

    public function __construct(string $fieldName, string $dataHash)
    {
        parent::__construct();

        $this->fieldName = $fieldName;
        $this->dataHash = $dataHash;
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
            '@type' => static::TYPE_NAME,
            'field_name' => $this->fieldName,
            'data_hash' => $this->dataHash,
        ];
    }
}
