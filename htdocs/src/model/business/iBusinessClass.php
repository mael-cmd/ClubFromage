<?php


namespace model\business;

interface IBusinessClass
{
    public function __construct(array $data);
    public function hydrate(array $data);
}