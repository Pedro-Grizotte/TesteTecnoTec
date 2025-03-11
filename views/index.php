<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Pedro Grizotte</title>
    <link rel="stylesheet" href="../wwwroot/css/style.css">
</head>
<body>
<div class="dashboard">
      <div class="sidebar">
        <div class="sidebar-icon active" data-tooltip="Home">
            <ion-icon name="home-outline"></ion-icon>
        </div>
        <div class="sidebar-icon" data-tooltip="Dashboard">
            <a href=""><ion-icon name="grid-outline"></ion-icon></a>
        </div>
        <div class="sidebar-icon" data-tooltip="Users">
            <a href=""><ion-icon name="person-outline"></ion-icon></a>
        </div>
        <div class="sidebar-icon" data-tooltip="Payments">
            <a href=""><ion-icon name="card-outline"></ion-icon></a>
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
          <h1>Dashboard</h1>
          <div class="search-bar">
            <span>🔍</span>
            <input type="text" placeholder="Search" />
          </div>
        </div>

        <div class="stats">
          <div class="stat-card">
            <h3>Total Income</h3>
            <div class="stat-value">
              $1200
              <span>+45%</span>
            </div>
          </div>
          <div class="stat-card">
            <h3>Total Expense</h3>
            <div class="stat-value">
              4.500K
              <span>+45%</span>
            </div>
          </div>
          <div class="stat-card">
            <h3>Total Bonus</h3>
            <div class="stat-value">
              6.100k
              <span>+45%</span>
            </div>
          </div>
        </div>

        <div class="chart-container">
          <canvas id="mainChart"></canvas>
        </div>

        <div class="bottom-cards">
          <div class="card">
            <div class="card-header">
              <h3>Order Statistics</h3>
              <div class="more-button">⋮</div>
            </div>
            <canvas id="orderChart"></canvas>
          </div>
          <div class="card">
            <div class="card-header">
              <h3>Earnings Overview</h3>
              <div class="more-button">⋮</div>
            </div>
            <canvas id="earningsChart"></canvas>
          </div>
        </div>
      </div>

      <div class="right-sidebar">
        <div class="profile">
          <div class="profile-image">
            <img src="images/profile.jpg" alt="Profile Image" />
          </div>
          <div class="profile-info">
            <h3>Ghulam</h3>
            <p>Product Designer</p>
          </div>
        </div>
        <div class="activity-list">
          <h3>Recent Activities</h3>
          <div class="activity-item">
            <div class="activity-image">
              <img src="images/user-1.jpg" alt="Profile Image" />
            </div>
            <div class="activity-info">
              <h4>Mike Lake</h4>
              <p>Backend Developer</p>
              <p>5 Mins ago</p>
            </div>
          </div>
          <div class="activity-item">
            <div class="activity-image">
              <img src="images/user-2.jpg" alt="Profile Image" />
            </div>
            <div class="activity-info">
              <h4>Sarah Wilson</h4>
              <p>UI Designer</p>
              <p>15 Mins ago</p>
            </div>
          </div>
        </div>
        <div class="upcoming-events">
          <h3>Upcoming Events</h3>
          <div class="event-item">
            <div class="event-date">
              <div class="day">10</div>
              <div class="weekday">Wed</div>
            </div>
            <div class="event-info">
              <h4>Top Management meeting</h4>
              <p>With team and CEO</p>
            </div>
          </div>
          <div class="event-item">
            <div class="event-date">
              <div class="day">15</div>
              <div class="weekday">Mon</div>
            </div>
            <div class="event-info">
              <h4>Product Review</h4>
              <p>Monthly review</p>
            </div>
          </div>
          <div class="event-item">
            <div class="event-date">
              <div class="day">10</div>
              <div class="weekday">Wed</div>
            </div>
            <div class="event-info">
              <h4>Top Management meeting</h4>
              <p>With team and CEO</p>
            </div>
          </div>
          <div class="event-item">
            <div class="event-date">
              <div class="day">15</div>
              <div class="weekday">Mon</div>
            </div>
            <div class="event-info">
              <h4>Product Review</h4>
              <p>Monthly review</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../wwwroot/js/site.js"></script>
</body>
</html>