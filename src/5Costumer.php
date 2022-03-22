<?php
// <!-- Kode : Class Customer -->
namespace Testing\BelajarPhpComposerLibrary;    

class Customer
{

    public function __construct(private string $name)
    {
    }

    public function sayHello(string $name = "Guest"): string
    {
        return "Hello $name, My Name is $this->name";
    }
}