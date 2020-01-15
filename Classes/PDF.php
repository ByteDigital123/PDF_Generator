<?php
/**
 * This file is part of consoletvs/invoices.
 *
 * (c) Erik Campobadal <soc@erik.cat>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ByteDigital\PDFGenerator\Classes;

use Illuminate\Support\Facades\View;
use Dompdf\Options;
use Dompdf\Dompdf;

/**
 * This is the PDF class.
 *
 * @author Chris Mills <chris@byte-digital.com>
 */
class PDF
{
    /**
     * Generate the PDF.
     *
     * @method generate
     *
     * @param ByteDigital\PDFGenerator\Classes\Invoice $invoice
     * @param string                              $template
     *
     * @return Dompdf\Dompdf
     */
    public static function generate(Invoice $invoice, $template = 'default')
    {
        $template = strtolower($template);

        $options = new Options();

        $options->set('isRemoteEnabled', true);
        $options->set('isPhpEnabled', true);

        $pdf = new Dompdf($options);

        $context = stream_context_create([
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true,
            ],
        ]);

        $pdf->setHttpContext($context);

        $GLOBALS['with_pagination'] = $invoice->with_pagination;

        $pdf->loadHtml(View::make('invoices::' . $template, ['invoice' => $invoice]));
        $pdf->render();

        return $pdf;
    }
}
