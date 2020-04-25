<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as DomPDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class WelcomeController extends Controller
{
    public function index()
    {
        $pdfStream = DomPDF::setOptions( [
//            'isHtml5ParserEnabled' => true,
//            'isRemoteEnabled'      => true,
//            'dpi'                  => 300
//            'debugKeepTemp'        => true
        ] )->loadView( 'pdf.invoice', [

            'type'            => 'invoice',
            'title'           => 'Invoice',
            'invoice_heading' => 'Tax Invoice',// NEW field
            'logo_url'        => public_path( 'pdf-templates/invoice/logo.png' ),
            'template'        => '/pdf-templates/invoice',// NEW field
            'color'           => '#ccc',

            'id'   => '324456',
            'date' => '08.04.2020',

            'account_name' => 'Waterproofing Specialists Pty Ltd',
            'bank'         => 'Common Bank',
            'bank_branch'  => '062-235',
            'bank_account' => '952452141',
            'iban'         => '565876534123418438554867',
            'swift'        => 'SW5655',

            'client_company' => 'Agnisqu',
            'client_address' => '99-785 City, Your Street 2397',
            'client_suburb'  => '4RF',
            'client_phone'   => '+1652 315 54 54',
            'client_mobile'  => '+1652 315 54 54',
            'client_fax'     => '+1652 315 54 54',
            'company_email'  => 'office@yourbusiness.com',
            'company_web'    => 'www.yourbusiness.com',// NEW field

            'customer_firstname' => 'Firstname',
            'customer_surname'   => 'Lastname',
            'customer_company'   => 'Customer Company',
            'customer_address'   => 'Customer City, Customer Street 2397',
            'customer_suburb'    => '6FR',
            'customer_state'     => 'CA',
            'customer_zip'       => '4500002',
            'customer_mobile'    => '+1650 315 54 54',
            'customer_landline'  => '+1651 315 54 54',

            'job_name'   => 'Variables text: JOB NAME',// NEW field
            'quote_note' => 'Variables text: This quote is for the injection of the ceiling ONLY. I have accounted for loose concrete falling
        when we drill the slab to be patched with a waterproofing grout and patching any existing
        areas around the leaks with waterproofing grout.',

            'products' => [
                [
                    'name'        => 'UX/UI Design',
                    'measurement' => '2',
                    'unit'        => 'LM',
                    'summary'     => 'Hydrophobic foaming resin pushes its way through cracks creating a physical water barrier.'
                ],
                [
                    'name'        => 'Development API',
                    'measurement' => '3',
                    'unit'        => 'LM',
                    'summary'     => 'Hydrophobic foaming resin pushes its way through cracks creating a physical water barrier.'
                ]
            ],

            'payment_terms' => '30 days from issue',
            'tax_label'     => 'GST',
            'sub_total'     => '1,900.00',

            'tax_percent' => '7',
            'tax'         => '133.00',

            'total' => '2,033.00',

            'ccf1'       => 'ccf1 Photos and video of work are stored as a record.',
            'ccf1_label' => 'ccf1 Label',
            'ccf2'       => 'ccf2 Photos and video of work are stored as a record.',
            'ccf2_label' => 'ccf2 Label',

            'services' => [
                (object) [
                    'name'        => 'Sealboss Polyurethane Crack Injection',
                    'description' => 'Sealboss 1570 is a closed cell hydrophobic foam which is injected into or through walls or floors using a pump which
                generates a pressure of upto 1500psi. This high pressure ensures that the resin is pumped throughout all the cavities
                inside the blockwork or concrete.<br /><br />
                The 1570 starts as a resin which is pumped into the effected areas of your building at pressures between
                2000-5000psi. When the resin comes into contact with water it is activated and turns into a foam which pushes its way
                through all cracks and voids creating a physical water barrier.',
                ],
                (object) [
                    'name'        => 'Situations where we have successfully Sealboss 1570',
                    'description' => '<ul>
                <li>Retirement villages to seal the wall floor joint which was flooding a subterrenean garage.</li>
                <li>Theatre floors which had cracked and water was rising through the cracks.</li>
                <li>Apartment balconies which had continual seepage through a slab effected by concrete cancer.</li>
                <li>Garage ceilings which were cracked and hollow due to concrete cancer.</li>
                <li>Shopping centres along dincel walls.</li>
                <li>Apartment buildings into cracked garage ceiling slabs .</li>
                <ul><br /><br />
                When applying the sealboss 1570 we inject each point multiple times. On the first pass we inject with a higher level of
                accelerator in order to fill any larger voids and stabilise anything that could be behind the substrate.<br /><br />
                Next we make a mixture with less accelerator to create a thicker more solid foam',
                ],
                'heading_1'             => 'Company Name Ltd',
                'heading_2'             => '123 Streetname St',
                'heading_3'             => 'Suburb STATE 1200',
                'heading_4'             => 'P. 012235346547',
                'purchase_order_number' => 'RAND123534765867', // If $type is invoice and purchase order exists
            ],

        ] );

        $randomPdfName = 'pdf/' . Str::random( 40 ) . '.pdf';
        if ( Storage::disk( 'public' )->put( $randomPdfName, $pdfStream->output() ) ) {
            Storage::disk( 'public' )->download( $randomPdfName );
            $url = Storage::disk( 'public' )->url( $randomPdfName );

            return [ 'pdf_link' => $url ];
        }

        return [ 'error' => 'not found' ];
    }
}
