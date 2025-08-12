<?php

namespace App\Config;

enum UserRole: string
{
    case COACH = 'Coach';
    case ASSISTANT_COACH = 'Assistant Coach';
    case PLAYER = 'Player';
    case PARENT = 'Parent';
}
