<?php

class Person
{

    protected $job;

 public function workAt($position)
 {
     $this->job = Job($position);
 }
}
