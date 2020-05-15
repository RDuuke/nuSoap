<?php

use App\User;

function getUsersAll()
{
    return User::all();
}

function createUser($name)
{
    $user = new User();

    $user->name = $name;

    return $user->save();
}


function getUser($id)
{
    return User::find($id);
}

function updateUser($id, $name)
{
    try{
        $user = User::find($id);

        $user->name = $name;

        $user->save();

        return $user;
    } catch (Exception $e) {
        return $e->getMessage();
    }
}

function deleteUser($id)
{
    $user = User::find($id);

    return $user->delete();
}