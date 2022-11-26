<?php

class CoffeeMachine
{
    private $resource;
    private $state;

    private function run()
    {
        if ($this->state == "ready") {
            $this->state = "processing";
            echo "Machine is running.";
            return;
        }
        echo "Machine is already running.";
    }

    private function stop()
    {
        if ($this->state == "processing") {
            $this->state = "ready";
            echo "Machine is stopped.";

            return;
        }
        echo "Machine is already stopped.";
    }

    public function putCoffeeIn()
    {
        $this->resource = "coffee";
        $this->state = "ready";

        echo "Coffee is in the machine.";
    }

    /**
     * User can only know to press button when machine is ready, but can't know how machine run
     *
     * @return mixed
     */
    public function pressButton()
    {
        if ($this->state == "ready") {
            $this->state = "processing";
            $this->run();
            echo "Coffee is being made.";
            $this->stop();
            echo "Coffee is ready.";
            return;
        }

        echo "Coffee is already being made.";
    }
}
