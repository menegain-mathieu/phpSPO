<?php

/**
 * Generated by phpSPO model generator 2020-05-26T22:10:14+00:00 
 */
namespace Office365\Planner;

use Office365\Graph\Entity;

/**
 * The **plannerBucketTaskBoardTaskFormat** resource represents the information used to render a task correctly in the Buckets view of the Task Board (a view organized by tasks within the buckets they are assigned to). Each [task](plannertask.md) will have one **plannerBucketTaskBoardTaskFormat** object associated with it.
 */
class PlannerBucketTaskBoardTaskFormat extends Entity
{
    /**
     * Hint used to order tasks in the Bucket view of the Task Board. The format is defined as outlined [here](planner-order-hint-format.md).
     * @return string
     */
    public function getOrderHint()
    {
        if (!$this->isPropertyAvailable("OrderHint")) {
            return null;
        }
        return $this->getProperty("OrderHint");
    }
    /**
     * Hint used to order tasks in the Bucket view of the Task Board. The format is defined as outlined [here](planner-order-hint-format.md).
     * @var string
     */
    public function setOrderHint($value)
    {
        $this->setProperty("OrderHint", $value, true);
    }
}