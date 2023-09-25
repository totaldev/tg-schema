<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A video chat participant was muted or unmuted
 */
class ChatEventVideoChatParticipantIsMutedToggled extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventVideoChatParticipantIsMutedToggled';

    /**
     * New value of is_muted
     *
     * @var bool
     */
    protected bool $isMuted;

    /**
     * Identifier of the affected group call participant
     *
     * @var MessageSender
     */
    protected MessageSender $participantId;

    public function __construct(MessageSender $participantId, bool $isMuted)
    {
        parent::__construct();

        $this->participantId = $participantId;
        $this->isMuted = $isMuted;
    }

    public static function fromArray(array $array): ChatEventVideoChatParticipantIsMutedToggled
    {
        return new static(
            TdSchemaRegistry::fromArray($array['participant_id']),
            $array['is_muted'],
        );
    }

    public function getIsMuted(): bool
    {
        return $this->isMuted;
    }

    public function getParticipantId(): MessageSender
    {
        return $this->participantId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'participant_id' => $this->participantId->typeSerialize(),
            'is_muted' => $this->isMuted,
        ];
    }
}
