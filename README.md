## What is PDF Generator?

PDF Generator is a Laravel library that generates PDF's for your customers. The PDF can be either downloaded or
streamed in the browser. It's highly customizable and you can modify the whole output view as well.

```
composer require bytedigital123/pdf_generator
```

```
php artisan vendor:publish
```

This will generate a config (`pdf_generate.php`) and views `\resources\vendor\pdf_generator\` which will make you a default Generator template.

The config file can be updated to hold hte logo, tax rates and business details.

### How to use:

```php

$pdf = new Generator;

$pdf->number(123123)
->with_pagination(true)
->duplicate_header(true)
->notes(null)
->addCustomData('payment_method', 'Card')
->business([
    'name' => 'business name',
    'address' => 'address one',
    'city' => 'city',
    'postcode' => 'postcode'
])
->customer([
    'name' => 'business name',
    'address' => 'address one',
    'city' => 'city',
    'postcode' => 'postcode'
]);
```

The API will accept any custom data that can be added with a `$key => $value` pair and can then be accessed with `getCustomData($key)`

## Methods

### make

    \Bytedigital123\PDFGenerator\Classes\Bytedigital123\PDFGenerator\Classes\Generator Bytedigital123\PDFGenerator\Classes\Generator::make(string $name)

Return a new instance of Generator.

- Visibility: **public**
- This method is **static**.

#### Arguments

- \$name **string**

### template

    \Bytedigital123\PDFGenerator\Classes\Generator Bytedigital123\PDFGenerator\Classes\Generator::template(string $template)

Select template for Generator.

- Visibility: **public**
- Default: **default**

#### Arguments

- \$name **template**

### addItem

    \Bytedigital123\PDFGenerator\Classes\Generator Bytedigital123\PDFGenerator\Classes\Generator::addItem(string $name, integer $price, integer $ammount, string $id)

Adds an item to the Generator.

- Visibility: **public**

#### Arguments

- \$name **string**
- \$price **integer**
- \$amount **integer**
- \$id **string**

### popItem

    \Bytedigital123\PDFGenerator\Classes\Generator Bytedigital123\PDFGenerator\Classes\Generator::popItem()

Pop the last Generator item.

- Visibility: **public**

### formatCurrency

    \Bytedigital123\PDFGenerator\Classes\stdClass Bytedigital123\PDFGenerator\Classes\Generator::formatCurrency()

Return the currency object.

- Visibility: **public**

### subTotalPrice

    integer Bytedigital123\PDFGenerator\Classes\Generator::subTotalPrice()

Return the subtotal Generator price.

- Visibility: **public**

### totalPrice

    integer Bytedigital123\PDFGenerator\Classes\Generator::totalPrice()

Return the total invoce price after aplying the tax.

- Visibility: **public**

### taxPrice

    float Bytedigital123\PDFGenerator\Classes\Generator::taxPrice()

taxPrice.

- Visibility: **public**

### generate

    \Bytedigital123\PDFGenerator\Classes\Generator Bytedigital123\PDFGenerator\Classes\Generator::generate()

Generate the PDF.

- Visibility: **private**

### download

    \Bytedigital123\PDFGenerator\Classes\response Bytedigital123\PDFGenerator\Classes\Generator::download(string $name)

Downloads the generated PDF.

- Visibility: **public**

#### Arguments

- \$name **string**

### shouldDisplayImageColumn

    \Bytedigital123\PDFGenerator\Classes\response Bytedigital123\PDFGenerator\Classes\Generator::shouldDisplayImageColumn()

Return true/false if one item contains image.
Determine if we should display or not the image column on the Generator.

- Visibility: **public**

### show

    \Bytedigital123\PDFGenerator\Classes\response Bytedigital123\PDFGenerator\Classes\Generator::show(string $name)

Show the PDF in the browser.

- Visibility: **public**

#### Arguments

- \$name **string**

### name

    \Bytedigital123\PDFGenerator\Classes\Generator Bytedigital123\PDFGenerator\Classes\Generator::name(string $name)

Set the Generator name.

- Visibility: **public**

#### Arguments

- \$name **string**

### number

    \Bytedigital123\PDFGenerator\Classes\Generator Bytedigital123\PDFGenerator\Classes\Generator::number(integer $number)

Set the Generator number.

- Visibility: **public**

#### Arguments

- \$number **integer**

### decimals

    \Bytedigital123\PDFGenerator\Classes\Generator Bytedigital123\PDFGenerator\Classes\Generator::decimals(integer $decimals)

Set the Generator decimal precision.

- Visibility: **public**

#### Arguments

- \$decimals **integer**

### tax

    \Bytedigital123\PDFGenerator\Classes\Generator Bytedigital123\PDFGenerator\Classes\Generator::tax(float $tax)

Set the Generator tax.

- Visibility: **public**

#### Arguments

- \$tax **float**

### taxType

    \Bytedigital123\PDFGenerator\Classes\Generator Bytedigital123\PDFGenerator\Classes\Generator::taxType(string $tax_type)

Set the Generator tax type.

- Visibility: **public**

#### Arguments

- \$tax_type **string**

### logo

    \Bytedigital123\PDFGenerator\Classes\Generator Bytedigital123\PDFGenerator\Classes\Generator::logo(string $logo_url)

Set the Generator logo URL.

- Visibility: **public**

#### Arguments

- \$logo_url **string**

### date

    \Bytedigital123\PDFGenerator\Classes\Generator Bytedigital123\PDFGenerator\Classes\Generator::date(\Carbon\Carbon $date)

Set the Generator date.

- Visibility: **public**

#### Arguments

- \$date **Carbon\Carbon**

### notes

    \Bytedigital123\PDFGenerator\Classes\Generator Bytedigital123\PDFGenerator\Classes\Generator::notes(string $notes)

Set the Generator notes.

- Visibility: **public**

#### Arguments

- \$notes **string**

### business

    \Bytedigital123\PDFGenerator\Classes\Generator Bytedigital123\PDFGenerator\Classes\Generator::business(array $details)

Set the Generator business details.

- Visibility: **public**

#### Arguments

- \$details **array**

### customer

    \Bytedigital123\PDFGenerator\Classes\Generator Bytedigital123\PDFGenerator\Classes\Generator::customer(array $details)

Set the Generator customer details.

- Visibility: **public**

#### Arguments

- \$details **array**

### footnote

    \Bytedigital123\PDFGenerator\Classes\Generator Bytedigital123\PDFGenerator\Classes\Generator::footnote(string $footnote)

Set the Generator footnote.

- Visibility: **public**

#### Arguments

- \$footnote **string**

### due_date

    \Bytedigital123\PDFGenerator\Classes\Generator Bytedigital123\PDFGenerator\Classes\Generator::due_date(Carbon $due_date)

Set the Generator due date.

- Visibility: **public**

#### Arguments

- \$due_date **Carbon**

### tax_rates

Array of tax rates for PDFGenerator.

- Visibility: **public**

### with_pagination

    \Bytedigital123\PDFGenerator\Classes\Generator Bytedigital123\PDFGenerator\Classes\Generator::with_pagination(boolean $with_pagination)

If true and page count are higher than 1, pagination will show at the bottom.

- Visibility: **public**

#### Arguments

- \$duplicate_header **boolean**

### with_pagination

    \Bytedigital123\PDFGenerator\Classes\Generator Bytedigital123\PDFGenerator\Classes\Generator::duplicate_header(boolean $duplicate_header)

If true header will be duplicated on each page.

- Visibility: **public**

#### Arguments

- \$duplicate_header **boolean**
