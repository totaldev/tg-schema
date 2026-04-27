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
    public const string TYPE_NAME = 'setTdlibParameters';

    public function __construct(
        /**
         * Application identifier hash for Telegram API access, which can be obtained at https://my.telegram.org.
         */
        protected string $apiHash,
        /**
         * Application identifier for Telegram API access, which can be obtained at https://my.telegram.org.
         */
        protected int    $apiId,
        /**
         * Application version; must be non-empty.
         */
        protected string $applicationVersion,
        /**
         * The path to the directory for the persistent database; if empty, the current working directory will be used.
         */
        protected string $databaseDirectory,
        /**
         * Encryption key for the database. If the encryption key is invalid, then an error with code 401 will be returned.
         */
        protected string $databaseEncryptionKey,
        /**
         * Model of the device the application is being run on; must be non-empty.
         */
        protected string $deviceModel,
        /**
         * The path to the directory for storing files; if empty, database_directory will be used.
         */
        protected string $filesDirectory,
        /**
         * IETF language tag of the user's operating system language; must be non-empty.
         */
        protected string $systemLanguageCode,
        /**
         * Version of the operating system the application is being run on. If empty, the version is automatically detected by TDLib.
         */
        protected string $systemVersion,
        /**
         * Pass true to keep cache of users, basic groups, supergroups, channels and secret chats between restarts. Implies use_file_database.
         */
        protected bool   $useChatInfoDatabase,
        /**
         * Pass true to keep information about downloaded and uploaded files between application restarts.
         */
        protected bool   $useFileDatabase,
        /**
         * Pass true to keep cache of chats and messages between restarts. Implies use_chat_info_database.
         */
        protected bool   $useMessageDatabase,
        /**
         * Pass true to enable support for secret chats.
         */
        protected bool   $useSecretChats,
        /**
         * Pass true to use Telegram test environment instead of the production environment.
         */
        protected bool   $useTestDc,
    ) {}

    public static function fromArray(array $array): SetTdlibParameters
    {
        return new static(
            apiHash              : $array['api_hash'],
            apiId                : $array['api_id'],
            applicationVersion   : $array['application_version'],
            databaseDirectory    : $array['database_directory'],
            databaseEncryptionKey: $array['database_encryption_key'],
            deviceModel          : $array['device_model'],
            filesDirectory       : $array['files_directory'],
            systemLanguageCode   : $array['system_language_code'],
            systemVersion        : $array['system_version'],
            useChatInfoDatabase  : $array['use_chat_info_database'],
            useFileDatabase      : $array['use_file_database'],
            useMessageDatabase   : $array['use_message_database'],
            useSecretChats       : $array['use_secret_chats'],
            useTestDc            : $array['use_test_dc'],
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

    public function setApiHash(string $value): static
    {
        $this->apiHash = $value;

        return $this;
    }

    public function setApiId(int $value): static
    {
        $this->apiId = $value;

        return $this;
    }

    public function setApplicationVersion(string $value): static
    {
        $this->applicationVersion = $value;

        return $this;
    }

    public function setDatabaseDirectory(string $value): static
    {
        $this->databaseDirectory = $value;

        return $this;
    }

    public function setDatabaseEncryptionKey(string $value): static
    {
        $this->databaseEncryptionKey = $value;

        return $this;
    }

    public function setDeviceModel(string $value): static
    {
        $this->deviceModel = $value;

        return $this;
    }

    public function setFilesDirectory(string $value): static
    {
        $this->filesDirectory = $value;

        return $this;
    }

    public function setSystemLanguageCode(string $value): static
    {
        $this->systemLanguageCode = $value;

        return $this;
    }

    public function setSystemVersion(string $value): static
    {
        $this->systemVersion = $value;

        return $this;
    }

    public function setUseChatInfoDatabase(bool $value): static
    {
        $this->useChatInfoDatabase = $value;

        return $this;
    }

    public function setUseFileDatabase(bool $value): static
    {
        $this->useFileDatabase = $value;

        return $this;
    }

    public function setUseMessageDatabase(bool $value): static
    {
        $this->useMessageDatabase = $value;

        return $this;
    }

    public function setUseSecretChats(bool $value): static
    {
        $this->useSecretChats = $value;

        return $this;
    }

    public function setUseTestDc(bool $value): static
    {
        $this->useTestDc = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'api_hash'                => $this->apiHash,
            'api_id'                  => $this->apiId,
            'application_version'     => $this->applicationVersion,
            'database_directory'      => $this->databaseDirectory,
            'database_encryption_key' => $this->databaseEncryptionKey,
            'device_model'            => $this->deviceModel,
            'files_directory'         => $this->filesDirectory,
            'system_language_code'    => $this->systemLanguageCode,
            'system_version'          => $this->systemVersion,
            'use_chat_info_database'  => $this->useChatInfoDatabase,
            'use_file_database'       => $this->useFileDatabase,
            'use_message_database'    => $this->useMessageDatabase,
            'use_secret_chats'        => $this->useSecretChats,
            'use_test_dc'             => $this->useTestDc,
        ];
    }
}
