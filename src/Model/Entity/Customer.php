<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Customer Entity
 *
 * @property string|null $CustomerPrimaryEmailAddrAddress
 * @property string|null $CustomerSyncToken
 * @property string|null $Customerdomain
 * @property string|null $CustomerGivenName
 * @property string|null $CustomerDisplayName
 * @property bool|null $CustomerBillWithParent
 * @property string|null $CustomerFullyQualifiedName
 * @property string|null $CustomerCompanyName
 * @property string|null $CustomerFamilyName
 * @property bool|null $Customersparse
 * @property string|null $CustomerPrimaryPhoneFreeFormNumber
 * @property bool|null $CustomerActive
 * @property bool|null $CustomerJob
 * @property float|null $CustomerBalanceWithJobs
 * @property string|null $CustomerBillAddrCity
 * @property string|null $CustomerBillAddrLine1
 * @property string|null $CustomerBillAddrPostalCode
 * @property int|null $CustomerBillAddrLat
 * @property int|null $CustomerBillAddrLong
 * @property string|null $CustomerBillAddrCountrySubDivisionCode
 * @property int|null $CustomerBillAddrId
 * @property string|null $CustomerPreferredDeliveryMethod
 * @property bool|null $CustomerTaxable
 * @property string|null $CustomerPrintOnCheckName
 * @property float|null $CustomerBalance
 * @property int $CustomerId
 * @property string|null $CustomerMetaDataCreateTime
 * @property string|null $CustomerMetaDataLastUpdatedTime
 * @property string|null $time
 */
class Customer extends Entity
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
        'CustomerPrimaryEmailAddrAddress' => true,
        'CustomerSyncToken' => true,
        'Customerdomain' => true,
        'CustomerGivenName' => true,
        'CustomerDisplayName' => true,
        'CustomerBillWithParent' => true,
        'CustomerFullyQualifiedName' => true,
        'CustomerCompanyName' => true,
        'CustomerFamilyName' => true,
        'Customersparse' => true,
        'CustomerPrimaryPhoneFreeFormNumber' => true,
        'CustomerActive' => true,
        'CustomerJob' => true,
        'CustomerBalanceWithJobs' => true,
        'CustomerBillAddrCity' => true,
        'CustomerBillAddrLine1' => true,
        'CustomerBillAddrPostalCode' => true,
        'CustomerBillAddrLat' => true,
        'CustomerBillAddrLong' => true,
        'CustomerBillAddrCountrySubDivisionCode' => true,
        'CustomerBillAddrId' => true,
        'CustomerPreferredDeliveryMethod' => true,
        'CustomerTaxable' => true,
        'CustomerPrintOnCheckName' => true,
        'CustomerBalance' => true,
        'CustomerMetaDataCreateTime' => true,
        'CustomerMetaDataLastUpdatedTime' => true,
        'time' => true,
    ];
}
