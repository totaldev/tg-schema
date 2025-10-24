<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Checklist\Checklist;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A message with a checklist.
 */
class MessageChecklist extends MessageContent
{
    public const string TYPE_NAME = 'messageChecklist';

    public function __construct(
        /**
         * The checklist description.
         */
        protected Checklist $list
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageChecklist
    {
        return new static(
            TdSchemaRegistry::fromArray($array['list']),
        );
    }

    public function getList(): Checklist
    {
        return $this->list;
    }

    public function setList(Checklist $value): static
    {
        $this->list = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'list'  => $this->list->typeSerialize(),
        ];
    }
}
