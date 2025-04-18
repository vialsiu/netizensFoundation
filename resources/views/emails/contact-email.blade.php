<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Message</title>
    <style>
        /* Reset styles */
        body {
            margin: 0;
            padding: 0;
            min-width: 100%;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
        }

        table {
            border-spacing: 0;
        }

        td {
            padding: 0;
        }

        img {
            border: 0;
        }

        /* Main styles */
        .wrapper {
            width: 100%;
            background-color: #f6f6f6;
            padding: 40px 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        .header {
            background: linear-gradient(135deg, #6366f1 0%, #beccdc 100%);
            padding: 32px;
            text-align: center;
        }

        .header-title {
            color: #ffffff;
            font-size: 24px;
            font-weight: 600;
            margin: 0;
        }

        .content {
            padding: 40px 32px;
        }

        .message-card {
            background: #f8fafc;
            border-radius: 8px;
            padding: 24px;
            margin-top: 24px;
        }

        .detail-item {
            margin-bottom: 16px;
        }

        .detail-label {
            color: #64748b;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 4px;
        }

        .detail-value {
            color: #0f172a;
            font-size: 16px;
            line-height: 1.5;
        }

        .footer {
            background: #f8fafc;
            padding: 24px 32px;
            text-align: center;
        }

        .social-links {
            margin-top: 16px;
        }

        .social-link {
            display: inline-block;
            margin: 0 8px;
        }

        @media screen and (max-width: 600px) {
            .container {
                margin: 0 16px;
            }

            .content {
                padding: 32px 24px;
            }
        }
    </style>
</head>
<body>
<div class="wrapper">
    <div class="container">
        <div class="header">
            <h1 class="header-title">New Message Received</h1>
        </div>

        <div class="content">
            <p style="margin: 0 0 24px; color: #475569; line-height: 1.6;">
                You've received a new message from your website contact form. Here are the details:
            </p>

            <div class="message-card">
                <div class="detail-item">
                    <div class="detail-label">From</div>
                    <div class="detail-value">{{ $mailData['name'] }} &lt;{{ $mailData['email'] }}&gt;</div>
                </div>

                <div class="detail-item">
                    <div class="detail-label">Subject</div>
                    <div class="detail-value">{{ $mailData['subject'] }}</div>
                </div>

                <div class="detail-item">
                    <div class="detail-label">Message</div>
                    <div class="detail-value" style="white-space: pre-line;">{{ $mailData['message'] }}</div>
                </div>
            </div>
        </div>

        <div class="footer">
            <p style="margin: 0; color: #64748b; font-size: 14px;">
                Sent from <a href="{{ url('/') }}"
                             style="color: #6366f1; text-decoration: none;">{{ config('app.name') }}</a>
            </p>
            <div class="social-links">
                <a href="#" class="social-link">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M23 3.00005C22.0424 3.67552 20.9821 4.19216 19.86 4.53005C19.2577 3.83756 18.4573 3.34674 17.567 3.12397C16.6767 2.90121 15.7395 2.95724 14.8821 3.2845C14.0247 3.61176 13.2884 4.19445 12.773 4.95376C12.2575 5.71308 11.9877 6.61238 12 7.53005V8.53005C10.2426 8.57561 8.50127 8.18586 6.93101 7.39549C5.36074 6.60513 4.01032 5.43868 3 4.00005C3 4.00005 -1 13 8 17C5.94053 18.398 3.48716 19.099 1 19C10 24 21 19 21 7.50005C20.9991 7.2215 20.9723 6.94364 20.92 6.67005C21.9406 5.66354 22.6608 4.39276 23 3.00005Z"
                            fill="#64748b"/>
                    </svg>
                </a>
                <a href="#" class="social-link">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 0C8.74 0 8.333 0.014 7.053 0.072C5.775 0.131 4.902 0.333 4.14 0.63C3.366 0.932 2.681 1.355 2.052 1.923C1.482 2.551 1.061 3.235 0.757 4.009C0.459 4.77 0.257 5.642 0.198 6.921C0.141 8.199 0 8.61 0 12C0 15.26 0.014 15.666 0.072 16.947C0.131 18.225 0.333 19.098 0.63 19.86C0.932 20.634 1.355 21.319 1.923 21.948C2.551 22.518 3.235 22.939 4.009 23.243C4.77 23.541 5.642 23.743 6.921 23.802C8.201 23.86 8.61 24 12 24C15.26 24 15.666 23.986 16.947 23.928C18.225 23.869 19.098 23.667 19.86 23.37C20.634 23.068 21.319 22.645 21.948 22.077C22.518 21.449 22.939 20.765 23.243 19.991C23.541 19.23 23.743 18.358 23.802 17.079C23.86 15.799 24 15.39 24 12C24 8.74 23.986 8.334 23.928 7.053C23.869 5.775 23.667 4.902 23.37 4.14C23.068 3.366 22.645 2.681 22.077 2.052C21.449 1.482 20.765 1.061 19.991 0.757C19.23 0.459 18.358 0.257 17.079 0.198C15.799 0.139 15.39 0 12 0ZM12 2.16C15.203 2.16 15.585 2.172 16.85 2.23C18.021 2.283 18.668 2.48 19.078 2.64C19.688 2.884 20.12 3.174 20.565 3.62C21.01 4.065 21.299 4.497 21.543 5.107C21.703 5.517 21.9 6.164 21.953 7.335C22.01 8.6 22.022 8.983 22.022 12.184C22.022 15.387 22.01 15.768 21.953 17.033C21.9 18.204 21.703 18.851 21.543 19.261C21.299 19.871 21.01 20.303 20.565 20.748C20.12 21.193 19.688 21.482 19.078 21.726C18.668 21.886 18.021 22.083 16.85 22.136C15.585 22.193 15.203 22.205 12 22.205C8.797 22.205 8.415 22.193 7.15 22.136C5.979 22.083 5.332 21.886 4.922 21.726C4.312 21.482 3.88 21.193 3.435 20.748C2.99 20.303 2.701 19.871 2.457 19.261C2.297 18.851 2.1 18.204 2.047 17.033C1.99 15.768 1.978 15.387 1.978 12.184C1.978 8.981 1.99 8.599 2.047 7.334C2.1 6.163 2.297 5.516 2.457 5.106C2.701 4.496 2.99 4.064 3.435 3.619C3.88 3.174 4.312 2.885 4.922 2.641C5.332 2.481 5.979 2.284 7.15 2.231C8.415 2.174 8.797 2.162 12 2.162V2.16ZM12 5.8C8.465 5.8 5.6 8.663 5.6 12.2C5.6 15.737 8.465 18.6 12 18.6C15.535 18.6 18.4 15.737 18.4 12.2C18.4 8.663 15.535 5.8 12 5.8ZM12 16.4C9.79 16.4 8 14.61 8 12.4C8 10.19 9.79 8.4 12 8.4C14.21 8.4 16 10.19 16 12.4C16 14.61 14.21 16.4 12 16.4ZM18.406 4.6C18.406 5.463 17.703 6.166 16.84 6.166C15.977 6.166 15.274 5.463 15.274 4.6C15.274 3.737 15.977 3.034 16.84 3.034C17.703 3.034 18.406 3.737 18.406 4.6Z"
                            fill="#64748b"/>
                    </svg>
                </a>
            </div>
            <p style="margin: 16px 0 0; color: #94a3b8; font-size: 12px;">
                © {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
            </p>
        </div>
    </div>
</div>
</body>
</html>
