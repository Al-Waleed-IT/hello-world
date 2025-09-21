<?php
declare(strict_types=1);
namespace Genforge\HelloWorld;

final readonly class User
{
public function greetings(string $name): string{
    return "Hello $name!";
}

}
