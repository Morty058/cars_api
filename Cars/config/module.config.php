<?php
return [
    'router' => [
        'routes' => [
            'cars.rest.customers' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/customers[/:customer_id]',
                    'defaults' => [
                        'controller' => 'Cars\\V1\\Rest\\Customers\\Controller',
                    ],
                ],
            ],
            'cars.rest.employees' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/employees[/:employees_id]',
                    'defaults' => [
                        'controller' => 'Cars\\V1\\Rest\\Employees\\Controller',
                    ],
                ],
            ],
            'cars.rest.offices' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/offices[/:offices_id]',
                    'defaults' => [
                        'controller' => 'Cars\\V1\\Rest\\Offices\\Controller',
                    ],
                ],
            ],
            'cars.rest.orderdetails' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/orderdetails[/:orderdetails_id]',
                    'defaults' => [
                        'controller' => 'Cars\\V1\\Rest\\Orderdetails\\Controller',
                    ],
                ],
            ],
            'cars.rest.orders' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/orders[/:orders_id]',
                    'defaults' => [
                        'controller' => 'Cars\\V1\\Rest\\Orders\\Controller',
                    ],
                ],
            ],
            'cars.rest.payments' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/payments[/:payments_id]',
                    'defaults' => [
                        'controller' => 'Cars\\V1\\Rest\\Payments\\Controller',
                    ],
                ],
            ],
            'cars.rest.productlines' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/productlines[/:productlines_id]',
                    'defaults' => [
                        'controller' => 'Cars\\V1\\Rest\\Productlines\\Controller',
                    ],
                ],
            ],
            'cars.rest.products' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/products[/:products_id]',
                    'defaults' => [
                        'controller' => 'Cars\\V1\\Rest\\Products\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'api-tools-versioning' => [
        'uri' => [
            0 => 'cars.rest.customers',
            1 => 'cars.rest.employees',
            2 => 'cars.rest.offices',
            3 => 'cars.rest.orderdetails',
            4 => 'cars.rest.orders',
            5 => 'cars.rest.payments',
            6 => 'cars.rest.productlines',
            7 => 'cars.rest.products',
        ],
    ],
    'api-tools-rest' => [
        'Cars\\V1\\Rest\\Customers\\Controller' => [
            'listener' => 'Cars\\V1\\Rest\\Customers\\CustomersResource',
            'route_name' => 'cars.rest.customers',
            'route_identifier_name' => 'customer_id',
            'collection_name' => 'customers',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
                4 => 'POST',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Cars\V1\Rest\Customers\CustomersEntity::class,
            'collection_class' => \Cars\V1\Rest\Customers\CustomersCollection::class,
            'service_name' => 'customers',
        ],
        'Cars\\V1\\Rest\\Employees\\Controller' => [
            'listener' => 'Cars\\V1\\Rest\\Employees\\EmployeesResource',
            'route_name' => 'cars.rest.employees',
            'route_identifier_name' => 'employees_id',
            'collection_name' => 'employees',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
                4 => 'POST',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Cars\V1\Rest\Employees\EmployeesEntity::class,
            'collection_class' => \Cars\V1\Rest\Employees\EmployeesCollection::class,
            'service_name' => 'employees',
        ],
        'Cars\\V1\\Rest\\Offices\\Controller' => [
            'listener' => 'Cars\\V1\\Rest\\Offices\\OfficesResource',
            'route_name' => 'cars.rest.offices',
            'route_identifier_name' => 'offices_id',
            'collection_name' => 'offices',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
                4 => 'POST',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Cars\V1\Rest\Offices\OfficesEntity::class,
            'collection_class' => \Cars\V1\Rest\Offices\OfficesCollection::class,
            'service_name' => 'offices',
        ],
        'Cars\\V1\\Rest\\Orderdetails\\Controller' => [
            'listener' => 'Cars\\V1\\Rest\\Orderdetails\\OrderdetailsResource',
            'route_name' => 'cars.rest.orderdetails',
            'route_identifier_name' => 'orderdetails_id',
            'collection_name' => 'orderdetails',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
                4 => 'POST',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Cars\V1\Rest\Orderdetails\OrderdetailsEntity::class,
            'collection_class' => \Cars\V1\Rest\Orderdetails\OrderdetailsCollection::class,
            'service_name' => 'orderdetails',
        ],
        'Cars\\V1\\Rest\\Orders\\Controller' => [
            'listener' => 'Cars\\V1\\Rest\\Orders\\OrdersResource',
            'route_name' => 'cars.rest.orders',
            'route_identifier_name' => 'orders_id',
            'collection_name' => 'orders',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
                4 => 'POST',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Cars\V1\Rest\Orders\OrdersEntity::class,
            'collection_class' => \Cars\V1\Rest\Orders\OrdersCollection::class,
            'service_name' => 'orders',
        ],
        'Cars\\V1\\Rest\\Payments\\Controller' => [
            'listener' => 'Cars\\V1\\Rest\\Payments\\PaymentsResource',
            'route_name' => 'cars.rest.payments',
            'route_identifier_name' => 'payments_id',
            'collection_name' => 'payments',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
                4 => 'POST',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Cars\V1\Rest\Payments\PaymentsEntity::class,
            'collection_class' => \Cars\V1\Rest\Payments\PaymentsCollection::class,
            'service_name' => 'payments',
        ],
        'Cars\\V1\\Rest\\Productlines\\Controller' => [
            'listener' => 'Cars\\V1\\Rest\\Productlines\\ProductlinesResource',
            'route_name' => 'cars.rest.productlines',
            'route_identifier_name' => 'productlines_id',
            'collection_name' => 'productlines',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
                4 => 'POST',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Cars\V1\Rest\Productlines\ProductlinesEntity::class,
            'collection_class' => \Cars\V1\Rest\Productlines\ProductlinesCollection::class,
            'service_name' => 'productlines',
        ],
        'Cars\\V1\\Rest\\Products\\Controller' => [
            'listener' => 'Cars\\V1\\Rest\\Products\\ProductsResource',
            'route_name' => 'cars.rest.products',
            'route_identifier_name' => 'products_id',
            'collection_name' => 'products',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
                4 => 'POST',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Cars\V1\Rest\Products\ProductsEntity::class,
            'collection_class' => \Cars\V1\Rest\Products\ProductsCollection::class,
            'service_name' => 'products',
        ],
    ],
    'api-tools-content-negotiation' => [
        'controllers' => [
            'Cars\\V1\\Rest\\Customers\\Controller' => 'HalJson',
            'Cars\\V1\\Rest\\Employees\\Controller' => 'HalJson',
            'Cars\\V1\\Rest\\Offices\\Controller' => 'HalJson',
            'Cars\\V1\\Rest\\Orderdetails\\Controller' => 'HalJson',
            'Cars\\V1\\Rest\\Orders\\Controller' => 'HalJson',
            'Cars\\V1\\Rest\\Payments\\Controller' => 'HalJson',
            'Cars\\V1\\Rest\\Productlines\\Controller' => 'HalJson',
            'Cars\\V1\\Rest\\Products\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'Cars\\V1\\Rest\\Customers\\Controller' => [
                0 => 'application/vnd.cars.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Cars\\V1\\Rest\\Employees\\Controller' => [
                0 => 'application/vnd.cars.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Cars\\V1\\Rest\\Offices\\Controller' => [
                0 => 'application/vnd.cars.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Cars\\V1\\Rest\\Orderdetails\\Controller' => [
                0 => 'application/vnd.cars.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Cars\\V1\\Rest\\Orders\\Controller' => [
                0 => 'application/vnd.cars.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Cars\\V1\\Rest\\Payments\\Controller' => [
                0 => 'application/vnd.cars.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Cars\\V1\\Rest\\Productlines\\Controller' => [
                0 => 'application/vnd.cars.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Cars\\V1\\Rest\\Products\\Controller' => [
                0 => 'application/vnd.cars.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'Cars\\V1\\Rest\\Customers\\Controller' => [
                0 => 'application/vnd.cars.v1+json',
                1 => 'application/json',
            ],
            'Cars\\V1\\Rest\\Employees\\Controller' => [
                0 => 'application/vnd.cars.v1+json',
                1 => 'application/json',
            ],
            'Cars\\V1\\Rest\\Offices\\Controller' => [
                0 => 'application/vnd.cars.v1+json',
                1 => 'application/json',
            ],
            'Cars\\V1\\Rest\\Orderdetails\\Controller' => [
                0 => 'application/vnd.cars.v1+json',
                1 => 'application/json',
            ],
            'Cars\\V1\\Rest\\Orders\\Controller' => [
                0 => 'application/vnd.cars.v1+json',
                1 => 'application/json',
            ],
            'Cars\\V1\\Rest\\Payments\\Controller' => [
                0 => 'application/vnd.cars.v1+json',
                1 => 'application/json',
            ],
            'Cars\\V1\\Rest\\Productlines\\Controller' => [
                0 => 'application/vnd.cars.v1+json',
                1 => 'application/json',
            ],
            'Cars\\V1\\Rest\\Products\\Controller' => [
                0 => 'application/vnd.cars.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'api-tools-hal' => [
        'metadata_map' => [
            \Cars\V1\Rest\Customers\CustomersEntity::class => [
                'entity_identifier_name' => 'customerNumber',
                'route_name' => 'cars.rest.customers',
                'route_identifier_name' => 'customer_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializableHydrator::class,
            ],
            \Cars\V1\Rest\Customers\CustomersCollection::class => [
                'entity_identifier_name' => 'customerNumber',
                'route_name' => 'cars.rest.customers',
                'route_identifier_name' => 'customer_id',
                'is_collection' => true,
            ],
            \Cars\V1\Rest\Employees\EmployeesEntity::class => [
                'entity_identifier_name' => 'employeeNumber',
                'route_name' => 'cars.rest.employees',
                'route_identifier_name' => 'employees_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializableHydrator::class,
            ],
            \Cars\V1\Rest\Employees\EmployeesCollection::class => [
                'entity_identifier_name' => 'employeeNumber',
                'route_name' => 'cars.rest.employees',
                'route_identifier_name' => 'employees_id',
                'is_collection' => true,
            ],
            \Cars\V1\Rest\Offices\OfficesEntity::class => [
                'entity_identifier_name' => 'city',
                'route_name' => 'cars.rest.offices',
                'route_identifier_name' => 'offices_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializableHydrator::class,
            ],
            \Cars\V1\Rest\Offices\OfficesCollection::class => [
                'entity_identifier_name' => 'city',
                'route_name' => 'cars.rest.offices',
                'route_identifier_name' => 'offices_id',
                'is_collection' => true,
            ],
            \Cars\V1\Rest\Orderdetails\OrderdetailsEntity::class => [
                'entity_identifier_name' => 'orderNumber',
                'route_name' => 'cars.rest.orderdetails',
                'route_identifier_name' => 'orderdetails_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializableHydrator::class,
            ],
            \Cars\V1\Rest\Orderdetails\OrderdetailsCollection::class => [
                'entity_identifier_name' => 'orderNumber',
                'route_name' => 'cars.rest.orderdetails',
                'route_identifier_name' => 'orderdetails_id',
                'is_collection' => true,
            ],
            \Cars\V1\Rest\Orders\OrdersEntity::class => [
                'entity_identifier_name' => 'orderNumber',
                'route_name' => 'cars.rest.orders',
                'route_identifier_name' => 'orders_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializableHydrator::class,
            ],
            \Cars\V1\Rest\Orders\OrdersCollection::class => [
                'entity_identifier_name' => 'orderNumber',
                'route_name' => 'cars.rest.orders',
                'route_identifier_name' => 'orders_id',
                'is_collection' => true,
            ],
            \Cars\V1\Rest\Payments\PaymentsEntity::class => [
                'entity_identifier_name' => 'checkNumber',
                'route_name' => 'cars.rest.payments',
                'route_identifier_name' => 'payments_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializableHydrator::class,
            ],
            \Cars\V1\Rest\Payments\PaymentsCollection::class => [
                'entity_identifier_name' => 'checkNumber',
                'route_name' => 'cars.rest.payments',
                'route_identifier_name' => 'payments_id',
                'is_collection' => true,
            ],
            \Cars\V1\Rest\Productlines\ProductlinesEntity::class => [
                'entity_identifier_name' => 'productLine',
                'route_name' => 'cars.rest.productlines',
                'route_identifier_name' => 'productlines_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializableHydrator::class,
            ],
            \Cars\V1\Rest\Productlines\ProductlinesCollection::class => [
                'entity_identifier_name' => 'productLine',
                'route_name' => 'cars.rest.productlines',
                'route_identifier_name' => 'productlines_id',
                'is_collection' => true,
            ],
            \Cars\V1\Rest\Products\ProductsEntity::class => [
                'entity_identifier_name' => 'productCode',
                'route_name' => 'cars.rest.products',
                'route_identifier_name' => 'products_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializableHydrator::class,
            ],
            \Cars\V1\Rest\Products\ProductsCollection::class => [
                'entity_identifier_name' => 'productCode',
                'route_name' => 'cars.rest.products',
                'route_identifier_name' => 'products_id',
                'is_collection' => true,
            ],
        ],
    ],
    'api-tools' => [
        'db-connected' => [
            'Cars\\V1\\Rest\\Customers\\CustomersResource' => [
                'adapter_name' => 'Cars',
                'table_name' => 'customers',
                'hydrator_name' => \Laminas\Hydrator\ArraySerializableHydrator::class,
                'controller_service_name' => 'Cars\\V1\\Rest\\Customers\\Controller',
                'entity_identifier_name' => 'customerNumber',
                'table_service' => 'Cars\\V1\\Rest\\Customers\\CustomersResource\\Table',
            ],
            'Cars\\V1\\Rest\\Employees\\EmployeesResource' => [
                'adapter_name' => 'Cars',
                'table_name' => 'employees',
                'hydrator_name' => \Laminas\Hydrator\ArraySerializableHydrator::class,
                'controller_service_name' => 'Cars\\V1\\Rest\\Employees\\Controller',
                'entity_identifier_name' => 'employeeNumber',
                'table_service' => 'Cars\\V1\\Rest\\Employees\\EmployeesResource\\Table',
            ],
            'Cars\\V1\\Rest\\Offices\\OfficesResource' => [
                'adapter_name' => 'Cars',
                'table_name' => 'offices',
                'hydrator_name' => \Laminas\Hydrator\ArraySerializableHydrator::class,
                'controller_service_name' => 'Cars\\V1\\Rest\\Offices\\Controller',
                'entity_identifier_name' => 'city',
                'table_service' => 'Cars\\V1\\Rest\\Offices\\OfficesResource\\Table',
            ],
            'Cars\\V1\\Rest\\Orderdetails\\OrderdetailsResource' => [
                'adapter_name' => 'Cars',
                'table_name' => 'orderdetails',
                'hydrator_name' => \Laminas\Hydrator\ArraySerializableHydrator::class,
                'controller_service_name' => 'Cars\\V1\\Rest\\Orderdetails\\Controller',
                'entity_identifier_name' => 'orderNumber',
                'table_service' => 'Cars\\V1\\Rest\\Orderdetails\\OrderdetailsResource\\Table',
            ],
            'Cars\\V1\\Rest\\Orders\\OrdersResource' => [
                'adapter_name' => 'Cars',
                'table_name' => 'orders',
                'hydrator_name' => \Laminas\Hydrator\ArraySerializableHydrator::class,
                'controller_service_name' => 'Cars\\V1\\Rest\\Orders\\Controller',
                'entity_identifier_name' => 'orderNumber',
                'table_service' => 'Cars\\V1\\Rest\\Orders\\OrdersResource\\Table',
            ],
            'Cars\\V1\\Rest\\Payments\\PaymentsResource' => [
                'adapter_name' => 'Cars',
                'table_name' => 'payments',
                'hydrator_name' => \Laminas\Hydrator\ArraySerializableHydrator::class,
                'controller_service_name' => 'Cars\\V1\\Rest\\Payments\\Controller',
                'entity_identifier_name' => 'checkNumber',
                'table_service' => 'Cars\\V1\\Rest\\Payments\\PaymentsResource\\Table',
            ],
            'Cars\\V1\\Rest\\Productlines\\ProductlinesResource' => [
                'adapter_name' => 'Cars',
                'table_name' => 'productlines',
                'hydrator_name' => \Laminas\Hydrator\ArraySerializableHydrator::class,
                'controller_service_name' => 'Cars\\V1\\Rest\\Productlines\\Controller',
                'entity_identifier_name' => 'productLine',
                'table_service' => 'Cars\\V1\\Rest\\Productlines\\ProductlinesResource\\Table',
            ],
            'Cars\\V1\\Rest\\Products\\ProductsResource' => [
                'adapter_name' => 'Cars',
                'table_name' => 'products',
                'hydrator_name' => \Laminas\Hydrator\ArraySerializableHydrator::class,
                'controller_service_name' => 'Cars\\V1\\Rest\\Products\\Controller',
                'entity_identifier_name' => 'productCode',
                'table_service' => 'Cars\\V1\\Rest\\Products\\ProductsResource\\Table',
            ],
        ],
    ],
    'api-tools-content-validation' => [
        'Cars\\V1\\Rest\\Customers\\Controller' => [
            'input_filter' => 'Cars\\V1\\Rest\\Customers\\Validator',
        ],
        'Cars\\V1\\Rest\\Employees\\Controller' => [
            'input_filter' => 'Cars\\V1\\Rest\\Employees\\Validator',
        ],
        'Cars\\V1\\Rest\\Offices\\Controller' => [
            'input_filter' => 'Cars\\V1\\Rest\\Offices\\Validator',
        ],
        'Cars\\V1\\Rest\\Orderdetails\\Controller' => [
            'input_filter' => 'Cars\\V1\\Rest\\Orderdetails\\Validator',
        ],
        'Cars\\V1\\Rest\\Orders\\Controller' => [
            'input_filter' => 'Cars\\V1\\Rest\\Orders\\Validator',
        ],
        'Cars\\V1\\Rest\\Payments\\Controller' => [
            'input_filter' => 'Cars\\V1\\Rest\\Payments\\Validator',
        ],
        'Cars\\V1\\Rest\\Productlines\\Controller' => [
            'input_filter' => 'Cars\\V1\\Rest\\Productlines\\Validator',
        ],
        'Cars\\V1\\Rest\\Products\\Controller' => [
            'input_filter' => 'Cars\\V1\\Rest\\Products\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'Cars\\V1\\Rest\\Customers\\Validator' => [
            0 => [
                'name' => 'customerName',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 50,
                        ],
                    ],
                ],
            ],
            1 => [
                'name' => 'contactLastName',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 50,
                        ],
                    ],
                ],
            ],
            2 => [
                'name' => 'contactFirstName',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 50,
                        ],
                    ],
                ],
            ],
            3 => [
                'name' => 'phone',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 50,
                        ],
                    ],
                ],
            ],
            4 => [
                'name' => 'addressLine1',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 50,
                        ],
                    ],
                ],
            ],
            5 => [
                'name' => 'addressLine2',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 50,
                        ],
                    ],
                ],
            ],
            6 => [
                'name' => 'city',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 50,
                        ],
                    ],
                ],
            ],
            7 => [
                'name' => 'state',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 50,
                        ],
                    ],
                ],
            ],
            8 => [
                'name' => 'postalCode',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 15,
                        ],
                    ],
                ],
            ],
            9 => [
                'name' => 'country',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 50,
                        ],
                    ],
                ],
            ],
            10 => [
                'name' => 'salesRepEmployeeNumber',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
            11 => [
                'name' => 'creditLimit',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\ToFloat::class,
                        'options' => [],
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\GreaterThan::class,
                        'options' => [
                            'min' => '0',
                        ],
                    ],
                ],
            ],
        ],
        'Cars\\V1\\Rest\\Employees\\Validator' => [
            0 => [
                'name' => 'lastName',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 50,
                        ],
                    ],
                ],
            ],
            1 => [
                'name' => 'firstName',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 50,
                        ],
                    ],
                ],
            ],
            2 => [
                'name' => 'extension',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 10,
                        ],
                    ],
                ],
            ],
            3 => [
                'name' => 'email',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 100,
                        ],
                    ],
                    1 => [
                        'name' => \Laminas\Validator\EmailAddress::class,
                        'options' => [
                            'message' => 'Nieprawidłowy format adresu email',
                        ],
                    ],
                ],
            ],
            4 => [
                'name' => 'officeCode',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                    2 => [
                        'name' => \Laminas\Filter\Digits::class,
                        'options' => [],
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 10,
                        ],
                    ],
                ],
            ],
            5 => [
                'name' => 'reportsTo',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
            6 => [
                'name' => 'jobTitle',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 50,
                        ],
                    ],
                ],
            ],
        ],
        'Cars\\V1\\Rest\\Offices\\Validator' => [
            0 => [
                'name' => 'city',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 50,
                        ],
                    ],
                ],
            ],
            1 => [
                'name' => 'phone',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 50,
                        ],
                    ],
                ],
            ],
            2 => [
                'name' => 'addressLine1',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 50,
                        ],
                    ],
                ],
            ],
            3 => [
                'name' => 'addressLine2',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 50,
                        ],
                    ],
                ],
            ],
            4 => [
                'name' => 'state',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 50,
                        ],
                    ],
                ],
            ],
            5 => [
                'name' => 'country',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 50,
                        ],
                    ],
                ],
            ],
            6 => [
                'name' => 'postalCode',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 15,
                        ],
                    ],
                ],
            ],
            7 => [
                'name' => 'territory',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 10,
                        ],
                    ],
                ],
            ],
        ],
        'Cars\\V1\\Rest\\Orderdetails\\Validator' => [
            0 => [
                'name' => 'quantityOrdered',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
            1 => [
                'name' => 'priceEach',
                'required' => true,
                'filters' => [],
                'validators' => [],
            ],
            2 => [
                'name' => 'orderLineNumber',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
        ],
        'Cars\\V1\\Rest\\Orders\\Validator' => [
            0 => [
                'name' => 'orderDate',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\DateTimeFormatter::class,
                        'options' => [
                            'format' => 'Y-m-d H:i:s',
                        ],
                    ],
                ],
                'validators' => [],
            ],
            1 => [
                'name' => 'requiredDate',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\DateTimeFormatter::class,
                        'options' => [
                            'format' => 'Y-m-d H:i:s',
                        ],
                    ],
                ],
                'validators' => [],
            ],
            2 => [
                'name' => 'shippedDate',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\DateTimeFormatter::class,
                        'options' => [
                            'format' => 'Y-m-d H:i:s',
                        ],
                    ],
                ],
                'validators' => [],
            ],
            3 => [
                'name' => 'status',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 15,
                        ],
                    ],
                ],
            ],
            4 => [
                'name' => 'comments',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 65535,
                        ],
                    ],
                ],
            ],
            5 => [
                'name' => 'customerNumber',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
        ],
        'Cars\\V1\\Rest\\Payments\\Validator' => [
            0 => [
                'name' => 'paymentDate',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\DateTimeFormatter::class,
                        'options' => [
                            'format' => 'Y-m-d H:i:s',
                        ],
                    ],
                ],
                'validators' => [],
            ],
            1 => [
                'name' => 'amount',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\ToFloat::class,
                        'options' => [],
                    ],
                ],
                'validators' => [],
            ],
        ],
        'Cars\\V1\\Rest\\Productlines\\Validator' => [
            0 => [
                'name' => 'textDescription',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 4000,
                        ],
                    ],
                ],
            ],
            1 => [
                'name' => 'htmlDescription',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
            2 => [
                'name' => 'image',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
        ],
        'Cars\\V1\\Rest\\Products\\Validator' => [
            0 => [
                'name' => 'productName',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 70,
                        ],
                    ],
                ],
            ],
            1 => [
                'name' => 'productLine',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 50,
                        ],
                    ],
                ],
            ],
            2 => [
                'name' => 'productScale',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 10,
                        ],
                    ],
                ],
            ],
            3 => [
                'name' => 'productVendor',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 50,
                        ],
                    ],
                ],
            ],
            4 => [
                'name' => 'productDescription',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 65535,
                        ],
                    ],
                ],
            ],
            5 => [
                'name' => 'quantityInStock',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
            6 => [
                'name' => 'buyPrice',
                'required' => true,
                'filters' => [],
                'validators' => [],
            ],
            7 => [
                'name' => 'MSRP',
                'required' => true,
                'filters' => [],
                'validators' => [],
            ],
        ],
    ],
    'api-tools-mvc-auth' => [
        'authorization' => [
            'Cars\\V1\\Rest\\Customers\\Controller' => [
                'collection' => [
                    'GET' => false,
                    'POST' => true,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => false,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
            ],
            'Cars\\V1\\Rest\\Employees\\Controller' => [
                'collection' => [
                    'GET' => false,
                    'POST' => true,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => false,
                    'POST' => true,
                    'PUT' => true,
                    'PATCH' => true,
                    'DELETE' => true,
                ],
            ],
            'Cars\\V1\\Rest\\Offices\\Controller' => [
                'collection' => [
                    'GET' => false,
                    'POST' => true,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => false,
                    'POST' => true,
                    'PUT' => true,
                    'PATCH' => true,
                    'DELETE' => true,
                ],
            ],
            'Cars\\V1\\Rest\\Orderdetails\\Controller' => [
                'collection' => [
                    'GET' => false,
                    'POST' => true,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => false,
                    'POST' => true,
                    'PUT' => true,
                    'PATCH' => true,
                    'DELETE' => true,
                ],
            ],
            'Cars\\V1\\Rest\\Orders\\Controller' => [
                'collection' => [
                    'GET' => false,
                    'POST' => true,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => false,
                    'POST' => false,
                    'PUT' => true,
                    'PATCH' => true,
                    'DELETE' => true,
                ],
            ],
            'Cars\\V1\\Rest\\Payments\\Controller' => [
                'collection' => [
                    'GET' => true,
                    'POST' => true,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => true,
                    'POST' => true,
                    'PUT' => true,
                    'PATCH' => true,
                    'DELETE' => true,
                ],
            ],
            'Cars\\V1\\Rest\\Productlines\\Controller' => [
                'collection' => [
                    'GET' => false,
                    'POST' => true,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => false,
                    'POST' => true,
                    'PUT' => true,
                    'PATCH' => true,
                    'DELETE' => true,
                ],
            ],
            'Cars\\V1\\Rest\\Products\\Controller' => [
                'collection' => [
                    'GET' => false,
                    'POST' => true,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => false,
                    'POST' => true,
                    'PUT' => true,
                    'PATCH' => true,
                    'DELETE' => true,
                ],
            ],
        ],
    ],
];
