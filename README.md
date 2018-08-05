ESputnik
========

Marketing automation system ESputnik.

## curl
A basic CURL wrapper for PHP (see [http://php.net/curl](http://php.net/curl) for more information about the libcurl extension for PHP)

## Requirements
- **PHP** >= 5.4
- **EXT-CURL** = *

## Usage
```php
$eSputnik = new ESputnik(
    new HTTPClient(
        new CurlClient(),
        new Config([
            'login' => 'tester',
            'password' => 'passwd'
        ])
    )
);

{
    $version = $eSputnik->version();
}

{
    $contact = new Contact();

    $contact
        ->setFirstName('FName')
        ->setLastName('LName')
        ->setContactKey('contact@site.com');

    $channelList = new ChannelList();
    $channelList->add(new EmailChannel([
        'value' => 'tester@site.com'
    ]));

    $fieldList = new FieldList();
    $fieldList
        ->add(new Field([
            'id' => 12345,
            'value' => 'CustomValue1',
        ]))
        ->add(new Field([
            'id' => 12346,
            'value' => 'CustomValue2',
        ]));

    $contact
        ->setFieldList($fieldList);

    $contact
        ->setChannelList($channelList);

    $subscribe = new Subscribe();
    $subscribe
        ->setFormType('test_type')
        ->getGroups()->add(new Group([
            'name' => 'Test group'
        ]));

    $response = $eSputnik->contactSubscribe($contact, $subscribe);
}

{
    $addressbooks = $eSputnik->addressbooks();
}

{
    $groups = $eSputnik->groups();
}

{
    $params = new ParamList();
    $params
        ->add(new Parameter([
            'name' => 'EmailAddress',
            'value' => 'tester@site.com',
        ]));

    $eSputnik->event(new Event([
        'eventTypeKey' => 'test-test',
        'keyValue' => 'test-' . time(),
        'params' => $params
    ]))
}
```

## Contact

Problems, comments, and suggestions all welcome: [oss.brownie@gmail.com](mailto:oss.brownie@gmail.com)
