<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Passport;

/**
 * One of the data fields contains an error. The error will be considered resolved when the value of the field changes.
 */
class PassportElementErrorSourceDataField extends PassportElementErrorSource
{
    public const TYPE_NAME = 'passportElementErrorSourceDataField';

    public function __construct(
        /**
         * Field name.
         */
        protected string $fieldName
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PassportElementErrorSourceDataField
    {
        return new static(
            $array['field_name'],
        );
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
        ];
    }
}
