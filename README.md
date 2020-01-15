## What is PDF Generator?

PDF Generator is a Laravel library that generates PDF's for your customers. The PDF can be either downloaded or
streamed in the browser. It's highly customizable and you can modify the whole output view as well.

## Sample Invoice

This is a sample invoice generated using this library:

![Sample Invoice](https://i.gyazo.com/768f5b59791162e432f9cdfa15f017bc.png)

```php
$pdf = \ByteDigital123\PDF\Classes\Invoice::make()
                ->addItem('Test Item', 10.25, 2, 1412)
                ->addItem('Test Item 2', 5, 2, 923)
                ->addItem('Test Item 3', 15.55, 5, 42)
                ->addItem('Test Item 4', 1.25, 1, 923)
                ->addItem('Test Item 5', 3.12, 1, 3142)
                ->addItem('Test Item 6', 6.41, 3, 452)
                ->addItem('Test Item 7', 2.86, 1, 1526)
                ->addItem('Test Item 8', 5, 2, 923, 'https://dummyimage.com/64x64/000/fff')
                ->number(4021)
                ->with_pagination(true)
                ->duplicate_header(true)
                ->due_date(Carbon::now()->addMonths(1))
                ->notes('Lrem ipsum dolor sit amet, consectetur adipiscing elit.')
                ->customer([
                    'name'      => 'Èrik Campobadal Forés',
                    'id'        => '12345678A',
                    'phone'     => '+34 123 456 789',
                    'location'  => 'C / Unknown Street 1st',
                    'zip'       => '08241',
                    'city'      => 'Manresa',
                    'country'   => 'Spain',
                ])
                ->download('demo')
                //or save it somewhere
                ->save('public/myinvoicename.pdf');
```

## Special thanks

- [Codevio](https://github.com/codevio);
