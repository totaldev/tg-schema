<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns information about a file with messages exported from another application
 */
class GetMessageFileType extends TdFunction
{
    public const TYPE_NAME = 'getMessageFileType';

    /**
     * Beginning of the message file; up to 100 first lines
     *
     * @var string
     */
    protected string $messageFileHead;

    public function __construct(string $messageFileHead)
    {
        $this->messageFileHead = $messageFileHead;
    }

    public static function fromArray(array $array): GetMessageFileType
    {
        return new static(
            $array['message_file_head'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'message_file_head' => $this->messageFileHead,
        ];
    }

    public function getMessageFileHead(): string
    {
        return $this->messageFileHead;
    }
}
