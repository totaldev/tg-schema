<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Saved;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about saved payment credentials
 */
class SavedCredentials extends TdObject
{
    public const TYPE_NAME = 'savedCredentials';

    /**
     * Unique identifier of the saved credentials
     *
     * @var string
     */
    protected string $id;

    /**
     * Title of the saved credentials
     *
     * @var string
     */
    protected string $title;

    public function __construct(string $id, string $title)
    {
        $this->id = $id;
        $this->title = $title;
    }

    public static function fromArray(array $array): SavedCredentials
    {
        return new static(
            $array['id'],
            $array['title'],
        );
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'id' => $this->id,
            'title' => $this->title,
        ];
    }
}
