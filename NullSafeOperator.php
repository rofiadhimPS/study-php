<?php

class Address {
    public ?string $country;
}

class User {
    public ?Address $address;
}

function getCountry(?User $user): ?string
{
    // if($user != null){
    //     if($user->address != null){
    //         return $user->address->country;
    //     }
    // }
    // return null;

    // Null Safe Operator 
    return $user?->address?->country;
}

echo getCountry(null);
echo "TRUE";