<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Inline;

use Totaldev\TgSchema\Audio\Audio;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents an audio file
 */
class InlineQueryResultAudio extends InlineQueryResult
{
    public const TYPE_NAME = 'inlineQueryResultAudio';

    /**
     * Audio file
     *
     * @var Audio
     */
    protected Audio $audio;

    /**
     * Unique identifier of the query result
     *
     * @var string
     */
    protected string $id;

    public function __construct(string $id, Audio $audio)
    {
        parent::__construct();

        $this->id = $id;
        $this->audio = $audio;
    }

    public static function fromArray(array $array): InlineQueryResultAudio
    {
        return new static(
            $array['id'],
            TdSchemaRegistry::fromArray($array['audio']),
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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'id' => $this->id,
            'audio' => $this->audio->typeSerialize(),
        ];
    }
}
