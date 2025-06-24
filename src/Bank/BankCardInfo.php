<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Bank;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Information about a bank card.
 */
class BankCardInfo extends TdObject
{
    public const TYPE_NAME = 'bankCardInfo';

    public function __construct(
        /**
         * Title of the bank card description.
         */
        protected string $title,
        /**
         * Actions that can be done with the bank card number.
         *
         * @var BankCardActionOpenUrl[]
         */
        protected array  $actions
    ) {}

    public static function fromArray(array $array): BankCardInfo
    {
        return new static(
            $array['title'],
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['actions']),
        );
    }

    public function getActions(): array
    {
        return $this->actions;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'title' => $this->title,
            array_map(static fn($x) => $x->typeSerialize(), $this->actions),
        ];
    }
}
