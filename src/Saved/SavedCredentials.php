<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Saved;

use Totaldev\TgSchema\TdObject;

/**
 * Contains information about saved payment credentials.
 */
class SavedCredentials extends TdObject
{
    public const TYPE_NAME = 'savedCredentials';

    public function __construct(
        /**
         * Unique identifier of the saved credentials.
         */
        protected string $id,
        /**
         * Title of the saved credentials.
         */
        protected string $title
    ) {}

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
            'id'    => $this->id,
            'title' => $this->title,
        ];
    }
}
