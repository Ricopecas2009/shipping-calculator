<?php

namespace shippingCalculator\carriers;

use shippingCalculator\abstractions\AbstractSsw;

class TWTransportes extends AbstractSsw
{
    protected function setCompanyName(): void
    {
        $this->companyName = "TW Transportes";
    }
}