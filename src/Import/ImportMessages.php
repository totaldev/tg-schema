<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Import;

use Totaldev\TgSchema\Input\InputFile;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Imports messages exported from another application.
 */
class ImportMessages extends TdFunction
{
    public const string TYPE_NAME = 'importMessages';

    public function __construct(
        /**
         * Files used in the imported messages. Only inputFileLocal and inputFileGenerated are supported. The files must not be previously uploaded.
         *
         * @var InputFile[]
         */
        protected array     $attachedFiles,
        /**
         * Identifier of a chat to which the messages will be imported. It must be an identifier of a private chat with a mutual contact or an identifier of a supergroup chat with can_change_info member right.
         */
        protected int       $chatId,
        /**
         * File with messages to import. Only inputFileLocal and inputFileGenerated are supported. The file must not be previously uploaded.
         */
        protected InputFile $messageFile,
    ) {}

    public static function fromArray(array $array): ImportMessages
    {
        return new static(
            attachedFiles: array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['attached_files']),
            chatId       : $array['chat_id'],
            messageFile  : TdSchemaRegistry::fromArray($array['message_file']),
        );
    }

    public function getAttachedFiles(): array
    {
        return $this->attachedFiles;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageFile(): InputFile
    {
        return $this->messageFile;
    }

    public function setAttachedFiles(array $value): static
    {
        $this->attachedFiles = $value;

        return $this;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setMessageFile(InputFile $value): static
    {
        $this->messageFile = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'attached_files' => array_map(static fn($x) => $x->jsonSerialize(), $this->attachedFiles),
            'chat_id'        => $this->chatId,
            'message_file'   => $this->messageFile->jsonSerialize(),
        ];
    }
}
