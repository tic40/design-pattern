<?php

class Context
{
    private $tokenizer;
    private $currentToken;

    public function __construct(string $text)
    {
        $this->tokenizer = strtok($text);
        $this->nextToken();
    }

    public function nextToken(): string
    {
        if ($this->tokenizer->hasMoreTokens()) {
            $this->currentToken = $tokenizer->nextToken();
        } else {
            $this->currentToken = null;
        }
        return $this->currentToken;
    }

    public function currentToken(): string
    {
        return $this->currentToken;
    }

    public function skipToken(string $token)
    {
        if (!$token->equals($this->currentToken)) {
            throw new ParseException("Warning: " . $token . " is expected, but " . currentToken . " is found.");
        }
        $this->nextToken();
    }

    public function currentNumber(): int
    {
        $number = 0;
        try {
            $number = $this->currentToken;
//Integer.parseInt(currentToken);
        } catch (NumberFormatException $e) {
            throw new ParseException("Warning: " + $e);
        }
        return $number;
    }
}
