<?php

/**
 * Flashes a new message to the session. It's also possible to add a level
 * to the message.
 *
 * @param string $message
 * @param string $level
 */
function flash($message, $level = 'info')
{
    session()->flash('flash_message', $message);
    session()->flash('flash_message_level', $level);
}

/**
 * Checks if the currently authenticated user has a given role.
 *
 * @param string $role
 * @return bool
 */
function auth_has_role($role)
{
    return auth()->check() && auth()->user()->role == $role;
}
