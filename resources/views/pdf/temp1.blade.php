<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>{{$title}}</title>
    <style>
        body {
            font-size: 11px;
            margin: 0px;
            text-align: center;
            background: #ccc;
            color: #000;
            padding: 0;
            line-height: 1.5em;
        }

        * {
            margin: 0;
            padding: 0;
            line-height: 1;
        }

        table {
            border-collapse: collapse;
            float: none;
        }

        table td, table th {
            border-width: 0;
            border-collapse: collapse;
            vertical-align: middle;
            font-weight: 100;
        }

        label, p, li, td {
            margin: 0;
            padding: 0;
            line-height: 1.5;
            font-weight: 100;
            list-type: none;
        }

        label {
            font-size: 12px;
            font-weight: 100;
        }

        th {
            line-height: 2;
        }

        li {
            font-size: 13px;
            font-weight: 100;
        }

        .page-break {
            page-break-before: always;
        }

        table, tr, th, td {
            outline-width: 0;
        }

        h1 {
            font-size: 11px;
            font-family: 'texgyreherosbold', sans-serif;
            color: {{$color}};
            margin: 0;
        }

        table th .description {
            line-height: 14px;
            font-size: 10px;
            padding-top: 3px;
        }

        .itemdisc tbody td {
            text-align: center;
            vertical-align: middle;
            font-weight: normal;
            font-size: 14px;
        }

        .itemdisc tbody th, .itemdisc tbody td {
            padding-top: 14px;
            padding-bottom: 14px;
        }

        .itemdisc tbody tr {
            border-bottom: 2px solid #777777;
            width: 100%;
        }

        .template-invoice {
            position: relative;
            max-width: 840px;
            margin: auto;
            background: #e7e9e8;
            background: -moz-radial-gradient(center, ellipse cover, #e7e9e8 0%, #cacccb 100%);
            background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, #e7e9e8), color-stop(100%, #cacccb));
            background: -webkit-radial-gradient(center, ellipse cover, #e7e9e8 0%, #cacccb 100%);
            background: -o-radial-gradient(center, ellipse cover, #e7e9e8 0%, #cacccb 100%);
            background: -ms-radial-gradient(center, ellipse cover, #e7e9e8 0%, #cacccb 100%);
            background: radial-gradient(ellipse at center, #e7e9e8 0%, #cacccb 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#e7e9e8', endColorstr='#cacccb', GradientType=1);
            border: 20px solid #fff;
            -webkit-box-shadow: 0 0 2px #888888;
            -moz-box-shadow: 0 0 2px #888888;
            -o-box-shadow: 0 0 2px #888888;
            box-shadow: 0 0 2px #888888;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        table.itemdisc tr th {
            text-align: center;
        }

        table.itemdisc thead tr th {
            color: #fff;
            font-family: 'texgyreherosbold', sans-serif;
            font-size: 13px;
            color: #ffffff;
            border-bottom: none !important;
            padding: 5px 10px;
            font-weight: 600;
        }

        ul li {
            list-style: none;
            text-align: left;
        }

        span.invoienumber {
            font-size: 29px;
            font-weight: bold;
            text-align: right;
            float: right;
            margin-top: 10px;
        }

        .headertable ul {
            padding: 0;
            margin: 0;
        }

        .info .info-time {
            text-align: left;
            margin-left: 15px;
            margin-top: 55px;
            font-size: 14px;
        }

        .info .info-payment {
            text-align: left;
            margin-left: 15px;
            padding-left: 21px;
            margin-top: 40px;
            font-size: 10px;
        }

        .info .info-payment .description {
            font-size: 7px;
            line-height: 10px;
            margin-top: 5px;
            margin-bottom: 10px;
        }

        .invoice-totals tbody th {
            text-align: left;
        }

        .invoice-totals tbody td, .invoice-totals tbody th {
            padding: 5px 15px;
            font-size: 14px;
            width: 90px;

        }

        .invoice-totals tbody td {
            text-align: center;
        }

        .invoice-paynow a {
            color: #fff;
        }

        .invoice-totals {
            padding-bottom: 30px;
        }

        .invoice-signature {
            margin-top: 45px;
            margin-bottom: 45px;
            width: 250px;
            text-align: center;
            font-size: 11px;
            display: inline-block;
        }

        .footertable {
            background: #000000;
            margin: 32px 25px 0 25px;
            height: 70px;
            /*background-image: url(pdf/img/logo2.png);*/
            background-size: 109px 30px;
            background-repeat: no-repeat;
            background-position: 45px 20px;
            font-size: 9px;
            line-height: 14px;
            color: #ffffff;
            text-align: left;
        }

        .invoice-paynow {
            padding-left: 0;
            /* line-height: 32px; */
            margin-top: 10px;
            margin-left: 113px;
            background-color: {{$color}};
            font-weight: bold;
            text-align: center;
            vertical-align: middle;
            width: 113px;
            font-size: 14px;
            padding: 5px;
        }

        .info .thankyou {
            margin-top: 60px;
            margin-left: 8px;
            padding-top: 30px;
            width: 130px;
            height: 130px;
            {{--background-image: url({{get_base64_file(public_path('/pdf-templates/temp1/img/ico_thank.png'))}});--}}
                         background-repeat: no-repeat;
            font-family: 'zrnicregular', sans-serif;
            font-size: 18px;
            color: #ffffff;

        }

        .info .thankyou .description {
            font-size: 10px;
        }

        .info .info-payment .description {
            font-size: 7px;
            line-height: 10px;
            margin-top: 5px;
            margin-bottom: 10px;
        }

        .info .info-payment {
            text-align: left;
            margin-left: 15px;
            padding-left: 21px;
            margin-top: 40px;
            font-size: 10px;
        }

        .info {
            width: 320px;
            margin-right: 10px;
            padding-bottom: 10px;
        }

        table.headertable-3 ul li img {
            height: 13px;
            margin-right: 10px;
        }

        table.headertable-1 img {
            height: 44px;
            display: inline-block;
        }

        table.headertable-2 {
            height: 166px;
        }

        .info-payment img {
            height: 20px;
            margin-right: 10px;
        }

        .invoice-paynow img {
            height: 20px;
            margin-right: 10px;
        }

        table.howpay {
            text-align: left;
            font-size: 12px;
        }

        table.howpay span {
            font-size: 13px;
            border: 1px solid #999;
            padding: 9.5px 5px;
            font-weight: 600;
            float: right;
            margin-bottom: 20px;
        }

        @media print {
            body {
                padding: 0;
                margin: 0;
            }
        }

        @page {
            size: 8.5in 15in;
            margin: 0;
        }

    </style>
</head>
<body>
<div class="template-invoice">
    <table class="headertable-1" width="100%" cellpadding="0" cellspacing="0" align="left"
           style="font-family: Arial, sans-serif;">
        <tbody>
        <tr>
            <td style="font-size: 20px;
    padding-left: 70px;
    width: 20%;
;
"><img src="{{ get_base64_file($logo_url) }}"/></td>
            <td style="padding: 25px 0;padding-right: 40px;text-align: right;font-size: 9px;width: 80%;">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="24" height="24" fill="none"/>
                    <path
                        d="M5.75556 11.1574L7.44019 9.81807C7.84498 9.49662 8.07713 9.01445 8.07713 8.50251L8.07714 6.3119C10.619 5.48447 13.3751 5.47852 15.9229 6.3119V8.51442C15.9229 9.02636 16.155 9.50853 16.5598 9.82998L18.2325 11.1574C18.9052 11.6872 19.8636 11.6337 20.4708 11.0265L21.5006 9.99666C22.1733 9.32399 22.1733 8.20488 21.4589 7.57388C16.0598 2.80573 7.93427 2.81168 2.54107 7.57389C1.82674 8.20488 1.82674 9.32399 2.49941 9.99666L3.52923 11.0265C4.12451 11.6337 5.0829 11.6872 5.75556 11.1574Z"
                        fill="#4e7dba"/>
                    <path
                        d="M12 13C10.8954 13 10 13.8955 10 15C10 16.1046 10.8954 17 12 17C13.1046 17 14 16.1046 14 15C14 13.8955 13.1046 13 12 13Z"
                        fill="#4e7dba"/>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M9.0258 10.765C6.64664 12.6333 4.99979 15.2783 4.37315 18.2377L4.21334 18.9924C4.10344 19.5115 4.49935 20 5.0299 20H18.9701C19.5006 20 19.8966 19.5115 19.7866 18.9924L19.6268 18.2377C19.0002 15.2783 17.3533 12.6333 14.9742 10.765C14.3431 10.2694 13.5638 10 12.7613 10H11.2387C10.4362 10 9.65694 10.2694 9.0258 10.765ZM8.5 15C8.5 13.067 10.067 11.5 12 11.5C13.933 11.5 15.5 13.067 15.5 15C15.5 16.933 13.933 18.5 12 18.5C10.067 18.5 8.5 16.933 8.5 15Z"
                          fill="#4e7dba"/>
                </svg>
                DO YOU HAVE ANY
                QUESTIONS ? | {{$client_phone}} icipsena, consusm et nosum lanten
            </td>
        </tr>
        </tbody>
    </table>
    <div style="padding: 0 35px;">
        <table class="headertable-2" width="100%" cellpadding="0" cellspacing="0" align="left"
               style="font-family: Arial, sans-serif;padding: 0;">
            <tbody>
            <tr>
                <td style="width: 50%;text-align: left;color: #fff; text-align: left; color: #fff; font-size: 11px; line-height: 18px; padding: 61px 0 0 45px; background:{{$color}}; margin-left:45px">
                    <ul>
                        <li>{{$client_company}}, {{$client_address}}, {{$client_suburb}}</li>
                        <li>Phone: {{$client_phone}} Fax: {{$client_fax}}</li>
                        <li>E-mail: {{$company_email}}</li>
                    </ul>
                </td>
                <td style="width: 50%;color: #fff;     padding: 35px 45px 0 0;  background:{{$color}}; ">
                    <h1 style="text-align: right; color: #fff; font-size: 76px; line-height: 80px; font-weight: bold;padding: 5px 45px 0 0;">{{$title}}</h1>
                    <span class="invoienumber">{{$id}}</span>
                </td>
            </tr>
            </tbody>
        </table>
        <div style="padding:25px 45px">
            <table class="headertable-3" width="100%" cellpadding="0" cellspacing="0" align="left"
                   style="font-family: Arial, sans-serif;">
                <tbody>
                <tr>
                    <td style="width: 60%;">
                        <h4 style="
    padding-bottom: 7px;
    font-size: 13px;
    font-family: 'texgyreherosbold', sans-serif;
    font-weight: bold;
    color: #000;
    line-height: 20px;
    text-align: left;
    margin-bottom: 0;
">{{$invoice_heading}}{{$title}} to</h4>
                        <ul>
                            <li>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <rect width="24" height="24" fill="none"/>
                                    <path
                                        d="M9.99998 19V14H14V19C14 19.55 14.45 20 15 20H18C18.55 20 19 19.55 19 19V12H20.7C21.16 12 21.38 11.43 21.03 11.13L12.67 3.6C12.29 3.26 11.71 3.26 11.33 3.6L2.96998 11.13C2.62998 11.43 2.83998 12 3.29998 12H4.99998V19C4.99998 19.55 5.44998 20 5.99998 20H8.99998C9.54998 20 9.99998 19.55 9.99998 19Z"
                                        fill="#4e7dba"/>
                                </svg>
                                {{$customer_company}}
                                , {{$customer_address}}, {{$customer_suburb}}, {{$customer_state}} {{$customer_zip}}
                            </li>
                            <li>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <rect width="24" height="24" fill="none"/>
                                    <path
                                        d="M15.5 1H7.5C6.12 1 5 2.12 5 3.5V20.5C5 21.88 6.12 23 7.5 23H15.5C16.88 23 18 21.88 18 20.5V3.5C18 2.12 16.88 1 15.5 1ZM11.5 22C10.67 22 10 21.33 10 20.5C10 19.67 10.67 19 11.5 19C12.33 19 13 19.67 13 20.5C13 21.33 12.33 22 11.5 22ZM16 18H7V4H16V18Z"
                                        fill="#4e7dba"/>
                                </svg>
                                {{$customer_mobile}}
                            </li>
                        </ul>
                    </td>
                    <td style="width: 40%;">
                        <ul>
                            <li>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <rect width="24" height="24" fill="none"/>
                                    <path
                                        d="M3 18.8941V5H6.13297L10.9395 14.8854H11.1146C11.0886 14.5611 11.0562 14.1784 11.0173 13.7373C10.9784 13.2832 10.9459 12.8227 10.92 12.3557C10.8941 11.8757 10.8811 11.4411 10.8811 11.0519V5H13.4108V18.8941H10.2973L5.45189 8.95027H5.31568C5.35459 9.30054 5.38703 9.72216 5.41297 10.2151C5.45189 10.6951 5.48432 11.1751 5.51027 11.6551C5.53622 12.1351 5.54919 12.5568 5.54919 12.92V18.8941H3ZM17.7503 16.2865C16.8162 16.2865 16.0443 15.9881 15.4346 15.3914C14.8378 14.7816 14.5395 13.9254 14.5395 12.8227C14.5395 11.72 14.8314 10.8703 15.4151 10.2735C15.9989 9.67676 16.7903 9.37838 17.7892 9.37838C18.7103 9.37838 19.4757 9.67676 20.0854 10.2735C20.6951 10.8703 21 11.72 21 12.8227C21 13.9254 20.7081 14.7816 20.1243 15.3914C19.5405 15.9881 18.7492 16.2865 17.7503 16.2865ZM17.7697 14.7297C18.6259 14.7297 19.0541 14.0941 19.0541 12.8227C19.0541 11.5643 18.6259 10.9351 17.7697 10.9351C17.3157 10.9351 16.9849 11.0908 16.7773 11.4022C16.5697 11.7135 16.4659 12.187 16.4659 12.8227C16.4659 13.4584 16.5697 13.9384 16.7773 14.2627C16.9849 14.5741 17.3157 14.7297 17.7697 14.7297ZM14.7341 18.8941V17.1038H20.8054V18.8941H14.7341Z"
                                        fill="#4e7dba"/>
                                </svg>
                                <span
                                    style="width:80px; display: inline-block;">{{$title}} No:</span><label>{{$id}}</label>
                            </li>
                            <li>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <rect width="24" height="24" fill="none"/>
                                    <path
                                        d="M16 12H13C12.45 12 12 12.45 12 13V16C12 16.55 12.45 17 13 17H16C16.55 17 17 16.55 17 16V13C17 12.45 16.55 12 16 12ZM16 2V3H8V2C8 1.45 7.55 1 7 1C6.45 1 6 1.45 6 2V3H5C3.89 3 3.01 3.9 3.01 5L3 19C3 20.1 3.89 21 5 21H19C20.1 21 21 20.1 21 19V5C21 3.9 20.1 3 19 3H18V2C18 1.45 17.55 1 17 1C16.45 1 16 1.45 16 2ZM18 19H6C5.45 19 5 18.55 5 18V8H19V18C19 18.55 18.55 19 18 19Z"
                                        fill="#4e7dba"/>
                                </svg>
                                <span
                                    style="width:80px; display: inline-block;">{{$title}} Date:</span><label>{{$date}}</label>
                            </li>
                            <li>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <rect width="24" height="24" fill="none"/>
                                    <path
                                        d="M11.8 10.9C9.53 10.31 8.8 9.7 8.8 8.75C8.8 7.66 9.81 6.9 11.5 6.9C12.92 6.9 13.63 7.44 13.89 8.3C14.01 8.7 14.34 9 14.76 9H15.06C15.72 9 16.19 8.35 15.96 7.73C15.54 6.55 14.56 5.57 13 5.19V4.5C13 3.67 12.33 3 11.5 3C10.67 3 10 3.67 10 4.5V5.16C8.06 5.58 6.5 6.84 6.5 8.77C6.5 11.08 8.41 12.23 11.2 12.9C13.7 13.5 14.2 14.38 14.2 15.31C14.2 16 13.71 17.1 11.5 17.1C9.85 17.1 9 16.51 8.67 15.67C8.52 15.28 8.18 15 7.77 15H7.49C6.82 15 6.35 15.68 6.6 16.3C7.17 17.69 8.5 18.51 10 18.83V19.5C10 20.33 10.67 21 11.5 21C12.33 21 13 20.33 13 19.5V18.85C14.95 18.48 16.5 17.35 16.5 15.3C16.5 12.46 14.07 11.49 11.8 10.9Z"
                                        fill="#4e7dba"/>
                                </svg>
                                <span
                                    style="width:80px; display: inline-block;">Total:</span><label>$
                                    {{$total}}</label></li>

                        </ul>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div style="padding: 0 55px">

        <div class="terms">
            <table class="itemdisc" width="100%" cellpadding="0" cellspacing="0" align="left"
                   style="font-family: Arial, sans-serif;">
                <tbody>
                <tr style="border:0;">
                    <td style="width:60%;">
                        <div class="info">
                            <div class="info-time"><strong>Terms:</strong> 30 days from issue</div>
                            <div class="info-payment"><img
                                    src="{{get_base64_file(public_path('/pdf-templates/temp1/svgs/pay.svg'))}}"/><strong>Payment
                                    Information</strong>
                                <p class="description">BIhil ipsam earunt. Cus, comni quiandis et offic temporecus
                                    nonsequi ut quis que cus, sinto et porectorume nonse incid que voles et offic oiae
                                    minctisto voloratur.<br><br><strong>
                                        Impererrum ius essed que volor sum ipsaecernat eiur aliam voloriae.</strong></p>
                            </div>
                            <div class="thankyou">
                                <div style="width:100%; text-align: center;">
                                    <img
                                        src="{{get_base64_file(public_path('/pdf-templates/temp1/img/ico_thank.png'))}}"
                                        style="/* display: block; *//* margin-left: 50px; */margin-bottom: 10px;height:25px;/* margin: 0 auto; */margin-bottom: 10px;"/>
                                </div>
                                Thank you<p class="description">for Your business</p>
                            </div>
                        </div>
                    </td>
                    <td style="width:40%;">
                        <div class="invoice-totals">
                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tbody>
                                @if ($tax)
                                    <tr>
                                        <th class="line"
                                            style="text-align: left; padding: 5px 15px; font-size: 14px; width: 90px; line-height: 36px;">
                                            Subtotal
                                        </th>
                                        <td class="line"
                                            style="text-align: center; padding: 5px 15px; font-size: 14px; width: 90px; line-height: 36px;">
                                            $ {{$sub_total}}
                                        </td>
                                    </tr>

                                    <tr>
                                        <th class="line"
                                            style="text-align: left; padding: 5px 15px; font-size: 14px; width: 90px; line-height: 36px;">
                                            {{$tax_label}} {{$tax_percent}}%
                                        </th>
                                        <td class="line"
                                            style="text-align: center; padding: 5px 15px; font-size: 14px; width: 90px; line-height: 36px;">
                                            $ {{$tax}}
                                        </td>
                                    </tr>
                                @endif

                                <tr style="border:0;">
                                    <th class="line"
                                        style="line-height: 14px;color: #ffffff;background: #000000;padding: 10px 15px;text-align: left;font-size: 14px;width: 90px;">
                                        Total:
                                    </th>

                                    <td class="col-2"
                                        style="line-height: 14px;color: #ffffff;background: {{$color}};padding: 0 15px;text-align: left;font-size: 14px;width: 90px;">
                                        $ {{$total}}
                                    </td>
                                </tr>
                                @if ('invoice' === $type)
                                    <tr>
                                        <th class="line"
                                            style="text-align: left; padding: 5px 15px; font-size: 14px; width: 90px; line-height: 36px;">
                                            Paid:
                                        </th>
                                        <td class="line"
                                            style="text-align: center; padding: 5px 15px; font-size: 14px; width: 90px; line-height: 36px;">
                                            $ {{$total_paid}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="line"
                                            style="text-align: left; padding: 5px 15px; font-size: 14px; width: 90px; line-height: 36px;">
                                            Remaining:
                                        </th>
                                        <td class="line"
                                            style="text-align: center; padding: 5px 15px; font-size: 14px; width: 90px; line-height: 36px;">
                                            $ {{$remaining}}
                                        </td>
                                    </tr>
                                @endif
                                </tbody>
                            </table>
                        </div>
                        <div class="invoice-signature">
                            <strong>Daniel Vanquisher
                            </strong><br>Accounts Manager
                        </div>
                        <div class="invoice-paynow">
                            <a href="#"><img
                                    src="{{get_base64_file(public_path('/pdf-templates/temp1/svgs/buy.svg'))}}"/>Pay Now</a>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <table class="howpay" width="100%" cellpadding="0" cellspacing="0" align="left"
               style="font-family: Arial, sans-serif;">
            <tbody>
            <tr>
                <td>
                    <button style="
                        background: {{$color}};
                        color: #fff;
                        padding: 7px 20px;
                        border: 0;
                        text-transform: uppercase; line-height: 18px;
                        ">How to pay
                    </button>
                    <span>
                        @if($account_name)
                            Account: {{$account_name}}
                        @endif
                        @if($bank)
                            | Bank: {{$bank}}
                        @endif
                        @if($bank_account)
                            | Account No: #{{$bank_account}}
                        @endif
					</span>
                </td>
            </tr>
            <tr>
                <td>
                    {{$payment_terms}}
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="footertable" style="padding:0 25px">

        <table class="itemdisc" width="100%" cellpadding="0" cellspacing="0" align="left"
               style="font-family: Arial, sans-serif;">
            <tbody>
            <tr style="border:0;">
                <td>

                </td>

                <td style="font-size: 9px; line-height: 14px; color: #ffffff; text-align: left;">
                    {{$client_address}}, {{$client_suburb}}
                </td>

                <td style="font-size: 9px; line-height: 14px; color: #ffffff; text-align: left;">
                    Telephone: {{$client_phone}}</br>
                    Fax: {{$client_fax}}
                </td>

                <td style="font-size: 9px; line-height: 14px; color: #ffffff; text-align: left;">
                    E-mail: {{$company_email}}
                </td>

                <td style="font-size: 9px; line-height: 14px; color: #ffffff; text-align: left;">

                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <div style="padding: 5px 25px;">
        <span style="font-size: 10px; text-align:left; font-family: 'texgyreherosregular', sans-serif; display: block;">www.yourcompany.com</span>
        <span style="font-size: 6px; text-align:right; font-family: 'texgyreherosregular', sans-serif; display: block;">Cus, comni quiandis et offic temporecus nonsequi ut quis que voles et.</span>
    </div>
</div>
</body>
</html>
