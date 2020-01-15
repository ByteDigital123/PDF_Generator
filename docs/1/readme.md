## Installation

```
composer require bytedigital123/pdf_generator
```

Example Usage:

# ByteDigital\PDFGenerator\PDFGeneratorServiceProvider

This is the PDFGeneratorServiceProvider class.

- Class name: PDFGeneratorServiceProvider
- Namespace: ByteDigital\PDFGenerator
- Parent class: Illuminate\Support\ServiceProvider

## Methods

### boot

    void ByteDigital\PDFGenerator\PDFGeneratorServiceProvider::boot()

Bootstrap any application services.

- Visibility: **public**

### register

    void ByteDigital\PDFGenerator\PDFGeneratorServiceProvider::register()

Register any application services.

- Visibility: **public**

# ByteDigital\PDFGenerator\Classes\PDF

This is the PDF class.

- Class name: PDF
- Namespace: ByteDigital\PDFGenerator\Classes

## Methods

### generate

    \Dompdf\Dompdf\Dompdf ByteDigital\PDFGenerator\Classes\PDF::generate(\ByteDigital\PDFGenerator\Classes\ByteDigital\PDFGenerator\Classes\Invoice $invoice, string $template)

Generate the PDF.

- Visibility: **public**
- This method is **static**.

#### Arguments

- \$invoice **ByteDigital\PDFGenerator\Classes\ByteDigital\PDFGenerator\Classes\Invoice**
- \$template **string**

# ByteDigital\PDFGenerator\Classes\Invoice

This is the Invoice class.

- Class name: Invoice
- Namespace: ByteDigital\PDFGenerator\Classes

## Properties

### \$name

    public string $name

Invoice name.

- Visibility: **public**

### \$template

    public string $template

Invoice template.

- Visibility: **public**

### \$items

    public \ByteDigital\PDFGenerator\Classes\Illuminate\Support\Collection $items

Invoice item collection.

- Visibility: **public**

### \$currency

    public string $currency

Invoice currency.

- Visibility: **public**

### \$tax

    public integer $tax

Invoice tax.

- Visibility: **public**

### \$tax_type

    public string $tax_type

Invoice tax type.

- Visibility: **public**

### \$number

    public integer $number = null

Invoice number.

- Visibility: **public**

### \$decimals

    public integer $decimals

Invoice decimal precision.

- Visibility: **public**

### \$logo

    public string $logo

Invoice logo.

- Visibility: **public**

### \$logo_height

    public integer $logo_height

Invoice Logo Height.

- Visibility: **public**

### \$date

    public \Carbon\Carbon\Carbon $date

Invoice Date.

- Visibility: **public**

### \$notes

    public string $notes

Invoice Notes.

- Visibility: **public**

### \$business_details

    public array $business_details

Invoice Business Details.

- Visibility: **public**

### \$customer_details

    public array $customer_details

Invoice Customer Details.

- Visibility: **public**

### \$footnote

    public array $footnote

Invoice Footnote.

- Visibility: **public**

### \$pdf

    private \ByteDigital\PDFGenerator\Classes\Dompdf\Dompdf $pdf

Stores the PDF object.

- Visibility: **private**

## Methods

### \_\_construct

    mixed ByteDigital\PDFGenerator\Classes\Invoice::__construct(string $name)

Create a new invoice instance.

- Visibility: **public**

#### Arguments

- \$name **string**

### make

    \ByteDigital\PDFGenerator\Classes\ByteDigital\PDFGenerator\Classes\Invoice ByteDigital\PDFGenerator\Classes\Invoice::make(string $name)

Return a new instance of Invoice.

- Visibility: **public**
- This method is **static**.

#### Arguments

- \$name **string**

### template

    \ByteDigital\PDFGenerator\Classes\Invoice ByteDigital\PDFGenerator\Classes\Invoice::template(string $template)

Select template for invoice.

- Visibility: **public**
- Default: **default**

#### Arguments

- \$name **template**

### addItem

    \ByteDigital\PDFGenerator\Classes\Invoice ByteDigital\PDFGenerator\Classes\Invoice::addItem(string $name, integer $price, integer $ammount, string $id)

Adds an item to the invoice.

- Visibility: **public**

#### Arguments

- \$name **string**
- \$price **integer**
- \$ammount **integer**
- \$id **string**

### popItem

    \ByteDigital\PDFGenerator\Classes\Invoice ByteDigital\PDFGenerator\Classes\Invoice::popItem()

Pop the last invoice item.

- Visibility: **public**

### formatCurrency

    \ByteDigital\PDFGenerator\Classes\stdClass ByteDigital\PDFGenerator\Classes\Invoice::formatCurrency()

Return the currency object.

- Visibility: **public**

### subTotalPrice

    integer ByteDigital\PDFGenerator\Classes\Invoice::subTotalPrice()

Return the subtotal invoice price.

- Visibility: **public**

### totalPrice

    integer ByteDigital\PDFGenerator\Classes\Invoice::totalPrice()

Return the total invoce price after aplying the tax.

- Visibility: **public**

### taxPrice

    float ByteDigital\PDFGenerator\Classes\Invoice::taxPrice()

taxPrice.

- Visibility: **public**

### generate

    \ByteDigital\PDFGenerator\Classes\Invoice ByteDigital\PDFGenerator\Classes\Invoice::generate()

Generate the PDF.

- Visibility: **private**

### download

    \ByteDigital\PDFGenerator\Classes\response ByteDigital\PDFGenerator\Classes\Invoice::download(string $name)

Downloads the generated PDF.

- Visibility: **public**

#### Arguments

- \$name **string**

### shouldDisplayImageColumn

    \ByteDigital\PDFGenerator\Classes\response ByteDigital\PDFGenerator\Classes\Invoice::shouldDisplayImageColumn()

Return true/false if one item contains image.
Determine if we should display or not the image column on the invoice.

- Visibility: **public**

### show

    \ByteDigital\PDFGenerator\Classes\response ByteDigital\PDFGenerator\Classes\Invoice::show(string $name)

Show the PDF in the browser.

- Visibility: **public**

#### Arguments

- \$name **string**

### name

    \ByteDigital\PDFGenerator\Classes\Invoice ByteDigital\PDFGenerator\Classes\Invoice::name(string $name)

Set the invoice name.

- Visibility: **public**

#### Arguments

- \$name **string**

### number

    \ByteDigital\PDFGenerator\Classes\Invoice ByteDigital\PDFGenerator\Classes\Invoice::number(integer $number)

Set the invoice number.

- Visibility: **public**

#### Arguments

- \$number **integer**

### decimals

    \ByteDigital\PDFGenerator\Classes\Invoice ByteDigital\PDFGenerator\Classes\Invoice::decimals(integer $decimals)

Set the invoice decimal precision.

- Visibility: **public**

#### Arguments

- \$decimals **integer**

### tax

    \ByteDigital\PDFGenerator\Classes\Invoice ByteDigital\PDFGenerator\Classes\Invoice::tax(float $tax)

Set the invoice tax.

- Visibility: **public**

#### Arguments

- \$tax **float**

### taxType

    \ByteDigital\PDFGenerator\Classes\Invoice ByteDigital\PDFGenerator\Classes\Invoice::taxType(string $tax_type)

Set the invoice tax type.

- Visibility: **public**

#### Arguments

- \$tax_type **string**

### logo

    \ByteDigital\PDFGenerator\Classes\Invoice ByteDigital\PDFGenerator\Classes\Invoice::logo(string $logo_url)

Set the invoice logo URL.

- Visibility: **public**

#### Arguments

- \$logo_url **string**

### date

    \ByteDigital\PDFGenerator\Classes\Invoice ByteDigital\PDFGenerator\Classes\Invoice::date(\Carbon\Carbon $date)

Set the invoice date.

- Visibility: **public**

#### Arguments

- \$date **Carbon\Carbon**

### notes

    \ByteDigital\PDFGenerator\Classes\Invoice ByteDigital\PDFGenerator\Classes\Invoice::notes(string $notes)

Set the invoice notes.

- Visibility: **public**

#### Arguments

- \$notes **string**

### business

    \ByteDigital\PDFGenerator\Classes\Invoice ByteDigital\PDFGenerator\Classes\Invoice::business(array $details)

Set the invoice business details.

- Visibility: **public**

#### Arguments

- \$details **array**

### customer

    \ByteDigital\PDFGenerator\Classes\Invoice ByteDigital\PDFGenerator\Classes\Invoice::customer(array $details)

Set the invoice customer details.

- Visibility: **public**

#### Arguments

- \$details **array**

### footnote

    \ByteDigital\PDFGenerator\Classes\Invoice ByteDigital\PDFGenerator\Classes\Invoice::footnote(string $footnote)

Set the invoice footnote.

- Visibility: **public**

#### Arguments

- \$footnote **string**

### due_date

    \ByteDigital\PDFGenerator\Classes\Invoice ByteDigital\PDFGenerator\Classes\Invoice::due_date(Carbon $due_date)

Set the invoice due date.

- Visibility: **public**

#### Arguments

- \$due_date **Carbon**

### tax_rates

Array of tax rates for PDFGenerator.

- Visibility: **public**

### with_pagination

    \ByteDigital\PDFGenerator\Classes\Invoice ByteDigital\PDFGenerator\Classes\Invoice::with_pagination(boolean $with_pagination)

If true and page count are higher than 1, pagination will show at the bottom.

- Visibility: **public**

#### Arguments

- \$duplicate_header **boolean**

### with_pagination

    \ByteDigital\PDFGenerator\Classes\Invoice ByteDigital\PDFGenerator\Classes\Invoice::duplicate_header(boolean $duplicate_header)

If true header will be duplicated on each page.

- Visibility: **public**

#### Arguments

- \$duplicate_header **boolean**
