<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Add User</title>
    <link rel="stylesheet" href="../wwwroot/css/style_addUsers.css">
</head>
<body>
<div class="dashboard">
        <div class="sidebar">
            <div class="sidebar-icon active" data-tooltip="Home">
                <a href="../index.php" class="home-icon"><ion-icon name="home-outline"></ion-icon></a>
            </div>
            <div class="sidebar-icon" data-tooltip="Dashboard">
                <a href=""><ion-icon name="grid-outline"></ion-icon></a>
            </div>
            <div class="sidebar-icon" data-tooltip="Users">
                <a href=""><ion-icon name="person-outline"></ion-icon></a>
            </div>
            <div class="sidebar-icon" data-tooltip="Payments">
                <a href="./payment.php"><ion-icon name="card-outline"></ion-icon></a>
            </div>
            <div class="sidebar-icon" data-tooltip="Settings">
                <a href=""><ion-icon name="settings-outline"></ion-icon></a>
            </div>
            <div class="sidebar-icon" data-tooltip="Help">
                <a href=""><ion-icon name="information-circle-outline"></ion-icon></a>
            </div>
            <div class="sidebar-icon" data-tooltip="Logout">
                <ion-icon name="close-outline"></ion-icon>
            </div>
        </div>
        <div class="main-content">
            <div class="header">
                <h1>Add User</h1>
            </div>
            <div class="chart-container">
                <div class="form-box register">
                    <form action="index.php" class="form" method="POST">
                        <h1>Registration</h1>
                        <div class="input-box">
                            <input type="text" name="full name" placeholder="Enter name" required>
                            <i><ion-icon name="body-outline"></ion-icon></i>
                        </div>
                        <div class="input-box">
                            <input type="email" name="email" placeholder="Enter email address" required>
                            <i><ion-icon name="mail"></ion-icon></i>
                        </div>
                        <div class="column">
                            <div class="input-box">
                                <input type="phone" name="phone" placeholder="Enter phone number" required>
                                <i><ion-icon name="call-outline"></ion-icon></i>
                            </div>
                            <div class="input-box">
                                <input type="date" name="date" placeholder="mm/dd/yyyy" required>
                                <i><ion-icon name="calendar-outline"></ion-icon></i>
                            </div>
                        </div>
                        <div class="gender-box">
                            <h3>Gender</h3>
                            <div class="gender-option">
                                <input class="gender" type="radio" name="option" value="Male" checked> Male
                                <input class="gender" type="radio" name="option" value="Female"> Female
                                <input class="gender" type="radio" name="option" value="NotInformed"> Prefer not to say
                            </div>
                        </div>
                        <div class="input-box">
                            <input type="number" name="age" placeholder="Age" required>
                        </div>
                        <div class="input-box">
                            <input type="text" name="address" placeholder="Address" required>
                        </div>
                        <div class="input-box">
                            <input type="number" name="postal code" placeholder="Postal Code" required>
                        </div>  
                        <div class="input-box address">
                            <div class="column">
                                <div class="select-box">
                                    <select>
                                        <option>Contry</option>
                                        <option name="option" value="America">America</option>
                                        <option name="option" value="Brasil">Brasil</option>
                                        <option name="option" value="England">England</option>
                                        <option name="option" value="Africa">Africa</option>
                                        <option name="option" value="China">China</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="input-box">
                                <input type="text" name="city" placeholder="City" required>
                            </div>
                            <div class="input-box">
                                <input type="text" name="region" placeholder="Region" required>
                            </div> 
                        </div>  
                        <button type="submit" name="submit" class="btn">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../wwwroot/js/site.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>