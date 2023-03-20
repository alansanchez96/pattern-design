<?php

namespace Src\Model;

class Pc
{
    private $cpu, $mother, $memory, $disk, $videoCard;

    public function getCpu()
    {
        return $this->cpu;
    }

    public function setCpu($cpu)
    {
        $this->cpu = $cpu;

        return $this;
    }

    public function getMother()
    {
        return $this->mother;
    }

    public function setMother($mother)
    {
        $this->mother = $mother;

        return $this;
    }

    public function getMemory()
    {
        return $this->memory;
    }

    public function setMemory($memory)
    {
        $this->memory = $memory;

        return $this;
    }

    public function getDisk()
    {
        return $this->disk;
    }

    public function setDisk($disk)
    {
        $this->disk = $disk;

        return $this;
    }

    public function getVideoCard()
    {
        return $this->videoCard;
    }

    public function setVideoCard($videoCard)
    {
        $this->videoCard = $videoCard;

        return $this;
    }
}
