<!DOCTYPE html>
<html>
<head>
    <title>{{ $data['subject'] }}</title>
</head>

<body style="margin:0; padding:0; background:#f1f3f4; font-family:Arial, sans-serif;">

    <div style="padding:40px 0;">

        <div style="
            max-width:700px;
            background:#ffffff;
            margin:auto;
            border:1px solid #dadce0;
            border-radius:8px;
            overflow:hidden;
        ">


            <!-- Subject -->
            <div style="padding:30px;">

                <p style="
                    color:#5f6368;
                    font-size:13px;
                    letter-spacing:1px;
                    margin-bottom:10px;
                    text-transform:uppercase;
                ">
                    Message
                </p>

                <h3 style="
                    margin-top:0;
                    color:#202124;
                    font-size:24px;
                    font-weight:500;
                ">
                    {{ $data['subject'] }}
                </h3>

                <!-- Message -->
                <div style="
                    margin-top:30px;
                    font-size:16px;
                    color:#3c4043;
                    line-height:30px;
                ">
                    {{ $data['message'] }}
                </div>

            </div>

        </div>

    </div>

</body>
</html>