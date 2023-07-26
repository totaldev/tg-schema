<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * An invoice from a link of the type internalLinkTypeInvoice
 */
class InputInvoiceName extends InputInvoice
{
    public const TYPE_NAME = 'inputInvoiceName';

    /**
     * Name of the invoice
     *
     * @var string
     */
    protected string $name;

    public function __construct(string $name)
    {
        parent::__construct();

        $this->name = $name;
    }

    public static function fromArray(array $array): InputInvoiceName
    {
        return new static(
            $array['name'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'name' => $this->name,
        ];
    }

    public function getName(): string
    {
        return $this->name;
    }
}
