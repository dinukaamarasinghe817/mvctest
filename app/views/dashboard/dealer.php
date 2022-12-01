
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="<?php echo BASEURL; ?>/public/css/dashboard.css">
    <title>Dealer-dashboard</title>
</head>
<body>
    <?php 
    $sidebar = new Navigation('dashboard');
    ?>
    <!-- <section class="leftpanel">
        <div class="project-name">
            <h1>Gasify</h1>
        </div>
        <ul class="nav-tiles">
            <li class="nav-tile">
                <a href="#" class="panel-tile active dashboard">
                    <svg width="26" height="26" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.875 11.6249L15.5 2.58325L27.125 11.6249V25.8333C27.125 26.5184 26.8528 27.1755 26.3684 27.6599C25.8839 28.1444 25.2268 28.4166 24.5417 28.4166H6.45833C5.77319 28.4166 5.11611 28.1444 4.63164 27.6599C4.14717 27.1755 3.875 26.5184 3.875 25.8333V11.6249Z" stroke="" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M11.625 28.4167V15.5H19.375V28.4167" stroke="" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <h3>Dashboard</h3>
                </a>
            </li>
            <li class="nav-tile">
                <a href="#" class="panel-tile orders">
                    <svg width="26" height="26" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M25.2499 15.5999V29.0621H4.58325V15.5999" stroke="" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M27.8333 8.86914H2V15.6003H27.8333V8.86914Z" stroke="" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M14.9167 29.0625V8.86914" stroke="" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M14.9167 8.86905H9.10417C8.24774 8.86905 7.42639 8.51447 6.8208 7.8833C6.21521 7.25214 5.875 6.3961 5.875 5.50349C5.875 4.61089 6.21521 3.75485 6.8208 3.12369C7.42639 2.49252 8.24774 2.13794 9.10417 2.13794C13.625 2.13794 14.9167 8.86905 14.9167 8.86905Z" stroke="" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15 8.61759H20.8125C21.6689 8.61759 22.4903 8.263 23.0959 7.63184C23.7015 7.00067 24.0417 6.14463 24.0417 5.25203C24.0417 4.35943 23.7015 3.50339 23.0959 2.87222C22.4903 2.24106 21.6689 1.88647 20.8125 1.88647C16.2917 1.88647 15 8.61759 15 8.61759Z" stroke="" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <h3>Orders</h3>
                </a>
            </li>
            <li class="nav-tile">
                <a href="#" class="panel-tile delivery">
                    <svg width="26" height="26" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_64_358)">
                        <path d="M20.6667 3.875H1.29175V20.6667H20.6667V3.875Z" stroke="" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M20.6667 10.3333H25.8334L29.7084 14.2083V20.6666H20.6667V10.3333Z" stroke="" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M7.10417 27.1251C8.88759 27.1251 10.3333 25.6793 10.3333 23.8959C10.3333 22.1125 8.88759 20.6667 7.10417 20.6667C5.32075 20.6667 3.875 22.1125 3.875 23.8959C3.875 25.6793 5.32075 27.1251 7.10417 27.1251Z" stroke="" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M23.8959 27.1251C25.6793 27.1251 27.1251 25.6793 27.1251 23.8959C27.1251 22.1125 25.6793 20.6667 23.8959 20.6667C22.1125 20.6667 20.6667 22.1125 20.6667 23.8959C20.6667 25.6793 22.1125 27.1251 23.8959 27.1251Z" stroke="" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_64_358">
                        <rect width="31" height="31" fill="white"/>
                        </clipPath>
                        </defs>
                    </svg>
                    <h3>Delivery</h3>
                </a>
            </li>
            <li class="nav-tile">
                <a href="#" class="panel-tile stock">
                    <svg width="26" height="26" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.4999 2.58325L2.58325 9.04159L15.4999 15.4999L28.4166 9.04159L15.4999 2.58325Z" stroke="" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M2.58325 21.9583L15.4999 28.4166L28.4166 21.9583" stroke="" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M2.58325 15.5L15.4999 21.9583L28.4166 15.5" stroke="" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <h3>Stock</h3>
                </a>
            </li>
            <li class="nav-tile">
                <a href="#" class="panel-tile notifications">
                    <svg width="26" height="26" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.2083 14.4402V9.27352M20.6667 14.4402V9.27352M27.125 2.81519H3.875V23.4819H10.3333V28.6485L15.5 23.4819H21.9583L27.125 18.3152V2.81519Z" stroke="" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <h3>Notifications</h3>
                </a>
            </li>
            <li class="nav-tile">
                <a href="#" class="panel-tile analysis">
                    <svg width="26" height="26" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M29 5L17.3409 22.4167L11.2045 13.25L2 27" stroke="" stroke-width="3.35444" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M21.6365 5H29.0001V16" stroke="" stroke-width="3.35444" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <h3>Analysis</h3>
                </a>
            </li>
            <li class="nav-tile">
                <a href="#" class="panel-tile reports">
                    <svg width="26" height="26" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.5839 4.79688H4.87327C4.21322 4.79688 3.58019 5.08094 3.11346 5.58659C2.64673 6.09223 2.38452 6.77803 2.38452 7.49312V26.3668C2.38452 27.0819 2.64673 27.7677 3.11346 28.2734C3.58019 28.779 4.21322 29.0631 4.87327 29.0631H22.2945C22.9546 29.0631 23.5876 28.779 24.0544 28.2734C24.5211 27.7677 24.7833 27.0819 24.7833 26.3668V16.93" stroke="" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M22.9168 2.77512C23.4118 2.2388 24.0832 1.9375 24.7833 1.9375C25.4834 1.9375 26.1549 2.2388 26.6499 2.77512C27.145 3.31143 27.4231 4.03883 27.4231 4.7973C27.4231 5.55577 27.145 6.28317 26.6499 6.81949L14.8283 19.6267L9.85083 20.9748L11.0952 15.5823L22.9168 2.77512Z" stroke="" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <h3>Reports</h3>
                </a>
            </li>
        </ul>
    </section> -->
    <section class="body">
        <!-- <section class="body-header">
            <div class="body-header-left">
                <p class="today">Today</p>
                <p class="date">30 Oct 2022</p>
            </div>
            <div class="body-header-right">
                <button class="bell">
                    <svg width="30" height="33" viewBox="0 0 30 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23.4075 10.563C23.4075 8.29194 22.5053 6.11391 20.8994 4.50804C19.2936 2.90217 17.1155 2 14.8445 2C12.5734 2 10.3954 2.90217 8.78954 4.50804C7.18366 6.11391 6.28149 8.29194 6.28149 10.563C6.28149 20.5531 2 23.4075 2 23.4075H27.689C27.689 23.4075 23.4075 20.5531 23.4075 10.563Z" stroke="" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M17.3145 29.1157C17.0635 29.5483 16.7034 29.9073 16.2701 30.1569C15.8368 30.4065 15.3455 30.5378 14.8455 30.5378C14.3454 30.5378 13.8541 30.4065 13.4208 30.1569C12.9875 29.9073 12.6274 29.5483 12.3765 29.1157" stroke="" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <button class="profile" onclick="logoutmenu(); return false;"><img src="css/dealer.png" alt=""></button>
                <div class="logout-menu">
                    <ul>
                        <li>
                            <svg width="22" height="22" viewBox="0 0 19 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18 20.125V18C18 16.8728 17.5522 15.7918 16.7552 14.9948C15.9582 14.1978 14.8772 13.75 13.75 13.75H5.25C4.12283 13.75 3.04183 14.1978 2.2448 14.9948C1.44777 15.7918 1 16.8728 1 18V20.125" stroke="#8A8B9F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M9.5 9.5C11.8472 9.5 13.75 7.59721 13.75 5.25C13.75 2.90279 11.8472 1 9.5 1C7.15279 1 5.25 2.90279 5.25 5.25C5.25 7.59721 7.15279 9.5 9.5 9.5Z" stroke="#8A8B9F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <a href="profile.php">Profile</a>
                        </li>
                        <li>
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.43072 20.2922H3.14357C2.57506 20.2922 2.02984 20.0663 1.62784 19.6643C1.22584 19.2623 1 18.7171 1 18.1486V3.14357C1 2.57506 1.22584 2.02984 1.62784 1.62784C2.02984 1.22584 2.57506 1 3.14357 1H7.43072" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14.9336 16.005L20.2925 10.646L14.9336 5.28711" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M20.2921 10.646H7.43066" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <a href="" onclick ="logout(); return false;" style.color = "red">Logout</a>
                        </li>
                    </ul>
                </div>
                
            </div>
        </section> -->
        <?php
            $bodyheader = new BodyHeader();
        ?>
        <section class="body-content">
            <div class="body-left">
                <div class="variable">
                    <div class="topic">
                        <h3>Analytic Overview</h3>
                        <!-- drop down component -->
                        <form action="#">
                            <select id="period" onchange="updatechart()" class="dropdowndate">
                                <option value="today" selected>To day</option>
                                <option  value="30day">Last 30 days</option>
                            </select>
                        </form>
                    </div>
                    <div class="tiles">
                        <div class="tile">
                            <h1>12</h1>
                            <p>Orders Recieved</p>
                        </div>
                        <div class="tile">
                            <h1>12</h1>
                            <p>Orders Recieved</p>
                        </div>
                        <div class="tile">
                            <h1>12</h1>
                            <p>Orders Recieved</p>
                        </div>
                    </div>
                    <div class="chart">

                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Current Stock</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if(isset($data['stock'])){
                                $result = $data['stock'];
                                $stock = "";
                                while($row = mysqli_fetch_assoc($result)){
                                    $name = $row['name'];
                                    $qty = $row['quantity'];
                                    $stock .=   '<tr>
                                                    <td>'.$name.'</td>
                                                    <td>'.$qty.'</td>
                                                </tr>';
                                
                                }
                                echo $stock;

                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="body-right">
                <div class="accordion new">
                    <h3>New Orders</h3>
                    <?php
                        if(isset($data['pending'])){
                            $results = $data['pending'];
                            foreach($results as $result){
                                $newpending = new NewOrder($result);
                            }

                            echo "<script>
                                    let accordion = document.querySelectorAll('.accordion .box');
                                    for(i=0; i<accordion.length; i++) {
                                        accordion[i].addEventListener('click', function(){
                                            this.classList.toggle('active')
                                        })
                                    }
                                </script>";
                        }else{
                            echo "No pending orders";
                        }
                        
                    ?>
                    
                </div>
                <div class="accordion dispatched">
                    <h3>Deliveries</h3>
                    <div class="box">
                        <div class="label">Order ID : 1
                            <svg class="img" width="30" height="16" viewBox="0 0 35 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.7514 15.8985C17.1825 15.8993 16.6312 15.7201 16.1932 15.3918L1.58692 4.38418C1.08977 4.01049 0.777187 3.47366 0.717923 2.89179C0.65866 2.30991 0.857574 1.73066 1.27091 1.28145C1.68424 0.832243 2.27813 0.54988 2.92193 0.496478C3.56574 0.443076 4.20671 0.623009 4.70385 0.996694L17.7522 10.8596L30.8036 1.35865C31.0527 1.17596 31.3392 1.03958 31.6468 0.957326C31.9545 0.875077 32.277 0.848587 32.596 0.87938C32.915 0.910173 33.2242 0.99764 33.5057 1.13676C33.7872 1.27587 34.0356 1.46389 34.2364 1.69001C34.4594 1.91635 34.6282 2.18184 34.7323 2.46986C34.8365 2.75788 34.8737 3.06221 34.8416 3.3638C34.8096 3.66538 34.709 3.95772 34.5461 4.2225C34.3832 4.48727 34.1616 4.71878 33.8951 4.90251L19.2853 15.525C18.8346 15.8011 18.2945 15.9326 17.7514 15.8985Z" fill="#F9896B"/>
                            </svg>
                        </div>
                        <div class="content">
                            <span><strong>Customer ID :</strong> 11</span> &nbsp;
                            <span><strong>Customer Name :</strong> Kamal Abeynayake</span><br>
                            <span><strong>Delivery Person ID :</strong> 11</span> &nbsp;
                            <span><strong>Delivery Person Name :</strong> Kamal Abeynayake</span>
                            <hr>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Item</th>
                                        <th>Quantity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Buddy</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>Budget</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>Regular</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="box">
                        <div class="label">Order ID : 1
                            <svg class="img" width="30" height="16" viewBox="0 0 35 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.7514 15.8985C17.1825 15.8993 16.6312 15.7201 16.1932 15.3918L1.58692 4.38418C1.08977 4.01049 0.777187 3.47366 0.717923 2.89179C0.65866 2.30991 0.857574 1.73066 1.27091 1.28145C1.68424 0.832243 2.27813 0.54988 2.92193 0.496478C3.56574 0.443076 4.20671 0.623009 4.70385 0.996694L17.7522 10.8596L30.8036 1.35865C31.0527 1.17596 31.3392 1.03958 31.6468 0.957326C31.9545 0.875077 32.277 0.848587 32.596 0.87938C32.915 0.910173 33.2242 0.99764 33.5057 1.13676C33.7872 1.27587 34.0356 1.46389 34.2364 1.69001C34.4594 1.91635 34.6282 2.18184 34.7323 2.46986C34.8365 2.75788 34.8737 3.06221 34.8416 3.3638C34.8096 3.66538 34.709 3.95772 34.5461 4.2225C34.3832 4.48727 34.1616 4.71878 33.8951 4.90251L19.2853 15.525C18.8346 15.8011 18.2945 15.9326 17.7514 15.8985Z" fill="#F9896B"/>
                            </svg>
                        </div>
                        <div class="content">
                            <span><strong>Customer ID :</strong> 11</span> &nbsp;
                            <span><strong>Customer Name :</strong> Kamal Abeynayake</span><br>
                            <span><strong>Delivery Person ID :</strong> 11</span> &nbsp;
                            <span><strong>Delivery Person Name :</strong> Kamal Abeynayake</span>
                            <hr>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Item</th>
                                        <th>Quantity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Buddy</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>Budget</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>Regular</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="box">
                        <div class="label">Order ID : 1
                            <svg class="img" width="30" height="16" viewBox="0 0 35 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.7514 15.8985C17.1825 15.8993 16.6312 15.7201 16.1932 15.3918L1.58692 4.38418C1.08977 4.01049 0.777187 3.47366 0.717923 2.89179C0.65866 2.30991 0.857574 1.73066 1.27091 1.28145C1.68424 0.832243 2.27813 0.54988 2.92193 0.496478C3.56574 0.443076 4.20671 0.623009 4.70385 0.996694L17.7522 10.8596L30.8036 1.35865C31.0527 1.17596 31.3392 1.03958 31.6468 0.957326C31.9545 0.875077 32.277 0.848587 32.596 0.87938C32.915 0.910173 33.2242 0.99764 33.5057 1.13676C33.7872 1.27587 34.0356 1.46389 34.2364 1.69001C34.4594 1.91635 34.6282 2.18184 34.7323 2.46986C34.8365 2.75788 34.8737 3.06221 34.8416 3.3638C34.8096 3.66538 34.709 3.95772 34.5461 4.2225C34.3832 4.48727 34.1616 4.71878 33.8951 4.90251L19.2853 15.525C18.8346 15.8011 18.2945 15.9326 17.7514 15.8985Z" fill="#F9896B"/>
                            </svg>
                        </div>
                        <div class="content">
                            <span><strong>Customer ID :</strong> 11</span> &nbsp;
                            <span><strong>Customer Name :</strong> Kamal Abeynayake</span><br>
                            <span><strong>Delivery Person ID :</strong> 11</span> &nbsp;
                            <span><strong>Delivery Person Name :</strong> Kamal Abeynayake</span>
                            <hr>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Item</th>
                                        <th>Quantity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Buddy</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>Budget</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>Regular</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!-- <script src="<?php echo BASEURL;?>/public/js/dashboard.js"></script> -->
    <script>
        let accordion = document.querySelectorAll('.accordion .box');
        for(i=0; i<accordion.length; i++) {
            accordion[i].addEventListener('click', function(){
                this.classList.toggle('active')
            })
        }
    </script>
</body>
</html>