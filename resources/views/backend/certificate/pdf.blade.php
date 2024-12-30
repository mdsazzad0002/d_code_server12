<!DOCTYPE html>
<html>
<head>
    <style type='text/css'>
        body,
        html {
            margin: 0;
            padding: 0;
        }

        body {
            color: black;
            display: table;
            font-family: Georgia, serif;
            font-size: 24px;
            text-align: center;
        }

        .container {
            border: 20px solid tan;
            width: 750px;
            height: auto;
            padding: 20px;
            display: inline-block;
            text-align: left;
        }

        .logo {
            color: tan;
            text-align: center;
        }

        .marquee {
            color: tan;
            font-size: 48px;
            margin: 20px;
            text-align: center;
        }

        .assignment {
            margin: 20px;
            text-align: center;
        }

        .details {
            margin: 10px 0;
            line-height: 1.8;
            font-size: 20px;
        }

        .person {
            border-bottom: 2px solid black;
            font-size: 32px;
            font-style: italic;
            margin: 20px auto;
            text-align: center;
            width: 400px;
        }

        .reason {
            margin: 20px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="logo">
            An Organization
        </div>

        <div class="marquee">
            Certificate of Completion
        </div>

        <div class="assignment">
            This certificate is presented to
        </div>

        <div class="person">
            {{ $certificate->name }}
        </div>

        <div class="details">
            <strong>Father's Name:</strong> {{ $certificate->father_name }}<br />
            <strong>Mother's Name:</strong> {{ $certificate->mother_name }}<br />
            <strong>Gender:</strong> {{ $certificate->gender == 1 ? 'Male' : 'Female' }}<br />
            <strong>Registration No:</strong> {{ $certificate->reg_no }}<br />
            <strong>Course Name:</strong> {{ $certificate->course }}<br />
        </div>

        <div class="reason">
            For deftly defying the laws of gravity<br />and flying high
        </div>
    </div>
</body>

</html>


