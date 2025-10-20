<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Business;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about a Telegram Business account.
 */
class BusinessInfo extends TdObject
{
    public const TYPE_NAME = 'businessInfo';

    public function __construct(
        /**
         * Location of the business; may be null if none.
         */
        protected ?BusinessLocation                $location,
        /**
         * Opening hours of the business; may be null if none. The hours are guaranteed to be valid and has already been split by week days.
         */
        protected ?BusinessOpeningHours            $openingHours,
        /**
         * Opening hours of the business in the local time; may be null if none. The hours are guaranteed to be valid and has already been split by week days. Local time zone identifier will be empty. An updateUserFullInfo update is not triggered when value of this field changes.
         */
        protected ?BusinessOpeningHours            $localOpeningHours,
        /**
         * Time left before the business will open the next time, in seconds; 0 if unknown. An updateUserFullInfo update is not triggered when value of this field changes.
         */
        protected int                              $nextOpenIn,
        /**
         * Time left before the business will close the next time, in seconds; 0 if unknown. An updateUserFullInfo update is not triggered when value of this field changes.
         */
        protected int                              $nextCloseIn,
        /**
         * The greeting message; may be null if none or the Business account is not of the current user.
         */
        protected ?BusinessGreetingMessageSettings $greetingMessageSettings,
        /**
         * The away message; may be null if none or the Business account is not of the current user.
         */
        protected ?BusinessAwayMessageSettings     $awayMessageSettings,
        /**
         * Information about start page of the account; may be null if none.
         */
        protected ?BusinessStartPage               $startPage,
    ) {}

    public static function fromArray(array $array): BusinessInfo
    {
        return new static(
            isset($array['location']) ? TdSchemaRegistry::fromArray($array['location']) : null,
            isset($array['opening_hours']) ? TdSchemaRegistry::fromArray($array['opening_hours']) : null,
            isset($array['local_opening_hours']) ? TdSchemaRegistry::fromArray($array['local_opening_hours']) : null,
            $array['next_open_in'],
            $array['next_close_in'],
            isset($array['greeting_message_settings']) ? TdSchemaRegistry::fromArray($array['greeting_message_settings']) : null,
            isset($array['away_message_settings']) ? TdSchemaRegistry::fromArray($array['away_message_settings']) : null,
            isset($array['start_page']) ? TdSchemaRegistry::fromArray($array['start_page']) : null,
        );
    }

    public function getAwayMessageSettings(): ?BusinessAwayMessageSettings
    {
        return $this->awayMessageSettings;
    }

    public function getGreetingMessageSettings(): ?BusinessGreetingMessageSettings
    {
        return $this->greetingMessageSettings;
    }

    public function getLocalOpeningHours(): ?BusinessOpeningHours
    {
        return $this->localOpeningHours;
    }

    public function getLocation(): ?BusinessLocation
    {
        return $this->location;
    }

    public function getNextCloseIn(): int
    {
        return $this->nextCloseIn;
    }

    public function getNextOpenIn(): int
    {
        return $this->nextOpenIn;
    }

    public function getOpeningHours(): ?BusinessOpeningHours
    {
        return $this->openingHours;
    }

    public function getStartPage(): ?BusinessStartPage
    {
        return $this->startPage;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                     => static::TYPE_NAME,
            'location'                  => $this->location ?? null,
            'opening_hours'             => $this->openingHours ?? null,
            'local_opening_hours'       => $this->localOpeningHours ?? null,
            'next_open_in'              => $this->nextOpenIn,
            'next_close_in'             => $this->nextCloseIn,
            'greeting_message_settings' => $this->greetingMessageSettings ?? null,
            'away_message_settings'     => $this->awayMessageSettings ?? null,
            'start_page'                => $this->startPage ?? null,
        ];
    }
}
