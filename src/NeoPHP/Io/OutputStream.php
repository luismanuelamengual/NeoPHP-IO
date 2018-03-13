<?php

namespace NeoPHP\Io;

abstract class OutputStream {

    public abstract function write($buffer);

    public abstract function flush();

    public abstract function close();
}