<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xml:lang="en" xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{$title}} - #{{$id}}</title>
    <style>

        @page {
            margin: 1cm;
        }

        body {
            font-family: sans-serif;
            margin: 0;
            text-align: justify;
            font-size: 10pt;
        }

        table {
            border-collapse: collapse;
        }

        div,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        table,
        tr,
        th,
        td {
            margin: 0;
            padding: 0;
        }

        img {
            max-width: 100%;
            width: auto;
            height: auto;
            max-height: 100%;
            display: inline-block;
            /*float: left;*/
            /*object-fit: contain;*/
        }

        #main {
            float: left;
            width: 100%;
        }

        #footer {
            position: fixed;
            left: 0;
            right: 0;
            /*color: #aaa;*/
            /*font-size: 0.9em;*/
            height: 50px;
            width: 100%;
        }


        #footer {
            bottom: 0;
            /*border-top: 0.1pt solid #aaa;*/
        }

        .header {
            width: 100%;
            display: block;
        }

        .header div,
        #footer td {
            padding: 0;
        }

        .header .header_inner {
            width: 100%;
        }

        .header .logo {
            width: 30%;
            display: inline-block;
            margin-right: 3%;
        }

        .header .logo .inner {
            width: 100%;
            display: block;
            overflow: hidden;
        }

        .header .logo img {
            max-width: 100%;
            display: inline-block;
            overflow: hidden;
            max-height: 125px;
        }

        .header .info {
            width: 67%;
            display: inline-block;
        }

        /*.page-number {*/
        /*    text-align: center;*/
        /*}*/

        /*.page-number:before {*/
        /*    content: "Page " counter(page);*/
        /*}*/

        hr {
            page-break-after: always;
            border: 0;
        }

        .header .info .top_address p {
            margin-top: -10px;
            text-align: right;
            font-size: 12px;
            margin-bottom: 5px;
        }

        .header .info .bottom_title {
            /*float: left;*/
            width: 100%;
            background-color: {{$color}};
            display: inline-block;
        }

        .header .info .bottom_title h2 {
            margin: 0;
            color: #fff;
            font-size: 16px;
            font-weight: 400;
            text-align: center;
            padding: 10px 0;
        }

        #homepage .client {
            width: 100%;
            margin-top: -20px;
            display: block;
        }

        #homepage .client .left {
            width: 15%;
            margin-right: 5%;
            background-color: #2a2a29;
            display: inline-block;
        }

        #homepage .client .left h2 {
            margin: 0;
            color: #fff;
            font-size: 16px;
            font-weight: 400;
            text-align: left;
            padding: 5px 0 5px 10px;
        }

        #homepage .client .right {
            width: 80%;
            display: inline-block;
        }

        #homepage .client .right h2 {
            font-size: 15px;
            font-weight: 400;
            color: #000;
            margin: 0;
        }

        #homepage .client .right .float_left {
            /*float: left;*/
            width: 70%;
            margin-right: 5%;
            display: inline-block;
        }

        #homepage .client .right .float_right {
            /*float: right;*/
            width: 25%;
            display: inline-block;
        }

        #homepage .job {
            width: 100%;
            /*margin-top: 10px;*/
            display: block;
        }

        #homepage .job .left {
            /*float: left;*/
            width: 15%;
            margin-right: 5%;
            background-color: #2a2a29;
            display: inline-block;
        }

        #homepage .job .left h2 {
            margin: 0;
            color: #fff;
            font-size: 16px;
            font-weight: 400;
            text-align: left;
            padding: 5px 0 5px 10px;
        }

        #homepage .job .right {
            /*float: right;*/
            width: 80%;
            display: inline-block;
        }

        #homepage .job .right h2 {
            font-size: 15px;
            font-weight: 400;
            color: #000;
            margin: 0;
        }

        #homepage,
        .inner_wrapper {
            margin-bottom: 50px;
        }

        .desc {
            width: 100%;
            /*margin-top: 10px;*/
            display: block;
        }

        .desc .left {
            /*float: left;*/
            width: 15%;
            margin-right: 5%;
            background-color: #2a2a29;
            display: inline-block;
        }

        .desc .left h2 {
            margin: 0;
            color: #fff;
            font-size: 15px;
            font-weight: 400;
            text-align: left;
            padding: 5px 0 5px 10px;
        }

        .desc .right {
            /*float: right;*/
            width: 80%;
            text-align: center;
            display: inline-block;
        }

        .inner_wrapper .desc .right {
            text-align: left;
        }

        table.content {
            /*border-top: 1px solid #c6c6c6;*/
            width: 100%;
            margin: 0;
            padding: 0;
        }

        table.content tr {
            width: 100%;
        }

        table.content th,
        table.content td {
            border-right: 1px solid #c6c6c6;
            border-bottom: 1px solid #c6c6c6;
        }

        table.content tr th {
            text-align: left;
            padding: 5px;
        }

        table.content tr th:first-child,
        table.content tr td:first-child {
            border-left: 1px solid #c6c6c6;
        }

        table.content tr:first-child th,
        table.content tr:first-child td {
            border-top: 1px solid #c6c6c6;
        }

        table.content tr:nth-child(even) {
            background-color: #ebebeb;
        }


        #homepage .desc .right table.content tr {
        }

        #homepage .desc .right table.content th {
            font-size: 12px;
            font-weight: 400;
        }

        #homepage .desc .right table.content th.qty {
            text-align: left;
            font-weight: bold;
            padding-left: 15px;
        }

        #homepage .desc .right table.content th.wall {
            text-align: left;
            padding-left: 15px;
            font-weight: bold;
        }

        #homepage .desc .right table.content th.size {
            text-align: center;
            font-weight: bold;
        }

        #homepage .desc .right table.content td {
            font-size: 12px;

        }

        #homepage .desc .right table.content td.name {
            text-align: left;
            padding-left: 15px;
            font-weight: normal;
        }

        #homepage .desc .right table.content td.name1 {
            text-align: right;
            padding-left: 15px;
            padding-right: 15px;
            font-weight: normal;
        }

        #homepage .desc .right table.content td.name2 {
            text-align: center;
            padding-left: 0;
        }

        #homepage .desc .right table.content td.data {
            text-align: center;
            padding-right: 0;
            font-weight: bold;
        }

        #homepage .desc .right table.content td.unit {
            text-align: center;
            padding-left: 0;
            font-weight: bold;
        }

        #homepage .desc .right .info {
        }

        #homepage .desc .right .info p {
            font-size: 12px;
            font-style: italic;
        }

        #homepage .desc .right .list {
            list-style: none;
            margin: 0;
        }

        #homepage .desc .right .list li {
            font-size: 12px;
            padding-left: 0px;
        }

        #homepage .desc .right .right_price {
            /*float: right;*/
            /*width: 30%;*/
            display: inline-block;
            margin-left: 65%;
            font-weight: 700;
            text-align: left;
        }

        #homepage .desc .right .right_price th {
            font-weight: bold;
            text-align: left;
            padding-left: 10px;
        }

        #homepage .desc .right .right_price p {
            font-size: 13px;
        }

        #homepage .desc .right .condition {
            /*float: left;*/
            width: 100%;
            display: inline-block;
        }

        #homepage .desc .right .condition p {
            text-align: right;
            font-size: 10px;
        }

        #homepage .desc .right .right_red {

        }

        #homepage .desc .right .right_red p {
            font-size: 9px;
            color: red;
            text-align: right;
        }

        #homepage .details {
            width: 100%;
            /*margin-top: 10px;*/
            display: block;
        }

        #homepage .details .left {
            /*float: left;*/
            width: 15%;
            margin-right: 5%;
            background-color: #2a2a29;
            display: inline-block;
        }

        #homepage .details .left h2 {
            margin: 0;
            color: #fff;
            font-size: 15px;
            font-weight: 400;
            text-align: left;
            padding: 5px 0 5px 10px;
        }

        #homepage .details .right {
            /*float: right;*/
            width: 80%;
            display: inline-block;
        }

        #homepage .details .right h3 {
            margin: 0;
            font-size: 13px;
            font-weight: 400;
        }

        #homepage .payment {
            width: 100%;
            /*margin-top: 10px;*/
            display: block;
        }

        #homepage .payment .left {
            /*float: left;*/
            width: 15%;
            margin-right: 5%;
            background-color: #2a2a29;
            display: inline-block;
        }

        #homepage .payment .left h2 {
            margin: 0;
            color: #fff;
            font-size: 15px;
            font-weight: 400;
            text-align: left;
            padding: 5px 0 5px 10px;
            background-color: #F00;
        }

        #homepage .payment .right {
            /*float: right;*/
            width: 80%;
            padding-top: 0px;
            padding-bottom: 0px;
            height: auto;
            display: inline-block;
        }

        #homepage .payment .right p {
            margin: 5px 0;
            font-size: 12px;
            background-color: #333;
            text-align: center;
            color: #FFF;
        }

        #homepage .bottom_info {
            width: 100%;
            /*margin-top: 10px;*/
            display: block;
        }

        #homepage .bottom_info p {
            font-size: 10px;
        }

        #homepage table.content.products tr th {
            text-align: center;
            font-weight: bold;
        }

        #homepage table.content.products tr th.name {
            text-align: left;
            padding-left: 10px;
        }

        #homepage table.content.products tr td {
            padding: 5px 0 5px 10px;
        }

        #homepage table.content.hrr009 tr td {
            padding: 5px 10px;
        }

        .footer {
            /*float: left;*/
            width: 100%;
            height: 50px;
            margin-bottom: 1cm;;
        }


        .footer tr {
        }

        .footer tr td {
        }

        .footer tr td.left {
            background-color: #000;
            padding: 20px 0;
        }

        .footer tr td.right {
            background-color: {{$color}};
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        .name.quote {
            text-align: center;
            line-height: 24px;
            font-weight: bold;
            margin: 0;
            padding: 0;
        }

        .quote_note {
            margin-bottom: 10px;
        }


    </style>
</head>
<body>


<div id="footer">
    <table class="footer">
        <tr>
            <td class="left" width="20%">&nbsp;</td>
            <td class="right" width="80%" style="text-align: center;">{{$company_email}} • IBAN {{$iban}} •
                Swift {{$swift}}
            </td>
        </tr>
    </table>
</div>

<div id="main">
    <div id="homepage">
        <div class="header homepage_header">
            <div class="header_inner">
                <div class="logo">
                <span class="inner">
                    @if($logo_url)
                        <img
                            src="{{$logo_url}}"
                            alt="{{$client_company}}"
                        />
                    @endif
                </span>
                </div>
                <div class="info">
                    <div class="top_address">
                        <p>
                            <span style="color:#F00">Date: {{$date}}</span><br/>
                            {{$client_company}}<br>
                            {{$client_address}}, {{$client_suburb}} <br>
                            PH: {{$client_phone ?? $client_mobile}}
                        </p>
                    </div>

                    <div class="bottom_title">
                        <h2>Quotation for : [ {{$customer_firstname}} - {{$customer_address}} ]</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="client">
            <div class="left">
                <h2>Client</h2>
            </div>

            <div class="right">
                <div class="float_left">
                    <h2>{{$customer_firstname}} {{$customer_surname}} - {{$customer_company}}</h2>
                </div>
                <div class="float_right">
                    <table class="content">
                        <tr>
                            <td class="name quote">{{$title}} #{{$id}}</td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>

        <div class="job">
            <div class="left">
                <h2>Job Name</h2>
            </div>

            <div class="right">
                <h2>Job Name Here....</h2>
            </div>
        </div>


        <div class="desc">

            <div class="left">
                <h2>Description</h2>
            </div>

            <div class="right">
                @if ($quote_note)
                    <p align="left" class="quote_note">{{$quote_note}}</p>
                @endif

                <table class="content hrr009">
                    <tr>
                        <td class="name">Grinding masonry for proper waterproofing surface preparation</td>
                    </tr>
                    <tr>
                        <td class="name">Patch holes and cracks to ensure a solid substrate for the best results.</td>
                    </tr>
                </table>
                <br/>
                @if ($products)
                    <table class="content products">
                        <tr>
                            <th class="name" width="70%"><b>Product Application</b></th>
                            <th class="data" width="20%"><b>Measurement</b></th>
                            <th class="unit" width="10%"><b>Unit</b></th>
                        </tr>

                        @foreach($products as $product)
                            <tr>
                                <td class="name">• {{$product['name']}}</td>
                                <td class="data">{{$product['measurement']}}</td>
                                <td class="unit">{{$product['unit']}}</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="name1">{{$product['summary']}}</td>
                            </tr>
                        @endforeach

                    </table>
                @endif

                <div class="right_red">
                    <p>It is advised to <u>remove any breakables</u> from the work area. We use dropsheets and dust
                        prevention methods to minimise dust.<br/>Please <u>watch the video</u> in the quote email for a
                        detailed explanation.</p>
                </div>
                <br/>
                <div class="right_price">
                    <table class="content">
                        <tr>
                            <th width="80" class="name">$ {{$sub_total}}</th>
                            <th width="53" class="data">Ex {{$tax_label}}</th>
                        </tr>
                        <tr>
                            <th class="name">$ {{$tax}}</th>
                            <th class="data">{{$tax_label}}</th>
                        </tr>
                        <tr>
                            <th class="name">$ {{$total}}</th>
                            <th class="data">Inc {{$tax_label}}</th>
                        </tr>
                    </table>

                </div>

            </div>

        </div>

        <div class="details">
            <div class="left">
                <h2>Details</h2>
            </div>

            <div class="right">
                <table class="content">
                    <tr>
                        <th class="name">Photos and video of work are stored as a record.</th>
                    </tr>
                </table>
            </div>
        </div>

        <div class="payment">
            <div class="left">
                <h2>How To Pay</h2>
            </div>

            <div class="right">

                <table class="content">
                    <tr>
                        <th class="name">Account: {{$bank}} | BSB: {{$bank_branch}} | ACCT #: {{$bank_account}}
                        </th>
                    </tr>
                </table>
            </div>
        </div>

        <div class="bottom_info">
            <p>{{$payment_terms}}</p>
        </div>

    </div>

    @if($services)
        @foreach($services as $service):
        <hr/>
        <div class="inner_wrapper">
            <div class="header inner_header">
                <div class="header_inner">
                    <div class="logo">
                    <span class="inner">
                    <img
                        src="{{ get_base64_file($logo_url) }}"
                    />
                    </span>
                    </div>
                    <div class="info">
                        <div class="top_address">
                            <p>
                                <span style="color:#F00">Date: {{$date}}</span><br/>
                                {{$client_company}}<br>
                                {{$client_address}}, {{$client_suburb}} <br>
                                PH: {{$client_phone ?? $client_mobile}}
                            </p>
                        </div>

                        <div class="bottom_title">
                            <h2>{{$service->name}}</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="desc">

                <div class="left">
                    <h2>Description</h2>
                </div>

                <div class="right">
                    {!! $service->description !!}
                </div>

            </div>
        </div>
        @endforeach;
    @endif;
</div>
</body>
</html>
