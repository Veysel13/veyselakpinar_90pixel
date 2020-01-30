<?php
require __DIR__.'/vendor/autoload.php';
use PhpImap\Mailbox;


// 4. argument is the directory into which attachments are to be saved:
$mailbox = new Mailbox('{imap.yandex.com:993/imap/ssl}INBOX', 'nurullah@lokalisyeri.com.tr', 'nuri12345', __DIR__); // Sent, Draft

// Read all messaged into an array:
$mailsIds = $mailbox->searchMailbox('ALL');
$mailsIds = $mailbox->getMailsInfo($mailsIds); // tum maillerin subject, from, to, date, message_id, size, uid, msgno, recent, flagged, answered, deleted, seen, draft, udate
print_r($mailsIds);die;

if(!$mailsIds) {
	die('Mailbox is empty');
}


// Get the first message and save its attachment(s) to disk:
$mail = $mailbox->getMail($mailsIds[2]);

print_r($mail);
echo "\n\nAttachments:\n";

print_r($mail->getAttachments());