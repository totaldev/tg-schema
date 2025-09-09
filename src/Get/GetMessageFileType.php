<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns information about a file with messages exported from another application.
 */
class GetMessageFileType extends TdFunction
{
    public const TYPE_NAME = 'getMessageFileType';

    public function __construct(
        /**
         * Beginning of the message file; up to 100 first lines.
         */
        protected string $messageFileHead
    ) {}

    public static function fromArray(array $array): GetMessageFileType
    {
        return new static(
            $array['message_file_head'],
        );
    }

    public function getMessageFileHead(): string
    {
        return $this->messageFileHead;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'message_file_head' => $this->messageFileHead,
        ];
    }
}
