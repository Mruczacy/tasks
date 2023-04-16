<?php

class TextInput
{
    protected $value = "";

    public function __construct()
    {
        $this->value = "";
    }

    public function add(string $text): void
    {
        $this->value .= strval($text);
    }

    public function getValue(): string
    {
        return strval($this->value);
    }
}

class NumericInput extends TextInput
{
    public function __construct()
    {
        parent::__construct();
    }

    public function add(string $text): void
    {
        if (ctype_digit($text)) {
            $this->value .= strval($text);
        }
    }
}

$textInput = new TextInput();
$textInput->add('uwu');
echo $textInput->getValue();
$numericInput = new NumericInput();
$numericInput->add('uwu');
$numericInput->add(1);
echo $numericInput->getValue();
