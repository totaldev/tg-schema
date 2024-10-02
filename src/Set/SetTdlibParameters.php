<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Sets the parameters for TDLib initialization. Works only when the current authorization state is authorizationStateWaitTdlibParameters.
 */
class SetTdlibParameters extends TdFunction
{
    public const TYPE_NAME = 'setTdlibParameters';

    public function __construct(
        /**
         * Pass true to use Telegram test environment instead of the production environment.
         */
        protected bool   $useTestDc,
        /**
         * The path to the directory for the persistent database; if empty, the current working directory will be used.
         */
        protected string $databaseDirectory,
        /**
         * The path to the directory for storing files; if empty, database_directory will be used.
         */
        protected string $filesDirectory,
        /**
         * Encryption key for the database. If the encryption key is invalid, then an error with code 401 will be returned.
         */
        protected string $databaseEncryptionKey,
        /**
         * Pass true to keep information about downloaded and uploaded files between application restarts.
         */
        protected bool   $useFileDatabase,
        /**
         * Pass true to keep cache of users, basic groups, supergroups, channels and secret chats between restarts. Implies use_file_database.
         */
        protected bool   $useChatInfoDatabase,
        /**
         * Pass true to keep cache of chats and messages between restarts. Implies use_chat_info_database.
         */
        protected bool   $useMessageDatabase,
        /**
         * Pass true to enable support for secret chats.
         */
        protected bool   $useSecretChats,
        /**
         * Application identifier for Telegram API access, which can be obtained at https://my.telegram.org.
         */
        protected int    $apiId,
        /**
         * Application identifier hash for Telegram API access, which can be obtained at https://my.telegram.org.
         */
        protected string $apiHash,
        /**
         * IETF language tag of the user's operating system language; must be non-empty.
         */
        protected string $systemLanguageCode,
        /**
         * Model of the device the application is being run on; must be non-empty.
         */
        protected string $deviceModel,
        /**
         * Version of the operating system the application is being run on. If empty, the version is automatically detected by TDLib.
         */
        protected string $systemVersion,
        /**
         * Application version; must be non-empty.
         */
        protected string $applicationVersion,
    ) {}

    public static function fromArray(array $array): SetTdlibParameters
    {
        return new static(
            $array['use_test_dc'],
            $array['database_directory'],
            $array['files_directory'],
            $array['database_encryption_key'],
            $array['use_file_database'],
            $array['use_chat_info_database'],
            $array['use_message_database'],
            $array['use_secret_chats'],
            $array['api_id'],
            $array['api_hash'],
            $array['system_language_code'],
            $array['device_model'],
            $array['system_version'],
            $array['application_version'],
        );
    }

    public function getApiHash(): string
    {
        return $this->apiHash;
    }

    public function getApiId(): int
    {
        return $this->apiId;
    }

    public function getApplicationVersion(): string
    {
        return $this->applicationVersion;
    }

    public function getDatabaseDirectory(): string
    {
        return $this->databaseDirectory;
    }

    public function getDatabaseEncryptionKey(): string
    {
        return $this->databaseEncryptionKey;
    }

    public function getDeviceModel(): string
    {
        return $this->deviceModel;
    }

    public function getFilesDirectory(): string
    {
        return $this->filesDirectory;
    }

    public function getSystemLanguageCode(): string
    {
        return $this->systemLanguageCode;
    }

    public function getSystemVersion(): string
    {
        return $this->systemVersion;
    }

    public function getUseChatInfoDatabase(): bool
    {
        return $this->useChatInfoDatabase;
    }

    public function getUseFileDatabase(): bool
    {
        return $this->useFileDatabase;
    }

    public function getUseMessageDatabase(): bool
    {
        return $this->useMessageDatabase;
    }

    public function getUseSecretChats(): bool
    {
        return $this->useSecretChats;
    }

    public function getUseTestDc(): bool
    {
        return $this->useTestDc;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'use_test_dc'             => $this->useTestDc,
            'database_directory'      => $this->databaseDirectory,
            'files_directory'         => $this->filesDirectory,
            'database_encryption_key' => $this->databaseEncryptionKey,
            'use_file_database'       => $this->useFileDatabase,
            'use_chat_info_database'  => $this->useChatInfoDatabase,
            'use_message_database'    => $this->useMessageDatabase,
            'use_secret_chats'        => $this->useSecretChats,
            'api_id'                  => $this->apiId,
            'api_hash'                => $this->apiHash,
            'system_language_code'    => $this->systemLanguageCode,
            'device_model'            => $this->deviceModel,
            'system_version'          => $this->systemVersion,
            'application_version'     => $this->applicationVersion,
        ];
    }
}
