<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EmailSubscriber Entity
 *
 * @property int $id
 * @property string $subscriber_email
 * @property string $subscriber_firstname
 * @property string $subscriber_lastname
 */
class EmailSubscriber extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'subscriber_email' => true,
        'subscriber_firstname' => true,
        'subscriber_lastname' => true,
    ];
}
