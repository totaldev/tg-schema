<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Decrypt;

use Totaldev\TgSchema\Group\GroupCallDataChannel;
use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Decrypts group call data received by tgcalls.
 */
class DecryptGroupCallData extends TdFunction
{
    public const TYPE_NAME = 'decryptGroupCallData';

    public function __construct(
        /**
         * Group call identifier. The call must not be a video chat.
         */
        protected int                  $groupCallId,
        /**
         * Identifier of the group call participant, which sent the data.
         */
        protected MessageSender        $participantId,
        /**
         * Data channel for which data was encrypted; pass null if unknown.
         */
        protected GroupCallDataChannel $dataChannel,
        /**
         * Data to decrypt.
         */
        protected string               $data,
    ) {}

    public static function fromArray(array $array): DecryptGroupCallData
    {
        return new static(
            $array['group_call_id'],
            TdSchemaRegistry::fromArray($array['participant_id']),
            TdSchemaRegistry::fromArray($array['data_channel']),
            $array['data'],
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

    public function getParticipantId(): MessageSender
    {
        return $this->participantId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'group_call_id'  => $this->groupCallId,
            'participant_id' => $this->participantId->typeSerialize(),
            'data_channel'   => $this->dataChannel->typeSerialize(),
            'data'           => $this->data,
        ];
    }
}
