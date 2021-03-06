<?php

declare(strict_types=1);

namespace Kdyby\StrictObjects;

trait PropertyScreamer
{
    use PropertyReadScreamer;
    use PropertyWriteScreamer;
    use PropertyExistsIgnorer;
    use PropertyRemovalScreamer;
}
