<?php
#parse("nntoan_variables.txt")
#parse("nntoan_header_php.php")
\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    '${VendorName}_${ModuleName}',
    __DIR__
);
