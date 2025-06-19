<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Inline;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Voice\VoiceNote;

/**
 * Represents a voice note.
 */
class InlineQueryResultVoiceNote extends InlineQueryResult
{
    public const TYPE_NAME = 'inlineQueryResultVoiceNote';

    public function __construct(
        /**
         * Unique identifier of the query result.
         */
        protected string    $id,
        /**
         * Voice note.
         */
        protected VoiceNote $voiceNote,
        /**
         * Title of the voice note.
         */
        protected string    $title
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InlineQueryResultVoiceNote
    {
        return new static(
            $array['id'],
            TdSchemaRegistry::fromArray($array['voice_note']),
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

    public function getVoiceNote(): VoiceNote
    {
        return $this->voiceNote;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'id'         => $this->id,
            'voice_note' => $this->voiceNote->typeSerialize(),
            'title'      => $this->title,
        ];
    }
}
