<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

/**
 * An invoice from a link of the type internalLinkTypeInvoice.
 */
class InputInvoiceName extends InputInvoice
{
    public const TYPE_NAME = 'inputInvoiceName';

    public function __construct(
        /**
         * Name of the invoice.
         */
        protected string $name
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputInvoiceName
    {
        return new static(
            $array['name'],
        );
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'name'  => $this->name,
        ];
    }
}
