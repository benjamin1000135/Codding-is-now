<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin Panel</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      min-height: 100vh;
      background: #f1f1f1;
    }

    a {
      text-decoration: none;
    }

    li {
      list-style: none;
    }

    h1, h2 {
      color: #000;
    }

    h3 {
      color: #f05462;
    }

    .btn {
      background: #f05462;
      color: #fff;
      padding: 5px 10px;
      text-align: center;
      border-radius: 5px;
      margin-right: 15px;
    }

    .btn:hover {
      color: #f05462;
      background: #fff;
      padding: 3px 8px;
      border: 2px solid #f05462;
    }

    .side-menu {
      position: fixed;
      background-color: #f05462;
      width: 250px;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding-top: 20px;
    }

    .side-menu .brand-name img {
      width: 120px;
      height: auto;
      margin-bottom: 20px;
    }

    .side-menu ul {
      width: 100%;
    }

    .side-menu ul li {
      font-size: 18px;
      padding: 15px 20px;
      color: #fff;
      display: flex;
      align-items: center;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .side-menu ul li:hover {
      background-color: #fff;
      color: #f05462;
      padding-left: 30px;
    }

    .side-menu ul li i {
      margin-right: 15px;
    }

    .container {
      margin-left: 250px;
      width: calc(100% - 250px);
    }

    .header {
      background: #fff;
      height: 10vh;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      position: relative;
      padding: 0 20px;
    }

    .nav {
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .dashboard1 h1 {
      margin-left: 20px;
    }

    .search {
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
      display: flex;
      align-items: center;
    }

    .search input[type="text"] {
      padding: 10px 40px 10px 10px;
      border-radius: 5px;
      border: 2px solid #f05462;
      font-size: 16px;
      width: 250px;
    }

    .search button {
      position: absolute;
      right: 10px;
      background: none;
      border: none;
      color: #f05462;
      font-size: 20px;
      cursor: pointer;
    }

    .user {
      display: flex;
      align-items: center;
      margin-right: 20px;
    }

    .user img {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      margin-left: 15px;
    }

    .notification {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
      font-size: 20px;
      color: #f05462;
      cursor: pointer;
      box-shadow: 0 2px 3px rgba(0, 0, 0, 0.2);
      margin-right: 15px;
    }

    .notification::after {
      content: "6";
      position: absolute;
      top: 0;
      right: 0;
      background: red;
      color: white;
      width: 18px;
      height: 18px;
      font-size: 12px;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .content {
      padding: 20px;
    }

    .cards {
      display: flex;
      gap: 20px;
      justify-content: flex-start;
      flex-wrap: nowrap;
    }

    .card {
      width: 275px;
      height: 150px;
      background: #fff;
      display: flex;
      justify-content: space-around;
      align-items: center;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .card:hover {
      transform: translateY(-10px);
      box-shadow: 0 12px 20px rgba(0, 0, 0, 0.2);
      color: #f05462;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .content-2 {
      margin-top: 20px;
      display: flex;
      gap: 30px;
      flex-wrap: wrap;
    }

    .recent-payments, .new-students {
      flex: 1;
      background: #fff;
      padding: 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .title {
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-bottom: 2px solid #999;
      padding-bottom: 10px;
      margin-bottom: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    table th,
     table td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #ddd;
      padding-right: 20px; 
      padding-left: 20px; 
    }





    table  tr  img {
      width: 40px;
      height: 40px;
      border-radius: 50%;
    
    }


    table td:nth-child(3) {
      padding-right: 20px; 
    }

    table td:nth-child(4) {
      padding-left: 20px; 
    }

  </style>
</head>
<body>


  <div class="side-menu">
    <div class="brand-name">
      <img src="schl.png" alt="Logo">
    </div>
    <ul>
      <li><i class="fas fa-home"></i> Home</li>
      <li><i class="fas fa-user-graduate"></i> Student</li>
      <li><i class="fas fa-person-chalkboard"></i> Teacher</li>
      <li><i class="fas fa-school"></i> Schools</li>
      <li><i class="fas fa-piggy-bank"></i> Income</li>
      <li><i class="fas fa-question-circle"></i> Help</li>
      <li><i class="fas fa-cog"></i> Settings</li>
    </ul>
  </div>

 
  <div class="container">
    <div class="header">
      <div class="nav">
        <div class="dashboard1">
          <h1>☰DASHBOARD</h1>
        </div>
        <div class="search">
          <input type="text" placeholder="Search...">
          <button><i class="fas fa-search"></i></button>
        </div>
        <div class="user">
          <a href="#" class="btn">Add new</a>
          <div class="notification"><i class="fas fa-bell"></i></div>
          <img src="mb.png" alt="User">
        </div>
      </div>
    </div>

    <div class="content">
      <div class="cards">
        <div class="card">
          <div>
            <h1>20000</h1>
            <h3>Students</h3>
          </div>
          <i class="fas fa-user-graduate fa-3x"></i>
        </div>
        <div class="card">
          <div>
            <h1>53</h1>
            <h3>Teachers</h3>
          </div>
          <i class="fas fa-chalkboard-teacher fa-3x"></i>
        </div>
        <div class="card">
          <div>
            <h1>8</h1>
            <h3>Schools</h3>
          </div>
          <i class="fas fa-school fa-3x"></i>
        </div>
        <div class="card">
          <div>
            <h1>1500</h1>
            <h3>Payments</h3>
          </div>
          <i class="fas fa-money-bill fa-3x"></i>
        </div>
      </div>

      <div class="content-2">
        <div class="recent-payments">
          <div class="title">
            <h2>Recent Payments</h2>
            <a href="#" class="btn">View All</a>
          </div>
          <div class="tbl">
          <table>
            <tr>
              <th>Name</th>
              <th>School</th>
              <th>Amount</th>
              <th>Option</th>
            </tr>
            <tr>
              <td>Manzi1benjamin</td>
              <td>Epm</td>
              <td>20$</td>
              <td> <a href="#" class="btn">View</a><a href="#" class="btn">Edit</a></td>
            </tr>

          <tr>
              <td>Keza Benitha</td>
              <td>Ldk</td>
              <td>25$</td>
              <td> <a href="#" class="btn">View</a><a href="#" class="btn">Edit</a></td>
            </tr> 

            <tr>
              <td>Zigira k Rosine</td>
              <td>Esm</td>
              <td>20$</td>
              <td> <a href="#" class="btn">View</a><a href="#" class="btn">Edit</a></td>
            </tr>
          </table>
          </div>
        </div>

        <div class="new-students">
          <div class="title">
            <h2>Recent Students</h2>
            <a href="#" class="btn">View All</a>
          </div>
          <table>
            <tr>
              <th>Profile</th>
              <th>Name</th>
              <th>Option</th>
            </tr>
            <tr>
              <td><img src="0.jpg" alt="Profile"></td>
              <td>M.benjamin </td>
              <td><a href="#" class="btn">Delete</a></td>
            </tr>

            <tr>
              <td><img src="PXL1.jpg" alt="Profile"></td>
              <td>Keza Benitha</td>
              <td><a href="#" class="btn">Delete</a></td>
            </tr>

           

          </table>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
