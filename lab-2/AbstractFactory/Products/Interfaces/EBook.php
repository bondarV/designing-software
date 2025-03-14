<?php

namespace Products\Interfaces;

interface EBook
{
   public function getVersion() : string;

   public function getImageFormats() : array;

   public function coatingOfDisplay () : string;

}