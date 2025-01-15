<?php

class SocialMedia
{
    public string $name;
}

final class Facebook extends SocialMedia // final keyword that class can't inheritance
{
    final public function login(string $username, string $password): bool
    {
        return true;
    }
}

class FakeFacebook extends Facebook
{
    // public function login(string $username, string $password): bool
    // {
    //     return false
    // }
}