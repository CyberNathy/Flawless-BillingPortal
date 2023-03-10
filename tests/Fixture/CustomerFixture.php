<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CustomerFixture
 */
class CustomerFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'customer';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'CustomerPrimaryEmailAddrAddress' => 'Lorem ipsum dolor sit amet',
                'CustomerSyncToken' => 'Lorem ipsum dolor sit amet',
                'Customerdomain' => 'Lorem ipsum dolor sit amet',
                'CustomerGivenName' => 'Lorem ipsum dolor sit amet',
                'CustomerDisplayName' => 'Lorem ipsum dolor sit amet',
                'CustomerBillWithParent' => 1,
                'CustomerFullyQualifiedName' => 'Lorem ipsum dolor sit amet',
                'CustomerCompanyName' => 'Lorem ipsum dolor sit amet',
                'CustomerFamilyName' => 'Lorem ipsum dolor sit amet',
                'Customersparse' => 1,
                'CustomerPrimaryPhoneFreeFormNumber' => 'Lorem ipsum dolor ',
                'CustomerActive' => 1,
                'CustomerJob' => 1,
                'CustomerBalanceWithJobs' => 1,
                'CustomerBillAddrCity' => 'Lorem ipsum dolor sit amet',
                'CustomerBillAddrLine1' => 'Lorem ipsum dolor sit amet',
                'CustomerBillAddrPostalCode' => 'Lorem i',
                'CustomerBillAddrLat' => 1,
                'CustomerBillAddrLong' => 1,
                'CustomerBillAddrCountrySubDivisionCode' => 'Lorem ipsum dolor sit amet',
                'CustomerBillAddrId' => 1,
                'CustomerPreferredDeliveryMethod' => 'Lorem ipsum dolor sit amet',
                'CustomerTaxable' => 1,
                'CustomerPrintOnCheckName' => 'Lorem ipsum dolor sit amet',
                'CustomerBalance' => 1,
                'CustomerId' => 1,
                'CustomerMetaDataCreateTime' => 'Lorem ipsum dolor sit amet',
                'CustomerMetaDataLastUpdatedTime' => 'Lorem ipsum dolor sit amet',
                'time' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
