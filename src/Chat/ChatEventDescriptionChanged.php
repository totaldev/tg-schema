<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The chat description was changed
 */
class ChatEventDescriptionChanged extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventDescriptionChanged';

    /**
     * New chat description
     *
     * @var string
     */
    protected string $newDescription;

    /**
     * Previous chat description
     *
     * @var string
     */
    protected string $oldDescription;

    public function __construct(string $oldDescription, string $newDescription)
    {
        parent::__construct();

        $this->oldDescription = $oldDescription;
        $this->newDescription = $newDescription;
    }

    public static function fromArray(array $array): ChatEventDescriptionChanged
    {
        return new static(
            $array['old_description'],
            $array['new_description'],
        );
    }

    public function getNewDescription(): string
    {
        return $this->newDescription;
    }

    public function getOldDescription(): string
    {
        return $this->oldDescription;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'old_description' => $this->oldDescription,
            'new_description' => $this->newDescription,
        ];
    }
}
