<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xml:lang="en" xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $title }} - #{{ $id }}</title>
    <style>
        html, body, div, span, applet, object, iframe,
        h1, h2, h3, h4, h5, h6, p, blockquote, pre,
        a, abbr, acronym, address, big, cite, code,
        del, dfn, em, img, ins, kbd, q, s, samp,
        small, strike, strong, sub, sup, tt, var,
        b, u, i, center,
        dl, dt, dd, ol, ul, li,
        fieldset, form, label, legend,
        table, caption, tbody, tfoot, thead, tr, th, td,
        article, aside, canvas, details, embed,
        figure, figcaption, footer, header, hgroup,
        menu, nav, output, ruby, section, summary,
        time, mark, audio, video {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline;
        }

        article, aside, details, figcaption, figure,
        footer, header, hgroup, menu, nav, section {
            display: block;
        }

        body {
            line-height: 1;
        }

        blockquote, q {
            quotes: none;
        }

        blockquote:before, blockquote:after,
        q:before, q:after {
            content: '';
            content: none;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        a, a:hover {
            text-decoration: none;
        }

        body {
            font-size: 14px;
            margin: 0px;
            text-align: center;
            background: {{ $color }};
            color: #1a171b;
            font-family: Open Sans, Arial, sans-serif;
            padding: 0;
            line-height: 1.5em;
        }

        a {
            color: #1a171b;
            text-decoration: none;
        }

        strong {
            font-weight: bold;
        }

        h1 {
            font-size: 18px;
            font-weight: bold;
        }

        h2,
        h3,
        h4,
        h5,
        h6,
        .title {
            font-size: 14px;
            font-weight: bold;
            border-bottom: none;
        }

        .invoice {
            position: relative;
            padding: 30px 45px 100px;
            width: 800px;
            min-height: 1120px;
            margin: 40px auto;
            background: #ffffff;
            border: none;
            -webkit-box-shadow: 0 0 1px #888888;
            -moz-box-shadow: 0 0 1px #888888;
            -o-box-shadow: 0 0 1px #888888;
            box-shadow: 0 0 1px #888888;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            page-break-after: always;
        }

        .invoice.fixed {
            height: 1120px;
        }

        .this-is-line {
            border-top: 2px #32bad9 solid;
            padding-top: 30px;
        }

        .header {
            padding-bottom: 20px;
            overflow: hidden;
        }

        .invoice-logo img {
            height: 52px;
            width: 245px;
            float: left;
            display: inline-block;
            margin-left: 15px;
        }

        #info-to {
            text-align: left;
            position: relative;
            overflow: hidden;
        }

        #info-to .to-org .col-1 {
            font-size: 16px;
            width: 100px;
            font-weight: bold;
        }

        .invoice-from {
            width: 265px;
            display: inline-block;
            text-align: left;
            float: right;
            font-size: 12px;
            line-height: 16px;
        }

        .invoice-to-title {
            padding-bottom: 20px;
            font-size: 18px;
            font-weight: bold;
            color: #000;
            line-height: 20px;
            text-align: center;
        }

        .invoice-to {
            float: left;
            width: 405px;
        }

        .invoice-to .to-phone {
            text-align: left;
            padding-left: 23px;
            background-image: url({{ get_base64_file(public_path($template . '/ico_phone.png')) }});
            background-size: 17px 17px;
            background-repeat: no-repeat;
            background-position: 0 3px;
            font-size: 14px;
        }

        .invoice-meta {
            position: relative;
            width: 265px;
            display: inline-block;
            float: right;
        }

        .invoice-meta .meta-uno {
            text-align: left;
            float: left;
            width: 90px;
            padding-left: 23px;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .invoice-meta .meta-duo {
            float: right;
            text-align: left;
            font-weight: bold;
            width: 150px;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .invoice-meta .invoice-number {
            background-image: url({{ get_base64_file(public_path($template . '/ico_nr.png')) }});
            background-size: 17px 17px;
            background-repeat: no-repeat;
            background-position: 0 3px;
        }

        .invoice-meta .invoice-date {
            background-image: url({{ get_base64_file(public_path($template . '/ico_date.png')) }});
            background-size: 17px 17px;
            background-repeat: no-repeat;
            background-position: 0 3px;
        }

        .invoice-meta .invoice-due {
            background-image: url({{ get_base64_file(public_path($template . '/ico_price.png')) }});
            background-size: 17px 17px;
            background-repeat: no-repeat;
            background-position: 0 3px;
        }

        .invoice-job {
            clear: both;
            text-align: left;
            padding: 0 0 20px;
        }

        .invoice-job .to-org td {
            padding: 10px 0 0;
        }

        .invoice-items {
            text-align: left;
            margin-left: 100px;
        }

        .invoice-totals {
            float: right;
            width: 262px;
            text-align: left;
        }

        .invoice-items table,
        .invoice-totals table {
            width: 100%;
            font-size: 12px;
        }

        .invoice-items thead th {
            font-weight: bold;
            font-size: 14px;
            color: #ffffff;
            background: #8f9193;
            line-height: 30px;
        }

        .invoice-items thead th.col-1 {
            width: 355px;
            padding-left: 15px;
        }

        .invoice-items thead th.col-2,
        .invoice-items thead th.col-3 {
            text-align: center;
            padding-left: 5px;
            padding-right: 5px;
            width: 125px;
        }

        .invoice-totals thead th {
            font-weight: bold;
            padding: 6px 0;
            background: #e5e5e5;
        }

        .invoice-items tbody tr th,
        .invoice-totals tbody tr th {
            padding-left: 15px;
        }

        .invoice-items tbody tr {
            border-top: 2px solid #ffffff;
        }

        .invoice-items tbody th,
        .invoice-items tbody td {
            padding-top: 5px;
            padding-bottom: 5px;
            background: #f0f1f1;
        }

        .invoice-items tbody td {
            text-align: center;
            vertical-align: middle;
            font-weight: normal;
            font-size: 14px;
        }

        .invoice-totals tbody td {
            padding-top: 10px;
            padding-bottom: 10px;
            text-align: center;
            vertical-align: middle;
            width: 131px;
            font-size: 14px;
        }

        .invoice-totals tbody th {
            padding-top: 10px;
            padding-bottom: 10px;
            padding-right: 15px;
            text-align: right;
            vertical-align: middle;
            font-size: 14px;
        }

        .invoice-totals tbody th.col-1 {
            padding-top: 5px;
            padding-bottom: 5px;
            color: #ffffff;
            background: #8f9092;
            font-weight: bold;
        }

        .invoice-totals tbody td.col-2 {
            padding-top: 5px;
            padding-bottom: 5px;
            color: #ffffff;
            background: #32bad9;
            font-weight: bold;
        }

        .invoice-items tbody td.item-summary {
            background: #eaf6f9;
            text-align: right;
            padding: 5px;
        }

        .lower-block {
            margin-top: 10px;
            overflow: hidden;
        }

        .info {
            float: left;
            width: 305px;
            margin: 10px 60px 0 100px;
        }

        .info .info-time {
            text-align: left;
            padding-left: 23px;
            background-image: url({{ get_base64_file(public_path($template . '/ico_time.png')) }});
            background-size: 17px 17px;
            background-repeat: no-repeat;
            background-position: 0 2px;
            font-size: 13px;
        }

        .info-details {
            clear: both;
            padding-top: 20px;
        }

        .info-details .details {
            width: 100%;
            text-align: left;
        }

        .info-details .details .col-1 {
            font-size: 16px;
            width: 100px;
            text-align: left;
            font-weight: bold;
        }

        .info-details .info-extrafields .details {
            margin-bottom: 10px;
        }

        .info-details .info-howtopay {
            text-align: left;
            background-image: url({{ get_base64_file(public_path($template . '/ico_pay.png')) }});
            background-size: 34px 34px;
            background-repeat: no-repeat;
            background-position: 25px 35px;
        }

        .info-details .info-howtopay .details .col-2 {
            background: #eaf6f9;
            padding: 10px 10px 0;
        }

        .info-details .info-howtopay .details .col-2 p {
            margin-bottom: 10px;
        }

        .info-details .info-howtopay .details .col-2 p span {
            border-right: 1px solid #32bad9;
            padding: 0 10px;
        }

        .info-details .info-howtopay .details .col-2 p span:first-child {
            padding-left: 0;
        }

        .info-details .info-howtopay .details .col-2 p span:last-child {
            border: 0;
        }

        .invoice-services {
            margin: 0 0 20px;
            text-align: left;
        }

        .invoice-services .service-name h2 {
            margin-bottom: 10px;
        }

        .footer {
            background: #8f9092;
            margin-top: 30px;
            height: 40px;
            position: absolute;
            bottom: 30px;
            width: calc(100% - 90px);
        }

        .footer .footer-mail {
            text-align: left;
            margin-left: 15px;
            padding-left: 30px;
            padding-right: 30px;
            margin-top: 5px;
            background-image: url({{ get_base64_file(public_path($template . '/footer_mail.png')) }});
            background-size: 24px 24px;
            background-repeat: no-repeat;
            background-position: 0 2px;
            font-size: 12px;
            line-height: 27px;
            float: left;
            color: #ffffff;
        }

        .footer .footer-phone {
            text-align: left;
            margin-left: 80px;
            padding-left: 30px;
            padding-right: 30px;
            margin-top: 5px;
            background-image: url({{ get_base64_file(public_path($template . '/footer_phone.png')) }});
            background-size: 24px 24px;
            background-repeat: no-repeat;
            background-position: 0 2px;
            font-size: 12px;
            line-height: 27px;
            float: left;
            color: #ffffff;
        }

        .footer .footer-web {
            text-align: left;
            margin-left: 15px;
            padding-left: 30px;
            padding-right: 30px;
            margin-top: 5px;
            background-image: url({{ get_base64_file(public_path($template . '/footer_web.png')) }});
            background-size: 24px 24px;
            background-repeat: no-repeat;
            background-position: 0 2px;
            font-size: 12px;
            line-height: 27px;
            float: right;
            color: #ffffff;
        }
    </style>
</head>
<body>

<div class="invoice"><!-- INVOICE -->

    <header class="header"><!-- HEADER -->
        <div class="invoice-logo"><img src="{{ get_base64_file($logo_url) }}" alt=""/></div><!-- LOGO -->

        <div class="invoice-from"><!-- HEADER FROM -->
            <div class="org">{{ $client_company}}, {{ $client_address }}, {{ $client_suburb }}</div>
            <div class="org">Phone: {{ $client_phone ?? $client_mobile }} @if($client_fax)
                    Fax: {{ $client_fax }} @endif </div>
            <a class="email" href="mailto:{{ $company_email }}">E-mail: {{ $company_email }}</a>
        </div><!-- HEADER FROM -->

    </header><!-- HEADER -->

    <div class="this-is-line"></div>

    <section id="info-to"><!-- TO SECTION -->

        <div class="invoice-to-title">
            @if ($type === 'invoice')
                {{ $invoice_heading }}
            @else
                {{ $title }}
            @endif
        </div><!-- INVOICE TO -->
        <div class="invoice-to">
            <table class="to-org">
                <tbody>
                <tr>
                    <td class="col-1">Client</td>
                    <td class="col-2">{{ $customer_firstname }} {{ $customer_surname }} - {{ $customer_company }}</td>
                </tr>
                <tr>
                    <td class="col-1"></td>
                    <td class="col-2">{{ $customer_zip}} {{ $customer_state }}, {{ $customer_address }}
                        , {{ $customer_suburb }}</td>
                </tr>
                @if ($customer_landline || $customer_mobile)
                    <tr>
                        <td class="col-1"></td>
                        <td class="col-2">
                            <div class="to-phone">{{ $customer_landline ?? $customer_mobile }}</div>
                        </td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div><!-- INVOICE TO -->

        <div class="invoice-meta">
            <div class="meta-uno invoice-number">Reference:</div>
            <div class="meta-duo">#{{ $id }}</div>
            <div class="meta-uno invoice-date">Date:</div>
            <div class="meta-duo">{{ $date }}</div>
            <div class="meta-uno invoice-due">Total:</div>
            <div class="meta-duo">$ {{ $total }} Inc {{ $tax_label }}</div>
        </div>

        <div class="invoice-job">
            <table class="to-org">
                <tbody>
                <tr>
                    <td class="col-1">Job Name</td>
                    <td class="col-2">{{ $job_name }}</td>
                </tr>
                @if ($quote_note)
                    <tr>
                        <td class="col-1">Description</td>
                        <td class="col-2">{{ $quote_note }}</td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>

    </section><!-- TO SECTION -->

    <section class="invoice-financials"><!-- FINANCIALS SECTION -->

        @if ($products)
            <div class="invoice-items"><!-- INVOICE ITEMS -->
                <table>
                    <thead>
                    <tr>
                        <th class="col-1">Product Application</th>
                        <th class="col-2">Measurement</th>
                        <th class="col-3">Unit</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <th><h2>{{ $product['name'] }}</h2></th>
                            <td>{{ $product['measurement'] }}</td>
                            <td>{{ $product['unit'] }}</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="item-summary">{{ $product['summary'] }}</td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
            </div><!-- INVOICE ITEMS -->
        @endif

        <div class="lower-block"><!-- TERMS&PAYMENT INFO -->

            <div class="info">
                <div class="info-time"><strong>Terms:</strong> {{ $payment_terms }}</div>
            </div>

            <div class="invoice-totals"><!-- TOTALS -->
                <table>
                    <tbody>
                    <tr>
                        <th>Subtotal</th>
                        <td>$ {{ $sub_total }} Ex {{ $tax_label }}</td>
                    </tr>
                    <tr>
                        <th>Tax {{ $tax_percent }}%</th>
                        <td>@if($tax > 0) $ {{ $tax }} {{ $tax_label }} @endif</td>
                    </tr>
                    <tr>
                        <th class="col-1">Total:</th>
                        <td class="col-2">$ {{ $total }} Inc {{ $tax_label }}</td>
                    </tr>
                    </tbody>
                </table>
            </div><!-- TOTALS -->

            <div class="info-details">
                <div class="info-extrafields">
                    @php
                        $extra_header = false;
                        $extra_footer = false;
                    @endphp
                    @for($i = 1; $i <= 20; $i++)
                        @if(!empty(${'ccf' . $i . '_label'}))
                            @if($extra_header === false)
                                @php
                                    $extra_header = '<table class="details"><tbody>';
                                @endphp
                            @endif
                            @if($extra_footer === false)
                                @php
                                    $extra_footer = '</tbody></table>';
                                @endphp
                            @endif
                            {!! $extra_header !!}
                            <tr>
                                <td class="col-1">{{ ${'ccf' . $i . '_label'} }}</td>
                                <td class="col-2">
                                    @if(!empty(${'ccf' . $i}))
                                        {{ ${'ccf' . $i} }}
                                    @endif
                                </td>
                            </tr>
                        @endif
                    @endfor
                    @if($extra_footer !== false)
                        {!! $extra_footer !!}
                    @endif
                </div>
                <div class="info-howtopay">
                    <table class="details">
                        <tbody>
                        <tr>
                            <td class="col-1">How To Pay</td>
                            <td class="col-2">
                                <p>
                                    <span><strong>Account:</strong> {{ $account_name }}</span>
                                    <span><strong>BSB:</strong> {{ $bank_branch }}</span>
                                    <span><strong>ACCT #:</strong> {{ $bank_account }}
                                </p>
                                <p>
                                    <span><strong>Bank:</strong> {{ $bank }}</span>
                                    <span><strong>IBAN:</strong> {{ $iban }}</span>
                                    <span><strong>Swift:</strong> {{ $swift }}</span>
                                </p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div><!-- TERMS&PAYMENT INFO -->

    </section><!-- FINANCIALS SECTION -->

    <footer class="footer"><!-- FOOTER -->
        <div class="footer-mail">{{ $company_email }}</div>
        <div class="footer-phone">{{ $client_phone ?? $client_mobile }}</div>
        <div class="footer-web">{{ $company_web }}</div>
    </footer><!-- FOOTER -->

</div><!-- INVOICE -->

@if($services)
    <!-- INVOICE SERVICES -->
    @foreach($services as $service)
        <div class="invoice fixed"><!-- INVOICE -->

            <header class="header"><!-- HEADER -->
                <div class="invoice-logo"><img src="{{ get_base64_file($logo_url) }}" alt=""/></div><!-- LOGO -->

                <div class="invoice-from"><!-- HEADER FROM -->
                    <div class="org">{{ $client_company}}, {{ $client_address }}, {{ $client_suburb }}</div>
                    <div class="org">Phone: {{ $client_phone ?? $client_mobile }} @if($client_fax)
                            Fax: {{ $client_fax }} @endif </div>
                    <a class="email" href="mailto:{{ $company_email }}">E-mail: {{ $company_email }}</a>
                </div><!-- HEADER FROM -->

            </header><!-- HEADER -->

            <div class="this-is-line"></div>

            <div class="invoice-services">
                <div class="service-name">
                    <h2>{{ $service->name }}</h2>
                </div>
                <div class="service-description">
                    {!! $service->description !!}
                </div>
            </div>

            <footer class="footer"><!-- FOOTER -->
                <div class="footer-mail">{{ $company_email }}</div>
                <div class="footer-phone">{{ $client_phone ?? $client_mobile }}</div>
                <div class="footer-web">{{ $company_web }}</div>
            </footer><!-- FOOTER -->

        </div><!-- INVOICE -->
    @endforeach
    <!-- INVOICE SERVICES -->
@endif

</body>
</html>
