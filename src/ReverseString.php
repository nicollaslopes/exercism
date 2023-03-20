<?php
declare(strict_types=1);

/* 
Instructions
Reverse a string

For example: input: "cool" output: "looc"
*/ 
function reverseString(string $text): string
{
    return strrev($text);

    throw new BadFunctionCallException("Please implement the reverseString method!");
}

