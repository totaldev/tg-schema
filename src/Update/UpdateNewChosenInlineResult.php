<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Location\Location;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The user has chosen a result of an inline query; for bots only.
 */
class UpdateNewChosenInlineResult extends Update
{
    public const TYPE_NAME = 'updateNewChosenInlineResult';

    public function __construct(
        /**
         * Identifier of the user who sent the query.
         */
        protected int       $senderUserId,
        /**
         * User location; may be null.
         */
        protected ?Location $userLocation,
        /**
         * Text of the query.
         */
        protected string    $query,
        /**
         * Identifier of the chosen result.
         */
        protected string    $resultId,
        /**
         * Identifier of the sent inline message, if known.
         */
        protected string    $inlineMessageId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateNewChosenInlineResult
    {
        return new static(
            $array['sender_user_id'],
            isset($array['user_location']) ? TdSchemaRegistry::fromArray($array['user_location']) : null,
            $array['query'],
            $array['result_id'],
            $array['inline_message_id'],
        );
    }

    public function getInlineMessageId(): string
    {
        return $this->inlineMessageId;
    }

    public function getQuery(): string
    {
        return $this->query;
    }

    public function getResultId(): string
    {
        return $this->resultId;
    }

    public function getSenderUserId(): int
    {
        return $this->senderUserId;
    }

    public function getUserLocation(): ?Location
    {
        return $this->userLocation;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'sender_user_id'    => $this->senderUserId,
            'user_location'     => $this->userLocation ?? null,
            'query'             => $this->query,
            'result_id'         => $this->resultId,
            'inline_message_id' => $this->inlineMessageId,
        ];
    }
}
