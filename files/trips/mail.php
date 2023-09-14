<?php
require_once '../conf/connect.php';
$ref = $_GET['ref'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$trip_id = $_GET['trip_id'];
$trip = $_GET['trip'];
$succes = '';
// Extract the name from the email address
$name = strstr($email, '@', true);

$to = $email;
$message = '
<head>

  <style type="text/css">
    @media only screen and (min-width: 620px) {
      .u-row {
        width: 600px !important;
      }

      .u-row .u-col {
        vertical-align: top;
      }

      .u-row .u-col-100 {
        width: 600px !important;
      }

    }

    @media (max-width: 620px) {
      .u-row-container {
        max-width: 100% !important;
        padding-left: 0px !important;
        padding-right: 0px !important;
      }

      .u-row .u-col {
        min-width: 320px !important;
        max-width: 100% !important;
        display: block !important;
      }

      .u-row {
        width: 100% !important;
      }

      .u-col {
        width: 100% !important;
      }

      .u-col>div {
        margin: 0 auto;
      }
    }

    body {
      margin: 0;
      padding: 0;
    }

    table,
    tr,
    td {
      vertical-align: top;
      border-collapse: collapse;
    }

    p {
      margin: 0;
    }

    .ie-container table,
    .mso-container table {
      table-layout: fixed;
    }

    * {
      line-height: inherit;
    }

    a[x-apple-data-detectors="true"] {
      color: inherit !important;
      text-decoration: none !important;
    }

    table,
    td {
      color: #000000;
    }

    #u_body a {
      color: #0000ee;
      text-decoration: underline;
    }

    @media (max-width: 480px) {
      #u_content_image_1 .v-container-padding-padding {
        padding: 30px 10px 10px !important;
      }

      #u_content_image_1 .v-src-width {
        width: auto !important;
      }

      #u_content_image_1 .v-src-max-width {
        max-width: 64% !important;
      }

      #u_content_heading_2 .v-container-padding-padding {
        padding: 30px 10px !important;
      }

      #u_content_heading_2 .v-font-size {
        font-size: 24px !important;
      }

      #u_content_heading_1 .v-container-padding-padding {
        padding: 40px 10px 10px !important;
      }

      #u_content_text_3 .v-container-padding-padding {
        padding: 0px 10px 10px !important;
      }

      #u_content_text_4 .v-container-padding-padding {
        padding: 10px 10px 40px !important;
      }

      #u_content_text_8 .v-container-padding-padding {
        padding: 10px 10px 30px !important;
      }

      #u_content_text_9 .v-container-padding-padding {
        padding: 30px 10px !important;
      }
    }
  </style>



  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet" type="text/css">

</head>

<body class="clean-body u_body"
  style="margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #ecf0f1;color: #000000">

  <table id="u_body"
    style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 320px;Margin: 0 auto;background-color: #ecf0f1;width:100%"
    cellpadding="0" cellspacing="0">
    <tbody>
      <tr style="vertical-align: top">
        <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">


          <div class="u-row-container" style="padding: 0px;background-color: transparent">
            <div class="u-row"
              style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
              <div
                style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">
                <div class="u-col u-col-100"
                  style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                  <div style="background-color: #000000;height: 100%;width: 100% !important;">
                    <div
                      style="height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">


                      <table id="u_content_image_1" style="font-family:Open Sans,sans-serif;" role="presentation"
                        cellpadding="0" cellspacing="0" width="100%" border="0">
                        <tbody>
                          <tr>
                            <td
                              style="overflow-wrap:break-word;word-break:break-word;padding:0px 0px 0px 0px;font-family:Open Sans,sans-serif;"
                              align="left">

                              <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                  <td style="padding-right: 0px;padding-left: 0px;" align="center">
                                    <a href="https://exploremorocco4x4.com" title="Facebook"
                                      target="_blank">
                                      <img align="center" border="0"
                                        src="https://exploremorocco4x4.com/files/trips/images/explore.png" alt="image"
                                        title="image"
                                        style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 100%;max-width: 100%;"
                                        width="100%" class="v-src-width v-src-max-width" />
                                    </a>
                                  </td>
                                </tr>
                              </table>

                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>



          <div class="u-row-container" style="padding: 0px;background-color: transparent">
            <div class="u-row"
              style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
              <div
                style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">
                <div class="u-col u-col-100"
                  style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                  <div
                    style="background-color: #f8f7f7;height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">

                    <div
                      style="height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
                      <table id="u_content_heading_1" style="font-family:Open Sans,sans-serif;" role="presentation"
                        cellpadding="0" cellspacing="0" width="100%" border="0">
                        <tbody>
                          <tr>
                            <td class="v-container-padding-padding"
                              style="overflow-wrap:break-word;word-break:break-word;padding:60px 10px 15px 50px;font-family:Open Sans,sans-serif;"
                              align="left">

                              <h1 class="v-font-size"
                                style="margin: 0px; color: #385cdf; line-height: 120%; text-align: left; word-wrap: break-word; font-weight: normal; font-family: Open Sans,sans-serif; font-size: 35px;">
                                <strong>Your reservation is now complete.</strong>
                              </h1>

                            </td>
                          </tr>
                        </tbody>
                      </table>

                      <table id="u_content_text_3" style="font-family:Open Sans,sans-serif;" role="presentation"
                        cellpadding="0" cellspacing="0" width="100%" border="0">
                        <tbody>
                          <tr>
                            <td class="v-container-padding-padding"
                              style="overflow-wrap:break-word;word-break:break-word;padding:0px 50px 30px;font-family:Open Sans,sans-serif;"
                              align="left">

                              <div style="line-height: 160%; text-align: justify; word-wrap: break-word;">
                                <p style="line-height: 160%; font-size: 14px;"><span
                                    style="font-family:Open Sans, sans-serif; font-size: 14px; line-height: 22.4px;">
                                    Dear <strong> ' . $name . ' </strong>
                                  </span></p>
                                <p style="line-height: 160%; font-size: 14px;">
                                  Thank you for booking your trip  <strong> ' . $trip . ' </strong>.
                                </p>
                                <p style="line-height: 160%; font-size: 14px;"><span
                                    style="font-family: Open Sans, sans-serif; font-size: 14px; line-height: 22.4px;color:black">
                                    We are excited to welcome you to our beautiful country and to show you all that it
                                    has to offer.
                                  </span></p>
                              </div>

                            </td>
                          </tr>
                        </tbody>
                      </table>

                      <table id="u_content_text_4" style="font-family:Open Sans,sans-serif;" role="presentation"
                        cellpadding="0" cellspacing="0" width="100%" border="0">
                        <tbody>
                          <tr>
                            <td class="v-container-padding-padding"
                              style="overflow-wrap:break-word;word-break:break-word;padding:30px 10px 40px 50px;font-family:Open Sans,sans-serif;"
                              align="left">

                              <div style="line-height: 160%; text-align: left; word-wrap: break-word;">
                                <p style="font-size: 14px; line-height: 160%;">Just reply if you have any question.</p>
                                <p style="font-size: 14px; line-height: 160%;">Best regards,</p>
                                <p style="font-size: 14px; line-height: 160%;">Explore Morocco.</p>
                              </div>

                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>



          <div class="u-row-container" style="padding: 0px;background-color: transparent">
            <div class="u-row"
              style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
              <div
                style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">
                <div class="u-col u-col-100"
                  style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                  <div
                    style="height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">

                    <div
                      style="height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">

                      <table style="font-family:Open Sans,sans-serif;" role="presentation" cellpadding="0"
                        cellspacing="0" width="100%" border="0">
                        <tbody>
                          <tr>
                            <td class="v-container-padding-padding"
                              style="overflow-wrap:break-word;word-break:break-word;padding:60px 10px 10px;font-family:Open Sans,sans-serif;"
                              align="left">

                              <div align="center">
                                <div style="display: table; max-width:167px;">
                                  <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32"
                                    style="width: 32px !important;height: 32px !important;display: inline-block;border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 10px">
                                    <tbody>
                                      <tr style="vertical-align: top">
                                        <td align="left" valign="middle"
                                          style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                                          <a href="https://www.facebook.com/moroccan_explorers" title="Facebook"
                                            target="_blank">
                                            <img src="https://exploremorocco4x4.com/files/trips/images/fb.png"
                                              alt="Facebook" title="Facebook" width="32"
                                              style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important">
                                          </a>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                  <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32"
                                    style="width: 32px !important;height: 32px !important;display: inline-block;border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 0px">
                                    <tbody>
                                      <tr style="vertical-align: top">
                                        <td align="left" valign="middle"
                                          style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                                          <a href="https://www.instagram.com/moroccan_explorers/" title="Instagram"
                                            target="_blank">
                                            <img src="https://exploremorocco4x4.com/files/trips/images/insta.png"
                                              alt="Instagram" title="Instagram" width="32"
                                              style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important">
                                          </a>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="u-row-container" style="padding: 0px;background-color: #ffffff">
            <div class="u-row"
              style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
              <div
                style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">
                <div class="u-col u-col-100"
                  style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                  <div
                    style="height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">

                    <div
                      style="height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">


                      <table id="u_content_text_9" style="font-family:Open Sans,sans-serif;" role="presentation"
                        cellpadding="0" cellspacing="0" width="100%" border="0">
                        <tbody>
                          <tr>
                            <td class="v-container-padding-padding"
                              style="overflow-wrap:break-word;word-break:break-word;padding:30px 60px;font-family:Open Sans,sans-serif;"
                              align="left">

                              <div
                                style="color: #000000; line-height: 140%; text-align: center; word-wrap: break-word;">
                                <p style="font-size: 14px; line-height: 140%;"><span
                                    style="text-decoration: underline; font-size: 14px; line-height: 19.6px;">
                                    Please let us know if you have any questions or need to make any changes to your
                                    reservation.
                                  </span></p>
                              </div>

                            </td>
                          </tr>
                        </tbody>
                      </table>


                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </td>
      </tr>
    </tbody>
  </table>
</body>
';
// $headers = "MIME-Version: 1.0" . "\r\n";
// $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$subject = "New Resrvation email :";
$headers = array(
  'From' => 'Exploremorocco4x4.com',
  'Content-Type' => 'text/html;charset=UTF-8' . '\r\n'
);


// // to the client
mail($to, $subject, $message, $headers);


// let's add the trip to reservation table
$currentHour = date("h");
$currentMinute = date("i");
$currentSecone = date("s");
$currentDateHour = $currentHour . ':' . $currentMinute . ':' . $currentSecone;

$insert = $db->query("INSERT into reservation 
( 
    email,
    phone,
    trip,
    created_date,
    created_hour
)
VALUES 
(
    '$email',
    '$phone',
    '$trip',
     NOW(),
    '$currentDateHour'
)
    ");





function send_whatsapp($message = "Test", $phone_number)
{
  $phone_n = $phone_number;
  $apikey = "738507";       // Enter your personal apikey received in step 3 above

  $url = 'https://api.callmebot.com/whatsapp.php?source=php&phone=' . $phone_n . '&text=' . urlencode($message) . '&apikey=' . $apikey;

  if ($ch = curl_init($url)) {
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $html = curl_exec($ch);
    $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    // echo "Output:".$html;  // you can print the output for troubleshooting
    curl_close($ch);
    return (int) $status;
  } else {
    return false;
  }
}

// to the company
$text = '*You have a new reservation :* \n*Phone :* ' . $phone . ' \n*Email  :* ' . $email . ' \n*Trip    :* ' . $trip;
$company_phone = "+212608731353";
send_whatsapp($text, $company_phone);
// email for the company

$to = "mustaphaharmouch1972@gmail.com";
$subject = "New Resrvation email :";
$headers = array(
  'From' => 'exploremorocco4x4.com',
  'Content-Type' => 'text/plain'
);

mail($to, $subject, $text, $headers);



$succes = 'Your reservation has been successfully processed.We sent a verification email to the address you submitted We look forward to seeing you soon ';
if (isset($ref)) {
  header("location: ./special?succes=" . $succes . "&trip_id=" . $trip_id);
}
else {
  header("location: trip.php?succes=" . $succes . "&trip_id=" . $trip_id);
}
