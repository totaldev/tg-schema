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
    public const string TYPE_NAME = 'bankCardInfo';

    public function __construct(
        /**
         * Actions that can be done with the bank card number.
         *
         * @var BankCardActionOpenUrl[]
         */
        protected array  $actions,
        /**
         * Title of the bank card description.
         */
        protected string $title,
    ) {}

    public static function fromArray(array $array): BankCardInfo
    {
        return new static(
            actions: array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['actions']),
            title  : $array['title'],
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

    public function setActions(array $value): static
    {
        $this->actions = $value;

        return $this;
    }

    public function setTitle(string $value): static
    {
        $this->title = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'actions' => array_map(static fn($x) => $x->jsonSerialize(), $this->actions),
            'title'   => $this->title,
        ];
    }
}
