<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b9323f08fd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="landingpage.css">
    <title>blog editor</title>
</head>

<body>
    <?php require_once("navbar.html")?>
    <?php require_once("sidebar.html")?>
    
    <div class="container">
        <h3>Analytics</h3>
        <div class="one">
        <div class="block">
            <div class="bx1">
                <i class="fa-solid fa-chart-column fa-xl"></i>
                <div class="midl">
                    <div class="lftb">
                        <h2>Total Clicks</h2>
                        <h1>1,10,500</h1>
                    </div>
                    <div class="rghtb">
                        <svg><circle cx='38' cy='38' r='36'></circle></svg>
                        <div class="perc">
                            <p>90%</p>
                        </div>
                    </div>
                </div>
                
            </div>
            <small class="mutedtext">last 24 hours</small>
        </div>

        <div class="block">
            <div class="bx2">
                <i class="fa-regular fa-eye fa-xl"></i>
                <div class="midl">
                    <div class="lftb">
                        <h2>Impressions</h2>
                        <h1>9,50,500</h1>
                    </div>
                    <div class="rghtb">
                        <svg><circle cx='38' cy='38' r='36'></circle></svg>
                        <div class="perc">
                            <p>70%</p>
                        </div>
                    </div>
                </div>
                
            </div>
            <small class="mutedtext">last 24 hours</small>
        </div>

        <div class="block">
            <div class="bx3">
                <i class="fa-solid fa-rocket fa-xl"></i>
                <div class="midl">
                    <div class="lftb">
                        <h2>Total Sales</h2>
                        <h1>$2,500</h1>
                    </div>
                    <div class="rghtb">
                        <svg><circle cx='38' cy='38' r='36'></circle></svg>
                        <div class="perc">
                            <p>40%</p>
                        </div>
                    </div>
                </div>
                
            </div>
            <small class="mutedtext">last 24 hours</small>
        </div>
        </div>

        <div class="top">
            <h3>Top Content</h3>
            <table>
                <thead>
                    <tr>
                        <th class="t1">Track Title</th>
                        <th>views</th>
                        <th>impressions</th>
                        <th>converstion rate</th>  
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>the post one</td>
                        <td>1,10,500</td>
                        <td>5,10,500</td>
                        <td>50%</td>
                    </tr>
                    <tr>
                        <td>topic two</td>
                        <td>3,10,500</td>
                        <td>9,10,500</td>
                        <td>10%</td>
                    </tr>
                    <tr>
                        <td>readers book</td>
                        <td>6,50,500</td>
                        <td>7,50,500</td>
                        <td>80%</td>
                    </tr>
                </tbody>
            </table>
            <a href="">Show all</a>
        </div>

        
            
    </div>

    <script src="landingpage.js"></script>
</body>

</html>