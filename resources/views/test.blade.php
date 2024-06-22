<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WhatsApp Chat Button</title>
    <style>
        .whatsapp-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #25D366;
            color: white;
            border: none;
            border-radius: 50%;
            padding: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            z-index: 1000;
        }

        .whatsapp-button img {
            width: 30px;
            height: 30px;
        }
    </style>
</head>

<body>
    <h1>Hello</h1>

    <a href="https://api.whatsapp.com/send?phone=+65 6575 1226" class="whatsapp-button" target="_blank">
        <img src="https://png.pngtree.com/element_our/sm/20180626/sm_5b321c99945a2.jpg" alt="WhatsApp">
    </a>

</body>

</html>