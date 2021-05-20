<?php


class Queue
{
    public $front = null;
    public $back = null;

    public function isEmpty()
    {
        return is_null($this->front);
    }

    public function enqueue($value)
    {
        $oldback = $this->back;
        $this->back = new Node($value);
        $this->back->value = $value;

        if ($this->isEmpty())
        {
            $this->front = $this->back;
        } else {
            $oldback->next = $this->back;
        }
    }

    public function dequeue()
    {
        if ($this->isEmpty())
        {
            return null;
        }
        $removeValue = $this->front->value;
        $this->front = $this->front->next;
        return $removeValue;
    }
}