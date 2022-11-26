<?php

Abstract class Machine
{
    protected $resource;
    protected $state;

    protected function run()
    {
        if ($this->state == "ready") {
            $this->state = "processing";
            echo "Machine is running.";

            return;
        }
        echo "Machine is already running.";
    }

    protected function stop()
    {
        if ($this->state == "processing") {
            $this->state = "ready";
            echo "Machine is stopped.";

            return;
        }
        echo "Machine is already stopped.";
    }

}
