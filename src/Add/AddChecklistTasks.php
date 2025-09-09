<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Add;

use Totaldev\TgSchema\Input\InputChecklistTask;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Adds tasks to a checklist in a message.
 */
class AddChecklistTasks extends TdFunction
{
    public const TYPE_NAME = 'addChecklistTasks';

    public function __construct(
        /**
         * Identifier of the chat with the message.
         */
        protected int   $chatId,
        /**
         * Identifier of the message containing the checklist. Use messageProperties.can_add_tasks to check whether the tasks can be added.
         */
        protected int   $messageId,
        /**
         * List of added tasks.
         *
         * @var InputChecklistTask[]
         */
        protected array $tasks,
    ) {}

    public static function fromArray(array $array): AddChecklistTasks
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['tasks']),
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getTasks(): array
    {
        return $this->tasks;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'message_id' => $this->messageId,
            'tasks'      => array_map(static fn($x) => $x->typeSerialize(), $this->tasks),
        ];
    }
}
