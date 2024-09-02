<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Monitoring Stock Minimum NTE Telkom</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: Arial, sans-serif;
        }

        .block-background {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
        }

        .block-background video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .block-background__overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.45);
        }

        .block-layout {
            display: grid;
            grid-template-rows: 1fr auto auto auto 1fr;
            grid-template-columns: 1fr 8fr 1fr;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            padding: 0 16px;
            box-sizing: border-box;
            z-index: 2;
        }

        .layout-element {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .text-box h1 {
            color: #ffffff;
            text-align: center;
        }

        .text-box p {
            color: #ffffff;
            text-align: center;
        }

        .grid-button {
            font-size: 16px;
            font-weight: 500;
            border-radius: 28px;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin: 10px;
            border: 1px solid #ffffff;
            color: #ffffff;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .grid-button:hover {
            background-color: #ffffff;
            color: #000000;
        }
    </style>
</head>
<body>

    <div class="block-background">
        <video src="https://videos.pexels.com/video-files/6799742/6799742-uhd_2160_3840_30fps.mp4" autoplay muted loop playsinline poster="https://images.pexels.com/videos/6799742/adult-analysis-analyze-analyzing-6799742.jpeg?auto=compress&amp;cs=tinysrgb&amp;fit=crop&amp;h=1200&amp;w=630"></video>
        <div class="block-background__overlay"></div>
    </div>

    <div class="block-layout">
        <div class="layout-element" style="grid-row: 2 / 3; grid-column: 1 / 8;">
            <div class="text-box">
                <h1>Aplikasi Monitoring Stock Minimum NTE Telkom</h1>
            </div>
        </div>
        <div class="layout-element" style="grid-row: 4 / 5; grid-column: 1 / 8;">
            <div class="text-box">
                <p>Solusi terbaik untuk memonitor kebutuhan NTE di Telkom Regional dengan efisien.</p>
            </div>
        </div>
        <div class="layout-element" style="grid-row: 2 / 10; grid-column: 1/3;">
            <a href="#" class="grid-button">Mulai</a>
        </div>
        <div class="layout-element" style="grid-row: 2 / 10; grid-column: 2/3;">
            <a href="#" class="grid-button">Cek</a>
        </div>
    </div>

</body>
</html>
