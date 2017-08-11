<?php
declare(strict_types=1);

namespace Genkgo\Mail\Protocol\Smtp\Backend;

use Genkgo\Mail\EmailAddress;
use Genkgo\Mail\MessageInterface;
use Genkgo\Mail\Protocol\Smtp\BackendInterface;

final class UnknownUserBackend implements BackendInterface
{

    /**
     * @param EmailAddress $mailbox
     * @return bool
     */
    public function contains(EmailAddress $mailbox): bool
    {
        return false;
    }

    /**
     * @param EmailAddress $mailbox
     * @param MessageInterface $message
     */
    public function store(EmailAddress $mailbox, MessageInterface $message): void
    {
        throw new \InvalidArgumentException('Unknown mailbox');
    }
}