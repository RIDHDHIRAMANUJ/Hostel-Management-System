<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meals</title>
    <style>
        *{
            font-weight: bold;
        }

        .container {
            width: 100%;
            height: 100vh;
            background-image: linear-gradient(rgba(132, 128, 128, 0.863), rgba(179, 177, 177, 0.75)), url(./images/meals.jpg);
            background-size: cover;
            background-position: center;
            z-index: 0;
        }
        
        h3 {
            font-size: 25px;
            margin-bottom: 0;
            background-color: #2c3e50;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        
        .container {
            font-size: small;
        }
        
        table {
            border: 2px solid black;
            padding-left: 5px;
            padding-right: 5px;
            padding-top: 5px;
            padding-bottom: 5px;
        }
        
        table td {
            border: 1px solid black;
            padding: 55px;
        }
    </style>
</head>
<body>
    <header>
        <h3>Meal Plans Are Here !!</h3>
    </header>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th></th>
                    <th>Monday</th>
                    <th>Tuesday</th>
                    <th>Wednesday</th>
                    <th>Thursday</th>
                    <th>Friday</th>
                    <th>Saturday</th>
                    <th>Sunday</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Morning</td>
                    <td>Poha</td>
                    <td>Aloo paratha</td>
                    <td>Masala Puri</td>
                    <td>Bhakhri</td>
                    <td>Idli</td>
                    <td>Thepla</td>
                    <td>Chinese Samosa</td>
                </tr>
                <tr>
                    <td>Afternoon</td>
                    <td>Roti,Veg sabji,Dalrice</td>
                    <td>Roti,Veg sabji,Dalrice</td>
                    <td>Roti,Veg sabji,Dalrice</td>
                    <td>Roti,Veg sabji,Dalrice</td>
                    <td>Roti,Veg sabji,Dalrice</td>
                    <td>Roti,Veg sabji,Dalrice</td>
                    <td>Roti,Veg sabji,Dalrice</td>
                </tr>
                <tr>
                    <td>Dinner</td>
                    <td>Roti,Punjabi Sabji</td>
                    <td>Sev-tameta sabji,parotha</td>
                    <td>pani-puri</td>
                    <td>puri-sak</td>
                    <td>biryani</td>
                    <td>frenchfries</td>
                    <td>Dosah</td>
                </tr>
            </tbody>
        </table>
        <button onclick="goBackWithoutRefresh()">Go Back</button>
    </div>

    <script>
        // Go back to the previous page without refreshing
        function goBackWithoutRefresh() {
            window.history.back();
        }
    </script>
</body>
</html>
