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
    public const string TYPE_NAME = 'businessInfo';

    public function __construct(
        /**
         * The away message; may be null if none or the Business account is not of the current user.
         */
        protected ?BusinessAwayMessageSettings     $awayMessageSettings,
        /**
         * The greeting message; may be null if none or the Business account is not of the current user.
         */
        protected ?BusinessGreetingMessageSettings $greetingMessageSettings,
        /**
         * Opening hours of the business in the local time; may be null if none. The hours are guaranteed to be valid and has already been split by week days. Local time zone identifier will be empty. An updateUserFullInfo update is not triggered when value of this field changes.
         */
        protected ?BusinessOpeningHours            $localOpeningHours,
        /**
         * Location of the business; may be null if none.
         */
        protected ?BusinessLocation                $location,
        /**
         * Time left before the business will close the next time, in seconds; 0 if unknown. An updateUserFullInfo update is not triggered when value of this field changes.
         */
        protected int                              $nextCloseIn,
        /**
         * Time left before the business will open the next time, in seconds; 0 if unknown. An updateUserFullInfo update is not triggered when value of this field changes.
         */
        protected int                              $nextOpenIn,
        /**
         * Opening hours of the business; may be null if none. The hours are guaranteed to be valid and has already been split by week days.
         */
        protected ?BusinessOpeningHours            $openingHours,
        /**
         * Information about start page of the account; may be null if none.
         */
        protected ?BusinessStartPage               $startPage,
    ) {}

    public static function fromArray(array $array): BusinessInfo
    {
        return new static(
            awayMessageSettings    : (isset($array['away_message_settings']) ? TdSchemaRegistry::fromArray($array['away_message_settings']) : null),
            greetingMessageSettings: (isset($array['greeting_message_settings']) ? TdSchemaRegistry::fromArray($array['greeting_message_settings']) : null),
            localOpeningHours      : (isset($array['local_opening_hours']) ? TdSchemaRegistry::fromArray($array['local_opening_hours']) : null),
            location               : (isset($array['location']) ? TdSchemaRegistry::fromArray($array['location']) : null),
            nextCloseIn            : $array['next_close_in'],
            nextOpenIn             : $array['next_open_in'],
            openingHours           : (isset($array['opening_hours']) ? TdSchemaRegistry::fromArray($array['opening_hours']) : null),
            startPage              : (isset($array['start_page']) ? TdSchemaRegistry::fromArray($array['start_page']) : null),
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

    public function setAwayMessageSettings(?BusinessAwayMessageSettings $value): static
    {
        $this->awayMessageSettings = $value;

        return $this;
    }

    public function setGreetingMessageSettings(?BusinessGreetingMessageSettings $value): static
    {
        $this->greetingMessageSettings = $value;

        return $this;
    }

    public function setLocalOpeningHours(?BusinessOpeningHours $value): static
    {
        $this->localOpeningHours = $value;

        return $this;
    }

    public function setLocation(?BusinessLocation $value): static
    {
        $this->location = $value;

        return $this;
    }

    public function setNextCloseIn(int $value): static
    {
        $this->nextCloseIn = $value;

        return $this;
    }

    public function setNextOpenIn(int $value): static
    {
        $this->nextOpenIn = $value;

        return $this;
    }

    public function setOpeningHours(?BusinessOpeningHours $value): static
    {
        $this->openingHours = $value;

        return $this;
    }

    public function setStartPage(?BusinessStartPage $value): static
    {
        $this->startPage = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                     => static::TYPE_NAME,
            'away_message_settings'     => (null !== $this->awayMessageSettings ? $this->awayMessageSettings->jsonSerialize() : null),
            'greeting_message_settings' => (null !== $this->greetingMessageSettings ? $this->greetingMessageSettings->jsonSerialize() : null),
            'local_opening_hours'       => (null !== $this->localOpeningHours ? $this->localOpeningHours->jsonSerialize() : null),
            'location'                  => (null !== $this->location ? $this->location->jsonSerialize() : null),
            'next_close_in'             => $this->nextCloseIn,
            'next_open_in'              => $this->nextOpenIn,
            'opening_hours'             => (null !== $this->openingHours ? $this->openingHours->jsonSerialize() : null),
            'start_page'                => (null !== $this->startPage ? $this->startPage->jsonSerialize() : null),
        ];
    }
}
