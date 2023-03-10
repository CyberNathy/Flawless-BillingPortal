<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * QuoteRequestFixture
 */
class QuoteRequestFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'quote_request';
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
                'first_name' => 'Lorem ipsum dolor sit amet',
                'last_name' => 'Lorem ipsum dolor sit amet',
                'phone_number' => 'Lorem ipsum d',
                'phone_type' => 'Lorem ipsum dolor ',
                'email_address' => 'Lorem ipsum dolor sit amet',
                'preferred_contact_time' => 'Lorem ipsum dolor sit amet',
                'service_needed' => 'Lorem ipsum dolor sit amet',
                'notes' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
