<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-image: url('背景.jpg');
            background-size: cover;
            background-attachment: fixed;
        }

        /* Add custom style to position the button */
        #Button1 {
            position: absolute;
            top: 4%;
            left: 14%;
            cursor: pointer;
        }

        #Button2 {
            position: absolute;
            top: 4%;
            left: 19.5%;
            cursor: pointer;
        }

        #Button3 {
            position: absolute;
            top: 7%;
            left: 26%;
            cursor: pointer;
        }

        #Button4 {
            position: absolute;
            top: 13.5%;
            left: 34.5%;
            cursor: pointer;
        }

        #Button5 {
            position: absolute;
            top: 26%;
            left: 57%;
            cursor: pointer;
        }

        #Button6 {
            position: absolute;
            top: 70.5%;
            left: 70%;
            cursor: pointer;
        }

        #Button7 {
            position: absolute;
            top: 62.5%;
            left: 77.5%;
            cursor: pointer;
        }

        #Button8 {
            position: absolute;
            top: 55%;
            left: 84%;
            cursor: pointer;
        }

        #Button9 {
            position: absolute;
            top: 45%;
            left: 91.5%;
            cursor: pointer;
        }

        .button-container {
            position: absolute;
            top: 1.2%;
            left: 83%;
            cursor: pointer;
        }
        .logout-container {
            position: fixed;
            top: 0;
            right: 0;
            padding: 10px;
        }
    </style>
</head>

<body>
    <!-- Button trigger modal -->
    <img id="Button1" src="座標.png" alt="Open Modal" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
    <img id="Button2" src="座標.png" alt="Open Modal" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
    <img id="Button3" src="座標.png" alt="Open Modal" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
    <img id="Button4" src="座標.png" alt="Open Modal" data-bs-toggle="modal" data-bs-target="#staticBackdrop4">
    <img id="Button5" src="座標.png" alt="Open Modal" data-bs-toggle="modal" data-bs-target="#staticBackdrop5">
    <img id="Button6" src="座標.png" alt="Open Modal" data-bs-toggle="modal" data-bs-target="#staticBackdrop6">
    <img id="Button7" src="座標.png" alt="Open Modal" data-bs-toggle="modal" data-bs-target="#staticBackdrop7">
    <img id="Button8" src="座標.png" alt="Open Modal" data-bs-toggle="modal" data-bs-target="#staticBackdrop8">
    <img id="Button9" src="座標.png" alt="Open Modal" data-bs-toggle="modal" data-bs-target="#staticBackdrop9">

    <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel1">海王星</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                海王星以深藍色的外表和氣候特徵而聞名。 它主要由氫、氦和甲烷組成的大氣層包圍著岩石和冰的核心。 海王星的大氣層中含有高濃度的甲烷，導致它呈現出深藍色的外觀。這顆行星有14顆已知的衛星，其中最大的是海衛一(Triton)。它的極端寒冷和強風使得探索海王星成為一項極具挑戰性的任務。
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel2">天王星</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                天王星以其異常的側傾自轉軸而聞名，使其看起來是側躺著的。它主要由氫和氦構成的大氣層覆蓋著冰巨大的外殼。天王星的環非常暗淡，由塵埃和碎片組成。這顆行星的特殊自轉軸和奇特的環使其成為太陽系中獨一無二的行星，引發了科學家對其形成和演化的深入研究。
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel3" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel3">土星</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                土星是太陽系的第六顆行星，以其壯麗的環系統而聞名。 它的環由冰和岩石碎片組成，土星的大氣層主要由氫和氦組成，類似木星。它擁有多顆衛星，其中最大的是土衛六。土星也有強烈的磁場和旋風風暴，如六邊形風暴。這顆行星的環和獨特特徵一直吸引著太空探測器和科學家的研究，對理解太陽系的演化和行星環境提供了重要資訊。
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="staticBackdrop4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel4" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel4">木星</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                木星是太陽系中最大的行星，擁有壯觀的氣體大氣層和多個環形。它以其強烈的大紅斑風暴而著名。木星的內部結構包括氣體外殼和可能是液體的氫和氦層，最內部可能有固態核心。木星有多顆衛星，最著名的是伽利略衛星，其中的歐羅巴和卡利斯托可能擁有液態水海洋，引發了科學家對生命存在的興趣。
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="staticBackdrop5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel5" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel5">太陽</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                太陽是太陽系中心的巨大恆星，提供地球和其他行星所需的光和熱。 它主要由氫和氦組成，透過核融合反應產生能量。 太陽本身具有複雜的結構，表面活動包括太陽黑子和耀斑等。 它的引力影響著太陽系中的所有天體。
                </div>
            </div>
        </div>
    </div>

    <!-- Add similar modals for Button6 to Button9 -->
    <div class="modal fade" id="staticBackdrop6" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel6" aria-hidden="true">
        <!-- Modal 6 content... -->
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel6">水星</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                水星是離太陽最近的行星，溫差極端，白天可達攝氏427度，夜晚降至攝氏-183度。 幾乎沒有大氣層，地表佈滿隕石坑和裂縫。 地質特徵包括古老的地殼和大規模平原，可能是火山活動的痕跡。水星的自轉週期長，為88地球日，公轉週期也是88地球日。 這導致它的日夜循環獨特。
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="staticBackdrop7" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel7" aria-hidden="true">
        <!-- Modal 7 content... -->
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel7">金星</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                金星距離太陽第二近，其表面包裹在厚重的二氧化碳大氣層中，形成強烈的溫室效應。它擁有高溫、濃密的大氣，表面溫度高達約攝氏467度，比水星還要炎熱。金星的表面由火山平原、大型撞擊坑和山脈組成，其中包括了高山「阿芙羅狄蒂山」。 金星的自轉方向與大多數行星相反，自轉速度非常慢，一天相當於243地球日。
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="staticBackdrop8" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel8" aria-hidden="true">
        <!-- Modal 8 content... -->
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel8">地球</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                地球是唯一已知有生命存在的星球。 它的表面大約71%是水，包括海洋、湖泊和河流。 本身有大氣層，維持溫度和氣候。行星上有多樣化的生態系統，包括森林、草原、沙漠和極地。地球自轉一天大約24小時，繞太陽一圈一年約365.25天。
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="staticBackdrop9" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel9" aria-hidden="true">
        <!-- Modal 9 content... -->
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel9">火星</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                火星擁有撞擊坑、峽谷和火山，其中包括太陽系中最大的火山，奧林匹斯山。 儘管表面環境惡劣，火星仍吸引了人們的興趣，因為它可能曾經有液態水和生命的痕跡。近年來，太空探測器發現了冰下湖和複雜有機分子的跡象。人類計畫未來在火星建立基地，以進一步研究和探索這顆行星。
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <!-- Additional button to the left of the Logout button -->
        <div class="button-container">
        <a href="index.html" class="btn btn-warning">2D/3D Solar System</a>
        </div>

        <!-- Logout button in the top-right corner -->
        <div class="logout-container">
            <a href="logout.php" class="btn btn-warning">Logout</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>