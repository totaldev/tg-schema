<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Import;

use Totaldev\TgSchema\Input\InputFile;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Imports messages exported from another app.
 */
class ImportMessages extends TdFunction
{
    public const TYPE_NAME = 'importMessages';

    public function __construct(
        /**
         * Identifier of a chat to which the messages will be imported. It must be an identifier of a private chat with a mutual contact or an identifier of a supergroup chat with can_change_info member right.
         */
        protected int       $chatId,
        /**
         * File with messages to import. Only inputFileLocal and inputFileGenerated are supported. The file must not be previously uploaded.
         */
        protected InputFile $messageFile,
        /**
         * Files used in the imported messages. Only inputFileLocal and inputFileGenerated are supported. The files must not be previously uploaded.
         *
         * @var InputFile[]
         */
        protected array     $attachedFiles
    ) {}

    public static function fromArray(array $array): ImportMessages
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['message_file']),
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['attached_files']),
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

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'chat_id'      => $this->chatId,
            'message_file' => $this->messageFile->typeSerialize(),
            array_map(static fn($x) => $x->typeSerialize(), $this->attachedFiles),
        ];
    }
}
