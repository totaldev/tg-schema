<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Edit;

use Totaldev\TgSchema\Input\InputStoryContent;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Replaces media preview in the list of media previews of a bot. Returns the new preview after edit is completed server-side.
 */
class EditBotMediaPreview extends TdFunction
{
    public const TYPE_NAME = 'editBotMediaPreview';

    public function __construct(
        /**
         * Identifier of the target bot. The bot must be owned and must have the main Web App.
         */
        protected int               $botUserId,
        /**
         * Language code of the media preview to edit.
         */
        protected string            $languageCode,
        /**
         * File identifier of the media to replace.
         */
        protected int               $fileId,
        /**
         * Content of the new preview.
         */
        protected InputStoryContent $content
    ) {}

    public static function fromArray(array $array): EditBotMediaPreview
    {
        return new static(
            $array['bot_user_id'],
            $array['language_code'],
            $array['file_id'],
            TdSchemaRegistry::fromArray($array['content']),
        );
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function getContent(): InputStoryContent
    {
        return $this->content;
    }

    public function getFileId(): int
    {
        return $this->fileId;
    }

    public function getLanguageCode(): string
    {
        return $this->languageCode;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'bot_user_id'   => $this->botUserId,
            'language_code' => $this->languageCode,
            'file_id'       => $this->fileId,
            'content'       => $this->content->typeSerialize(),
        ];
    }
}
