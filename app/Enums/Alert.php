<?php

namespace App\Enums;

enum Alert : string
{
    case BLUE = "text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400";
    case RED = "text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400";
    case GREEN = "text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400";
    case YELLOW = "text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300";
    case GRAY = "text-gray-800 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-gray-300";
}