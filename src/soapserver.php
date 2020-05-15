<?php
$service = new soap_server();

$ns = "urn:namespacePractice";

$service->configureWSDL("namespacePractice", $ns);

$service->schemaTargetNamespace = $ns;

$service->register(
    "getUsersAll",
    [
    ],
    [
        "return" => "xsd:object"
    ]
);

$service->register(
    'getUser',
    [
        'id' => 'xsd:integer'
    ],
    [
        "return" => "xsd:object"
    ]
);

$service->register(
    'updateUser',
    [
        'id' => 'xsd:integer',
        'name' => 'xsd:string'
    ],
    [
        "return" => "xsd:object"
    ]
);

$service->register(
    'deleteUser',
    [
        'id' => 'xsd:integer',
    ],
    [
        "return" => "xsd:boolean"
    ]
);

$service->register(
    'createUser',
    [
        'name' => 'xsd:string',
    ],
    [
        "return" => "xsd:boolean"
    ]
);


$service->service(file_get_contents( 'php://input' ));
