<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A message with a checklist. Checklists can't be sent to secret chats, channel chats and channel direct messages chats; for Telegram Premium users only.
 */
class InputMessageChecklist extends InputMessageContent
{
    public const string TYPE_NAME = 'inputMessageChecklist';

    public function __construct(
        /**
         * The checklist to send.
         */
        protected InputChecklist $checklist
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputMessageChecklist
    {
        return new static(
            TdSchemaRegistry::fromArray($array['checklist']),
        );
    }

    public function getChecklist(): InputChecklist
    {
        return $this->checklist;
    }

    public function setChecklist(InputChecklist $value): static
    {
        $this->checklist = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'checklist' => $this->checklist->typeSerialize(),
        ];
    }
}
