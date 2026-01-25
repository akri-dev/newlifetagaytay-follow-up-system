<?php

namespace App\Enums;

enum Status: string
{
    case NotContacted = 'not_contacted';
    case Contacted = 'contacted';
    case Responded = 'responded';
}
