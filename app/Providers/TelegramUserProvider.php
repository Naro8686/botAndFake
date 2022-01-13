<?php

namespace App\Providers;

use App\Models\TelegramUser;
use Illuminate\Auth\EloquentUserProvider as UserProvider;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Hashing\Hasher as HasherContract;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Str;


class TelegramUserProvider extends UserProvider
{

    public function retrieveByCredentials(array $credentials)
    {
        if (empty($credentials) ||
            (count($credentials) === 1 &&
                Str::contains($this->firstCredentialKey($credentials), 'token'))) {
            return null;
        }

        // First we will add each credential element to the query as a where clause.
        // Then we can execute the query and, if we found a user, return it in a
        // Eloquent User "model" that will be utilized by the Guard instances.
        $query = $this->newModelQuery();

        foreach ($credentials as $key => $value) {

            if (Str::contains($key, 'token')) {
                continue;
            }
            if (is_array($value) || $value instanceof Arrayable) {
                $query->whereIn($key, $value);
            } else {
                $query->where($key, $value);
            }
        }
        return $query->first();
    }

    /**
     * @param $user
     * @param array $credentials
     * @return bool
     */
    public function validateCredentials($user, array $credentials): bool
    {
        $token = $credentials['token'] ?? null;
        /** @var TelegramUser $user */
        $personalToken = $user->personalToken($token);
        if ($valid = !is_null($personalToken)) {
            $user->api_token = hash('sha256', $personalToken->token);
            $valid = $user->save();
        }
        return $valid;
    }
}