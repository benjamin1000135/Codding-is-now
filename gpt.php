<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin panel</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    /* [Your original styles remain unchanged] */
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins',sans-serif;
    }

    body{
      min-height: 100vh;
    }

    a{
      text-decoration: none;
    }

    li{
      list-style: none;
    }

    h1, h2{
      color: #000;
    }

    h3{
      color: #f05462;
    }

    .btn{
      background: #f05462;
      color: #fff;
      padding: 5px 10px;
      text-align: center;
    }

    .btn:hover{
      color: #f05462;
      background: #fff;
      padding: 3px 8px;
      border: 2px solid #f05462;
    }

    .search input{
      text-align: center;
      font-size: 20px;
      font-weight: 20%;
      padding: 20px;
      border-radius: 0px;
      border: 2px solid #f05462;
    }

    .title{
      display: flex;
      align-items: center;
      justify-content: space-around;
      padding: 15px 10px;
      border-bottom: 2px solid #999;
    }

    table{
      padding: 10px;
    }

    th, td{
      text-align: left;
      padding: 8px;
    }

    .side-menu{
      position: fixed;
      background-color: #f05462;
      width: 18.9vw;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      transition: width 0.3s;
    }

    .side-menu.collapsed {
      width: 70px;
    }

    .side-menu.collapsed ul li {
      justify-content: center;
      padding: 10px 0;
    }

    .side-menu.collapsed ul li i {
      margin-right: 0;
    }

    .side-menu.collapsed ul li::after,
    .side-menu.collapsed ul li span {
      display: none;
    }

    .side-menu .brand-name {
      height: 10vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .side-menu ul li {
      margin-top: 30px;
      font-size: 24px;
      padding: 10px 40px;
      color: #fff;
      display: flex;
      align-items: center;
      transition: 0.3s;
    }

    .side-menu li:hover {
      background-color: #fff;
      color: #f05462;
    }

    .container {
      position: absolute;
      right: 0;
      width: 80vw;
      height: 100vh;
      background: #f1f1f1;
      transition: width 0.3s, right 0.3s;
    }

    .side-menu.collapsed ~ .container {
      width: calc(100vw - 70px);
    }

    .container .header {
      position: fixed;
      top: 0;
      right: 0;
      width: 80vw;
      height: 10vh;
      background: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 4px 8px 0 rgb(0,0,0,0.2);
      transition: width 0.3s;
    }

    .side-menu.collapsed ~ .container .header {
      width: calc(100vw - 70px);
    }

    .container .header .nav {
      width: 90%;
      display: flex;
      align-items: center;
    }

    .container .header .nav .search {
      flex: 3;
      display: flex;
      justify-content: center;
    }

    .container .header .nav .search input[type=text] {
      border: none;
      background: #f1f1f1;
      padding: 10px;
      width: 50%;
    }

    .container .header .nav .search button {
      width: 40px;
      height: 40px;
      border: none;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .container .header .nav .user {
      flex: 1;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .container .header .nav .search button img,
    .container .header .nav .user img,
    .kb tr td img,
    .img-case img {
      width: 50px;
      height: 50px;
      object-fit: cover;
    }

    .container .content {
      position: relative;
      margin-top: 10vh;
      min-height: 90vh;
    }

    .container .content .cards {
      padding: 20px 15px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
    }

    .container .content .cards .card {
      width: 275px;
      height: 150px;
      background: white;
      margin: 20px 10px;
      display: flex;
      align-items: center;
      justify-content: space-around;
      box-shadow: 0 4px 8px rgb(0,0,0,0.2), 0 6px 20px 0 rgb(0,0,0,0.19);
    }

    .container .content .content-2 {
      min-height: 60vh;
      display: flex;
      justify-content: space-around;
      align-items: flex-start;
      flex-wrap: wrap;
    }

    .recent-payements, .new-students {
      background: #fff;
      box-shadow: 0 4px 8px rgb(0,0,0,0.2), 0 6px 20px 0 rgb(0,0,0,0.19);
      display: flex;
      flex-direction: column;
      margin: 0 25px 25px 25px;
    }

    .recent-payements {
      flex: 5;
    }

    .new-students {
      flex: 2;
    }

    .dashboard1 h1 {
      cursor: pointer;
      margin-left:-32%;
    
    }


    /* styles here if needed for better UX */
  </style>
</head>
<body>

<div class="icon">


</div>

  <div class="side-menu" id="sidebar">
    <ul>
      <li><i class="fas fa-home"></i><span>&nbsp;&nbsp;Home</span></li>
      <li><i class="fas fa-user-graduate"></i><span>&nbsp;&nbsp;Student</span></li>
      <li><i class="fas fa-person-chalkboard"></i><span>&nbsp;&nbsp;Teacher</span></li>
      <li><i class="fas fa-school"></i><span>&nbsp;&nbsp;Schools</span></li>
      <li><i class="fas fa-piggy-bank"></i><span>&nbsp;&nbsp;Income</span></li>
      <li><i class="fas fa-question-circle"></i><span>&nbsp;&nbsp;Help</span></li>
      <li><i class="fas fa-cog"></i><span>&nbsp;&nbsp;Settings</span></li>
    </ul>
  </div>

  <div class="container" id="main">
    <div class="header" id="header">
      <div class="nav">
        <div class="search"  >
          <div class="dashboard1" id="dashboard-toggle">
            <h1>☰DASHBOARD</h1>
          </div>
          <input type="text" placeholder="Search">
          <div class="srch">
           
          </div>
        </div>
        <div class="user">
          <a href="#" class="btn">Add new</a>
          <div class="notification"><img src="bell.svg" alt=""></div>
          <div class="img-case1"><img src="mb.png" alt=""></div>
        </div>
      </div>
    </div>

    
    <div class="content">
      <div class="cards">
        <div class="card">
          <div>
            <h1>20000</h1>
            <h3 class="ol">Student</h3>
          </div>
          <i class="fas fa-user-graduate fa-3x icon"></i>
        </div>
        <div class="card">
          <div>
            <h1>53</h1>
            <h3>Teacher</h3>
          </div>
          <i class="fas fa-chalkboard-teacher fa-3x icon"></i>
        </div>
        <div class="card">
          <div>
            <h1>8</h1>
            <h3>School</h3>
          </div>
          <i class="fas fa-school fa-3x icon"></i>
        </div>
        <div class="card">
          <div>
            <h1>350000</h1>
            <h3>Income</h3>
          </div>
          <i class="fas fa-hand-holding-usd fa-3x icon"></i>
        </div>
      </div>

      <div class="content-2">
        <div class="recent-payements">
          <div class="title">
            <h2>Recent Payments</h2>
            <a href="#" class="btn">View All</a>
          </div>
          <table>
            <tr>
              <th>Name</th>
              <th>School</th>
              <th>Amount</th>
              <th class="th1">Option</th>
            </tr>
            <tr>
              <td>Manzi Benjamin</td>
              <td>Lycee de Nyanza</td>
              <td>$19</td>
              <td class="mm">
                <a href="#" class="btn">View</a>
                <a href="#" class="btn">Edit</a>
                <a href="#" class="btn">Delete</a>
              </td>
            </tr>

            <tr>
              <td>Hashimwe Doren</td>
              <td>Lycee de Nyanza</td>
              <td>$20</td>
              <td class="mm">
                <a href="#" class="btn">View</a>
                <a href="#" class="btn">Edit</a>
                <a href="#" class="btn">Delete</a>
              </td>
            </tr>

            <tr>
              <td>Manirasubiza.G.J</td>
              <td>Lycee de Nyanza</td>
              <td>$30</td>
              <td class="mm">
                <a href="#" class="btn">View</a>
                <a href="#" class="btn">Edit</a>
                <a href="#" class="btn">Delete</a>
              </td>
            </tr>

            <tr>
              <td>Impuhwe.B.Moise</td>
              <td>Lycee de Nyanza</td>
              <td>$19</td>
              <td class="mm">
                <a href="#" class="btn">View</a>
                <a href="#" class="btn">Edit</a>
                <a href="#" class="btn">Delete</a>
              </td>
            </tr>

            <tr>
              <td>Kamugisha Fred</td>
              <td>Lycee de Nyanza</td>
              <td>$39</td>
              <td class="mm">
                <a href="#" class="btn">View</a>
                <a href="#" class="btn">Edit</a>
                <a href="#" class="btn">Delete</a>
              </td>
            </tr>
            
            <tr>
              <td>Twizerimana.A</td>
              <td>Lycee de Nyanza</td>
              <td>$39</td>
              <td class="mm">
                <a href="#" class="btn">View</a>
                <a href="#" class="btn">Edit</a>
                <a href="#" class="btn">Delete</a>
              </td>
            </tr>

            <tr>
              <td>Umukundwa Angle</td>
              <td>Lycee de Nyanza</td>
              <td>$39</td>
              <td class="mm">
                <a href="#" class="btn">View</a>
                <a href="#" class="btn">Edit</a>
                <a href="#" class="btn">Delete</a>
              </td>
            </tr>
            <tr>
              <td>Igiraneza.U.uornella</td>
              <td>Lycee de Nyanza</td>
              <td>$30</td>
              <td class="mm">
                <a href="#" class="btn">View</a>
                <a href="#" class="btn">Edit</a>
                <a href="#" class="btn">Delete</a>
              </td>
            </tr>

            <tr>
              <td>Giramata Shallon</td>
              <td>Lycee de Nyanza</td>
              <td>$35</td>
              <td class="mm">
                <a href="#" class="btn">View</a>
                <a href="#" class="btn">Edit</a>
                <a href="#" class="btn">Delete</a>
              </td>
            </tr>

            <tr>
              <td>Twahirwa Callixt</td>
              <td>Lycee de Nyanza</td>
              <td>$30</td>
              <td class="mm">
                <a href="#" class="btn">View</a>
                <a href="#" class="btn">Edit</a>
                <a href="#" class="btn">Delete</a>
              </td>
            </tr>

          </table>
        </div>




    
        <div class="new-students">
          <div class="title">
            <h2>Recent Students</h2>
            <a href="#" class="btn">View All</a>
          </div>
          <table class="kb">
            <tr>
              <th>Profile</th>
              <th>Name</th>
              <th>Option</th>
            </tr>
            <tr>
              <td><img src="0.jpg" alt=""></td>
              <td>Manzi Benjamin</td>
              <td><a href="#" class="btn">View</a></td>
            </tr>

            <tr>
              <td><img src="PXL1.jpg" alt=""></td>
              <td>Hashimwe Doren</td>
              <td><a href="#" class="btn">View</a></td>
            </tr>

            <tr>
              <td><img src="01.jpg" alt=""></td>
              <td>Manirasubiza.G</td>
              <td><a href="#" class="btn">View</a></td>
            </tr>

            <tr>
              <td><img src="ml.jpg" alt=""></td>
              <td>Impuhwe.B.moise</td>
              <td><a href="#" class="btn">View</a></td>
            </tr>

            <tr>
              <td><img src="kf.jpg" alt=""></td>
              <td>Kamugisha.Fred</td>
              <td><a href="#" class="btn">View</a></td>
            </tr>

            <tr>
              <td><img src="00.jpg" alt=""></td>
              <td>Twizerimana.A</td>
              <td><a href="#" class="btn">View</a></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>


  </div>

  <script>
  
    const toggleBtn = document.getElementById('dashboard-toggle');
    const sidebar = document.getElementById('sidebar');

    toggleBtn.addEventListener('click', () => {
      sidebar.classList.toggle('collapsed');
    });
  </script>

</body>
</html>
