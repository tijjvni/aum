<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <title>{{ $title ?? 'Reports' }}</title>

  <style>
    .flex {
      display: flex;
    }

    *,
    ::before,
    ::after {
      box-sizing: border-box;
      /* 1 */
      border-width: 0;
      /* 2 */
      border-style: solid;
      /* 2 */
      border-color: #e5e7eb;
      /* 2 */
    }

    html {
      line-height: 1.5;
      /* 1 */
      -webkit-text-size-adjust: 100%;
      /* 2 */
      -moz-tab-size: 4;
      /* 3 */
      -o-tab-size: 4;
      tab-size: 4;
      /* 3 */
    }

    body {
      font-family: 'Fira Sans', sans-serif;
    }

    header {
      background-color: #E4EEFA;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .justify-between {
      justify-content: space-between;
    }

    .items-center {
      align-items: center;
    }

    .text-center {
      text-align: center;
    }

    .max-w-xs {
      max-width: 320px;
    }

    .text-primary {
      color: #003973;
    }

    footer {
      color: white;
      background-color: #003973;
    }

    .rounded-full {
      border-radius: 50%;
    }

    .p-4 {
      padding: 12px;
    }

    .bg-primary {
      background-color: #003973;
    }

    .relative {
      position: relative;
    }

    .absolute {
      position: absolute;
    }

    .font-medium {
      font-weight: 500 !important;
    }

    .capitalize {
      text-transform: capitalize;
    }

    .italic {
      font-style: italic;
    }

    .text-secondary {
      color: #FA7800;
    }

    .text-lg {
      font-size: 20px;
    }

    .text-2xl {
      font-size: 1.5rem;
      line-height: 2rem;
    }

    .text-xl {
      font-size: 20px;
      line-height: 1.75rem;
    }

    .m-0 {
      margin: 0px !important;
    }

    .z-20 {
      z-index: 20;
    }

    .m-4 {
      margin: 4px;
    }

    .w-full {
      width: 100%;
    }

    .right-0 {
      right: 0;
      bottom: 0;
    }

    .block {
      display: block;
      margin-left: auto;
      margin-right: auto;
    }

    .w-24 {
      width: 6rem;
    }

    .h-32,
    .w-32 {
      height: 8rem;
      width: 8rem;
    }

    .opacity-30 {
      opacity: 30%;
    }

    .shadow {
      box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.2);
    }

    .justify-center {
      justify-content: center;
    }

    thead {
      background-color: #003973 !important;
      color: white !important;
      font-weight: 500 !important;
    }

    table,
    th,
    tr,
    td {
      border: none !important;
    }

    th,
    td {
      padding: 8px;
      text-align: left;
    }
  </style>
</head>

<body class="font-fira">
  {{-- <div class="relative mx-auto max-w-7xl">
    <header class="flex items-center justify-between w-full p-4 m-0 ">
      <img src="{{ asset('img/logo2.png') }}" alt="{{ env('APP_NAME') }}" class="w-24">
      <div class="max-w-xs text-center">
        <p class="text-xl font-medium uppercase text-primary">AL-ANSER CENTER FOR COMPREHENSIVE EDUCATION</p>
        <p class="italic capitalize text-secondary">inspiring excellence</p>
      </div>
    </header>
    <div class="flex items-center justify-between w-full p-4 m-0">
      <p class="text-2xl font-medium">Staff Report</p>
      <div class="font-medium text-center">
        <p>Generated on <br>{{ date('d M, Y') }}</p>
      </div>
    </div>
    <table class="w-full"></table>


    <div
      class="absolute bottom-0 right-0 z-20 flex items-center w-32 h-32 m-4 rounded-full shadow opacity-30 bg-background">
      <img src="{{ asset('img/logo2.png') }}" alt="{{ env('APP_NAME') }}"
        class="block w-24 mx-auto backdrop-blur-0 filter">
    </div>
    <table class="w-full">
      <thead>
        <tr class="w-full">
          <th>Name</th>
          <th>Staff</th>
          <th>Position</th>
          <th>Email</th>
          <th>Phone</th>
        </tr>
      </thead>
      <tbody>

      </tbody>
    </table>

    <footer class="p-4 footer">

    </footer>
  </div> --}}
  <div class="flex justify-center items-center h-full w-screen">
    <div class="bg-white"></div>
  </div>
</body>

</html>
