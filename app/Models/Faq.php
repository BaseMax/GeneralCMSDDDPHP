<?php

namespace CMS\Models;

class Faq extends Model
{
    private int $id;
    private string $question = null;
    private string $answer = null;

    public function __construct()
    {
    }

    public static function create(
        string $question,
        string $answer
    ): static {
        return (new static())
            ->setQuestion($question)
            ->setAnswer($answer);
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getQuestion(): string
    {
        return $this->question;
    }

    public function getAnswer(): string
    {
        return $this->answer;
    }

    public function setQuestion(string $question): self
    {
        $this->question = $question;
        return $this;
    }

    public function setAnswer(string $answer): self
    {
        $this->answer = $answer;
        return $this;
    }
}
