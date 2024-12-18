
<!DOCTYPE html>
<html lang="id">
  <head>
    <link rel="stylesheet" href="styles.css" />
    <title>JoChan Schedule</title>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />
    <link rel="stylesheet" href="style/style.css">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        .selected {
            background-color: #4CAF50;
            color: white;
        }
    </style>
  </head>
  <body>
    <div class="design-root">
      <div class="layout-container">
        <header class="header">
          <div class="header-left">
            <div class="logo">
              <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M24 45.8096C19.6865 45.8096 15.4698 44.5305 11.8832 42.134C8.29667 39.7376 5.50128 36.3314 3.85056 32.3462C2.19985 28.361 1.76794 23.9758 2.60947 19.7452C3.451 15.5145 5.52816 11.6284 8.57829 8.5783C11.6284 5.52817 15.5145 3.45101 19.7452 2.60948C23.9758 1.76795 28.361 2.19986 32.3462 3.85057C36.3314 5.50129 39.7376 8.29668 42.134 11.8833C44.5305 15.4698 45.8096 19.6865 45.8096 24L24 24L24 45.8096Z"
                  fill="currentColor"
                ></path>
              </svg>
            </div>
            <h2>JoChan Schedule</h2>
          </div>
          <div class="header-right">
            <nav>
              <a href="login.php">Login</a>
              <a href="index.php">Home</a>
            </nav>
            <a href="register.php" class="btn-primary">Register</a>
            <div class="profile-img" style="background-image: url('img/JoChan.webp');"></div>
          </div>
        </header>
        <div class="content">
          <div class="content-container">
            <div class="content-header">
              <p class="title">Add Your Activity</p>
              <p class="subtitle">Let's get started with your first activity</p>
            </div>
            <form>
              <label>
                <p>Activity name</p>
                <input type="text" placeholder="Meeting" />
              </label>
              <label>
                  <?php include "kalender.php" ?>
              <label>
                <p>Description</p>
                <textarea placeholder="What did you do during the activity?"></textarea>
              </label>
              <button class="btn-primary">Save</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>