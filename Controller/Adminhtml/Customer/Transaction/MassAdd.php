<?php
/**
 * Copyright © Swarming Technology, LLC. All rights reserved.
 */
namespace Swarming\StoreCredit\Controller\Adminhtml\Customer\Transaction;

use Swarming\StoreCredit\Model\Transaction;

class MassAdd extends \Swarming\StoreCredit\Controller\Adminhtml\Customer\Transaction\MassSave
{
    /**
     * @param array $adjustmentData
     * @return array
     */
    protected function processRequestData(array $adjustmentData)
    {
        $adjustmentData['type'] = Transaction::TYPE_ADD;
        return $adjustmentData;
    }
}
