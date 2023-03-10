<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EmailSubscriberFixture
 */
class EmailSubscriberFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'email_subscriber';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'subscriber_email' => 'Lorem ipsum dolor sit amet',
                'subscriber_firstname' => 'Lorem ipsum dolor sit amet',
                'subscriber_lastname' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
