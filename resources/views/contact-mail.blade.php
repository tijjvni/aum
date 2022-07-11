<!DOCTYPE html>
<!-- Set the language of your main document. This helps screenreaders use the proper language profile, pronunciation, and accent. -->
<html lang="en">

<head>
  <!-- The title is useful for screenreaders reading a document. Use your sender name or subject line. -->
  <title>Contact Message</title>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <!-- Never disable zoom behavior! Fine to set the initial width and scale, but allow users to set their own zoom preferences. -->

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://aum.edu.ng/css/app.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <style type="text/css">
    /* CLIENT-SPECIFIC STYLES */
    body,
    table,
    td,
    a {
      -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
    }

    table,
    td {
      mso-table-lspace: 0pt;
      mso-table-rspace: 0pt;
    }

    img {
      -ms-interpolation-mode: bicubic;
    }

    /* RESET STYLES */
    img {
      border: 0;
      height: auto;
      line-height: 100%;
      outline: none;
      text-decoration: none;
    }

    table {
      border-collapse: collapse !important;
    }

    body {
      height: 100% !important;
      /* margin: 0 !important;
            padding: 0 !important; */
      width: 100% !important;
    }

    /* iOS BLUE LINKS */
    a[x-apple-data-detectors] {
      color: inherit !important;
      text-decoration: none !important;
      font-size: inherit !important;
      font-family: inherit !important;
      font-weight: inherit !important;
      line-height: inherit !important;
    }

    /* GMAIL BLUE LINKS */
    u+#body a {
      color: inherit;
      text-decoration: none;
      font-size: inherit;
      font-family: inherit;
      font-weight: inherit;
      line-height: inherit;
    }

    /* SAMSUNG MAIL BLUE LINKS */
    #MessageViewBody a {
      color: inherit;
      text-decoration: none;
      font-size: inherit;
      font-family: inherit;
      font-weight: inherit;
      line-height: inherit;
    }

    /* These rules set the link and hover states, making it clear that links are, in fact, links. */
    /* Embrace established conventions like underlines on links to keep emails accessible. */
    a {
      color: #B200FD;
      font-weight: 600;
      text-decoration: underline;
    }

    a:hover {
      color: #000000 !important;
      text-decoration: none !important;
    }

    /* These rules adjust styles for desktop devices, keeping the email responsive for users. */
    /* Some email clients don't properly apply media query-based styles, which is why we go mobile-first. */
    @media screen and (min-width:600px) {
      h1 {
        font-size: 48px !important;
        line-height: 48px !important;
      }

      .intro {
        font-size: 24px !important;
        line-height: 36px !important;
      }
    }

  </style>

</head>

<body style="margin: 0 !important; padding: 0 !important; border" class="flex flex-col items-center py-4 ">
  <div role="article" aria-label="An email from Your Al-Ansar University" lang="en"
    class="p-4 bg-gray-200 border shadow-sm">

    <!-- Logo section and header. Headers are useful landmark elements. -->
    <header>
      <!-- Since this is a purely decorative image, we can leave the alternative text blank. -->
      <!-- Linking images also helps with Gmail displaying download links next to them. -->
      <a href="http://aum.edu.ng" target="_blank">
        <center><img src="http://aum.edu.ng/img/brand.png" alt="" height="80" width="80"></center>
      </a>
      <!-- The h1 is the main heading of the document and should come first. -->
      <!-- We can override the default styles inline. -->
      <h1 class="my-4 text-lg font-medium text-green-600">
        Message from {{ $data->name }}<br>
      </h1>
    </header>

    <!-- Main content section. Main is a useful landmark element. -->
    <main>
      <!-- Article elements can be used to section individual articles in an email. -->

      <div>
        <h3 class="my-2 text-xl text-purple-500 font-momo">
          The contents of the message is as follows
        </h3>
        <p class="p-1 m-0">
          <span class="text-xl font-medium text-black">Name:</span> {{ $data->name ?? '' }}
        </p>
        <p class="p-1 m-0">
          <span class="text-xl font-medium text-black">Email:</span> {{ $data->email ?? '' }}
        </p>
        <p class="p-1 m-0">
          <span class="text-xl font-medium text-black">Message:</span> {{ $data->message ?? '' }}
        </p>
      </div>
    </main>
  </div>

</body>

</html>
