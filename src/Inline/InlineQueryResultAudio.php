<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Inline;

use Totaldev\TgSchema\Audio\Audio;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents an audio file.
 */
class InlineQueryResultAudio extends InlineQueryResult
{
    public const string TYPE_NAME = 'inlineQueryResultAudio';

    public function __construct(
        /**
         * Audio file.
         */
        protected Audio  $audio,
        /**
         * Unique identifier of the query result.
         */
        protected string $id,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InlineQueryResultAudio
    {
        return new static(
            audio: TdSchemaRegistry::fromArray($array['audio']),
            id   : $array['id'],
        );
    }

    public function getAudio(): Audio
    {
        return $this->audio;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setAudio(Audio $value): static
    {
        $this->audio = $value;

        return $this;
    }

    public function setId(string $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'audio' => $this->audio->jsonSerialize(),
            'id'    => $this->id,
        ];
    }
}
