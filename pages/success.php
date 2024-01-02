<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thank You</title>
  <style>
    body,
    html {
      height: 100%;
      margin: 0;
      font-family: Arial, sans-serif;
    }

    .thank-you-page {
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      flex-direction: column;
      height: 100%;
      background-color: #f2f2f2;
    }

    .thank-you-message {
      max-width: 600px;
      margin: auto;
      background-color: #fff;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .thank-you-message h1 {
      color: #194a7a;
      margin-bottom: 20px;
    }

    .thank-you-message p {
      margin-bottom: 30px;
      color: #666;
    }

    .button {
      padding: 10px 20px;
      background-color: #194a7a;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    .button:hover {
      background-color: #476f95;
    }
  </style>
</head>

<body>

  <div class="thank-you-page">
    <div class="thank-you-message">
      <h1>Thank You!</h1>
      <p>Your order was successful. Click below to download your ticket receipt.</p>
      <?php 
        session_start();
        $pdf_path = $_SESSION['pdf_path'];
      ?>
      <a href="<?php echo $pdf_path; ?>" target="_blank" class="button">Download Receipt</a>
    </div>
  </div>

</body>

</html>