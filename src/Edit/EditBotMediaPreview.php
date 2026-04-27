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
    public const string TYPE_NAME = 'editBotMediaPreview';

    public function __construct(
        /**
         * Identifier of the target bot. The bot must be owned and must have the main Web App.
         */
        protected int               $botUserId,
        /**
         * Content of the new preview.
         */
        protected InputStoryContent $content,
        /**
         * File identifier of the media to replace.
         */
        protected int               $fileId,
        /**
         * Language code of the media preview to edit.
         */
        protected string            $languageCode,
    ) {}

    public static function fromArray(array $array): EditBotMediaPreview
    {
        return new static(
            botUserId   : $array['bot_user_id'],
            content     : TdSchemaRegistry::fromArray($array['content']),
            fileId      : $array['file_id'],
            languageCode: $array['language_code'],
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

    public function setBotUserId(int $value): static
    {
        $this->botUserId = $value;

        return $this;
    }

    public function setContent(InputStoryContent $value): static
    {
        $this->content = $value;

        return $this;
    }

    public function setFileId(int $value): static
    {
        $this->fileId = $value;

        return $this;
    }

    public function setLanguageCode(string $value): static
    {
        $this->languageCode = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'bot_user_id'   => $this->botUserId,
            'content'       => $this->content->jsonSerialize(),
            'file_id'       => $this->fileId,
            'language_code' => $this->languageCode,
        ];
    }
}
