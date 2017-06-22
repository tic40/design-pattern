<?php

class Context
{
    private $token;
    private $currentToken;

    public function __construct(string $text)
    {
        $this->token = preg_split("/[\s,]+/", $text);
        $this->nextToken();
    }

    public function nextToken(): string
    {
        $this->currentToken = ($this->currentToken === null)
            ? current($this->token)
            : next($this->token);

        return $this->currentToken;
    }

    public function currentToken(): string
    {
        return $this->currentToken;
    }

    public function skipToken(string $token)
    {
        if ($token !== $this->currentToken) {
            throw new ParseException("Warning: {$token} is expected, but {$this->currentToken} is found.");
        }
        $this->nextToken();
    }

    public function currentNumber(): int
    {
        return intval($this->currentToken);
    }
}
