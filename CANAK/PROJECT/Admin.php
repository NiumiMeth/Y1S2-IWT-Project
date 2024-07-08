<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="admin.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Admin Page</title>
</head>
<body>
    <!--Side bar section-->
    <div class="container">
        <aside>
             <div class="toggle">
                <div class="logo">
                    <img src="images/CANAK.jpeg">
                    <h2>CANAK<span class="danger">UNI</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">
                        close
                    </span>
                </div>
             </div>
             <div class="sidebar">
                <a href="Admin.php" class="active">
                    <span class="material-icons-sharp">
                        dashboard
                    </span>
                    <h3>Dashboard</h3>
                </a>
                <a href="User.php">
                    <span class="material-icons-sharp">
                        person_outline
                    </span>
                    <h3>User Managment</h3>
                </a>
                <a href="History.php">
                    <span class="material-icons-sharp">
                        history
                    </span>
                    <h3>History</h3>
                </a>
                <a href="announcement.php" >
                    <span class="material-icons-sharp">
                        insights
                    </span>
                    <h3>Announcement</h3>
                </a>

                <a href="../ticket page/supportservicemanager.php">
                    <span class="material-icons-sharp">
                        mail_outline
                    </span>
                    <h3>Tickets</h3>
                    <span class="message_count">27</span>
                </a>
                
                <a href="Lecturelist.php">
                    <span class="material-icons-sharp">
                        inventory
                    </span>
                    <h3>Lecture List</h3>
                </a>
                <a href="loginAD.php">
                    <span class="material-icons-sharp">
                        add
                    </span>
                    <h3>New Login</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        logout
                    </span>
                    <h3>Log out</h3>
                </a>
             </div>
        </aside>
        <!--End of sidebar Section-->

        <!--Main content-->
        <main>
            <h1>Admin Dashboard......</h1>
            <div class="Dashboard">
                <!--analyses-->
                <section id="features">
                    <div class="fea-base">
                        <div id="overview" class="fea-box">
                            <h3>Ticket Overview</h3>
                        </div>
                        <div id="status" class="fea-box">
                            <h3>Ticket Status</h3>
                        </div>
                        <div id="feedback" class="fea-box">
                            <h3><a href = ../akash/manage-feedback.php>Student Feedback <a></h3>
                        </div>
                    </div>
                </section>
                
                <!-- Add canvas for the line chart -->
                <canvas id="helpDeskChart" width="400" height="200"></canvas>
            </div>
        </main>
        
    </div>

    
    <script>
        // Get the canvas element
        var ctx = document.getElementById('helpDeskChart').getContext('2d');
    
        // Define sample data for the chart
        var chartData = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June'],
            datasets: [{
                label: 'Help Desk Requests',
                data: [12, 19, 3, 5, 2, 3], // Sample data for demonstration
                borderColor: 'rgb(75, 192, 192)',
                borderWidth: 1
            }]
        };
    
        // Create the line chart
        var myChart = new Chart(ctx, {
            type: 'line',
            data: chartData,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

<div class = "footer">
				<div class = "col-1">
				<a href ="Feedback.php">Provide Feedback</a>
				<div class = "row-1">
				info@CANAK.lk
				</div>
				<div class = "row-2">
				Copyright 2024 © CANAK. All Rights Reserved.
				</div>
				</div>
				<div class = "col-2">
					<div class = "imgarea">
					<img src = "images/qr-code.WEBP" div class = "qr-code">
					</div>
					<a href="facebook.com" class="fa fa-facebook"></a>
					<a href="twitter.com" class="fa fa-twitter"></a>
					<a href="#" class="fa fa-google"></a>
					<a href="instagram.com" class="fa fa-instagram"></a>
					<a href="linkedin.com" class="fa fa-linkedin"></a>
				</div>
			</div>
		</div>
    
</body>
</html>