<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
</head>

<body style="margin:0; padding:0; background-color:#f4f4f4; font-family:Arial, Helvetica, sans-serif;">

    <table width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#f4f4f4">
        <tr>
            <td align="center" style="padding:40px 15px;">

                <!-- Main Container -->
                <table width="600" cellpadding="0" cellspacing="0" border="0"
                    style="background:#ffffff; border-radius:12px; overflow:hidden; box-shadow:0 5px 20px rgba(0,0,0,0.1);">

                    <!-- Header -->
                    <tr>
                        <td align="center"
                            style="background:linear-gradient(135deg,#0f172a,#1e293b); padding:40px 20px;">

                            <h1 style="color:#ffffff; margin:0; font-size:28px;">
                                Your Company Name
                            </h1>

                            <p style="color:#cbd5e1; margin-top:10px; font-size:14px;">
                                Secure Password Reset Request
                            </p>

                        </td>
                    </tr>

                    <!-- Content -->
                    <tr>
                        <td style="padding:40px 35px; color:#334155;">

                            <h2 style="margin-top:0; color:#0f172a;">
                                Reset Your Password
                            </h2>

                            <p style="font-size:16px; line-height:1.7;">
                                Hello,
                            </p>

                            <p style="font-size:16px; line-height:1.7;">
                                We received a request to reset your password. Click the button below to create a new password for your account.
                            </p>

                            <!-- Button -->
                            <table cellpadding="0" cellspacing="0" border="0" align="center" style="margin:35px auto;">
                                <tr>
                                    <td align="center" bgcolor="#0d6efd" style="border-radius:8px;">

                                        <a href="{{ $url }}"
                                           style="display:inline-block;
                                                  padding:14px 30px;
                                                  color:#ffffff;
                                                  text-decoration:none;
                                                  font-size:16px;
                                                  font-weight:bold;">
                                            Reset Password
                                        </a>

                                    </td>
                                </tr>
                            </table>

                            <p style="font-size:15px; line-height:1.7;">
                                This password reset link will expire in <strong>60 minutes</strong>.
                            </p>

                            <p style="font-size:15px; line-height:1.7;">
                                If you did not request a password reset, please ignore this email. Your account remains secure.
                            </p>

                            <hr style="border:none; border-top:1px solid #e2e8f0; margin:30px 0;">

                            <p style="font-size:14px; color:#64748b;">
                                Regards,<br>
                                <strong>Your Company Name</strong>
                            </p>

                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td align="center"
                            style="background:#f8fafc; padding:20px; font-size:13px; color:#94a3b8;">

                            © {{ date('Y') }} Your Company Name. All rights reserved.

                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>

</body>
</html>