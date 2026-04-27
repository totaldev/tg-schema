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
    public const string TYPE_NAME = 'encryptGroupCallData';

    public function __construct(
        /**
         * Data to encrypt.
         */
        protected string               $data,
        /**
         * Data channel for which data is encrypted.
         */
        protected GroupCallDataChannel $dataChannel,
        /**
         * Group call identifier. The call must not be a video chat.
         */
        protected int                  $groupCallId,
        /**
         * Size of data prefix that must be kept unencrypted.
         */
        protected int                  $unencryptedPrefixSize,
    ) {}

    public static function fromArray(array $array): EncryptGroupCallData
    {
        return new static(
            data                 : $array['data'],
            dataChannel          : TdSchemaRegistry::fromArray($array['data_channel']),
            groupCallId          : $array['group_call_id'],
            unencryptedPrefixSize: $array['unencrypted_prefix_size'],
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

    public function setData(string $value): static
    {
        $this->data = $value;

        return $this;
    }

    public function setDataChannel(GroupCallDataChannel $value): static
    {
        $this->dataChannel = $value;

        return $this;
    }

    public function setGroupCallId(int $value): static
    {
        $this->groupCallId = $value;

        return $this;
    }

    public function setUnencryptedPrefixSize(int $value): static
    {
        $this->unencryptedPrefixSize = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'data'                    => $this->data,
            'data_channel'            => $this->dataChannel->jsonSerialize(),
            'group_call_id'           => $this->groupCallId,
            'unencrypted_prefix_size' => $this->unencryptedPrefixSize,
        ];
    }
}
