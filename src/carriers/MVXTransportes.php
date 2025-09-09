<?php

namespace shippingCalculator\carriers;

use shippingCalculator\abstractions\AbstractSsw;

class MVXTransportes extends AbstractSsw
{
    protected function setCompanyName(): void
    {
        $this->companyName = "Movex Transportes";
    }
}
