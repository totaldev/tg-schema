<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Encrypt;

use Totaldev\TgSchema\Group\GroupCallDataChannel;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Encrypts group call data before sending them over network using tgcalls.
 */
class EncryptGroupCallData extends TdFunction
{
    public const TYPE_NAME = 'encryptGroupCallData';

    public function __construct(
        /**
         * Group call identifier. The call must not be a video chat.
         */
        protected int                  $groupCallId,
        /**
         * Data channel for which data is encrypted.
         */
        protected GroupCallDataChannel $dataChannel,
        /**
         * Data to encrypt.
         */
        protected string               $data,
        /**
         * Size of data prefix that must be kept unencrypted.
         */
        protected int                  $unencryptedPrefixSize,
    ) {}

    public static function fromArray(array $array): EncryptGroupCallData
    {
        return new static(
            $array['group_call_id'],
            TdSchemaRegistry::fromArray($array['data_channel']),
            $array['data'],
            $array['unencrypted_prefix_size'],
        );
    }

    public function getData(): string
    {
        return $this->data;
    }

    public function getDataChannel(): GroupCallDataChannel
    {
        return $this->dataChannel;
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function getUnencryptedPrefixSize(): int
    {
        return $this->unencryptedPrefixSize;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'group_call_id'           => $this->groupCallId,
            'data_channel'            => $this->dataChannel->typeSerialize(),
            'data'                    => $this->data,
            'unencrypted_prefix_size' => $this->unencryptedPrefixSize,
        ];
    }
}
