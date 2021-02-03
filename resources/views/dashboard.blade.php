<?php require '../resources/views/partials/header.php'; ?>

<body>

<h2>
    Relevant links
</h2>

<ul id="list1" style="list-style: circle;">
    <li><a href="https://hz.nl/" target="_blank">HZ home page</a></li>
    <li><a href="https://hz.nl/over-de-hz/regelingen-documenten-1/onderwijs-en-examenregelingen" target="_blank">Course and Examination regulations</a></li>
    <li><a href="https://learn.hz.nl/my/" target="_blank">Learn</a></li>
    <li><a href="https://apps.hz.nl/angular/studievoortgang/studiestatus" target="_blank">Study Progress</a></li>
    <li><a href="https://github.com/" target="_blank">Github</a></li>
    <li><a href="https://www.w3schools.com/html/html_basic.asp" target="_blank">Basic HTML codes</a></li>
    <li><a href="https://itp.hz.nl" target="_blank">IT Personality generator</a></li>
</ul>


<table id="t01">

    <tr>
        <th>Quartile</th>
        <th>Course</th>
        <th>EC </th>
        <th>Exam</th>
        <th>Grade</th>
    </tr>

    <tr>
        <td rowspan="3"><strong>1</strong></td>
        <td>Programme and Career Orientation</td>
        <td>2.5</td>
        <td>Assesment</td>
        <td>7</td>
    </tr>

    <tr>
        <td>Science Basics</td>
        <td>7.5</td>
        <td>Written exam</td>
        <td>6.9</td>
    </tr>

    <tr>
        <td>Programming Basics</td>
        <td>5</td>
        <td>Case Study</td>
        <td>8</td>
    </tr>

    <tr>
        <td rowspan="3"><strong>2</strong></td>
        <td rowspan="2">Object Oriented Programming</td>
        <td rowspan="2">10</td>
        <td>Case Study</td>
        <td>7</td>
    </tr>

    <tr>
        <td>Project</td>
        <td>8.3</td>
    </tr>

    <tr>
        <td>Professional Skills</td>
        <td>2.5</td>
        <td>Portfolio</td>
        <td>8</td>
    </tr>

    <tr>
        <td rowspan="7"> <strong>3</strong></td>
        <td rowspan="2">Framework Project 1</td>
        <td rowspan="2">5</td>
        <td>Portfolio exam 1</td>
        <td></td>
    </tr>

    <tr>
        <td>Portfolio exam 2</td>
        <td></td>
    </tr>

    <tr>
        <td>Framework Development 1</td>
        <td>5</td>
        <td>Case Study</td>
        <td></td>
    </tr>

    <tr>
        <td>Professional Working Environment</td>
        <td>2.5</td>
        <td>Assesment</td>
        <td></td>
    </tr>

    <tr>
        <td rowspan="3">Professional Skills 2</td>
        <td rowspan="3">2.5</td>
        <td>Portfolio exam</td>
        <td></td>
    </tr>

    <tr>
        <td>Written exams 1</td>
        <td></td>
    </tr>

    <tr>
        <td>Written exams 2</td>
        <td></td>
    </tr>

    <tr>
        <td rowspan="5"><strong>4</strong></td>
        <td>Framework Project 2</td>
        <td>5</td>
        <td>Portfolio exam</td>
        <td></td>
    </tr>

    <tr>
        <td>Framework Development 2</td>
        <td>5</td>
        <td>Portfolio exam</td>
        <td></td>
    </tr>

    <tr>
        <td rowspan="3">Professional Skills 3</td>
        <td rowspan="3">2.5</td>
        <td>Portfolio exam</td>
        <td></td>
    </tr>

    <tr>
        <td>Written exam 1</td>
        <td></td>
    </tr>

    <tr>
        <td>Written exam 2</td>
        <td></td>
    </tr>

</table>

<br>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Month', 'Study Points', 'Minimum', 'Goal'],
            ['Sep',  0,      45, 60],
            ['Oct',  0,      45, 60],
            ['Nov',  10,      45, 60],
            ['Dec',  15,      45, 60],
            ['Jan',  27.5,      45, 60],
            ['Feb',  27.5,      45, 60],
            ['Mar',  27.5,      45, 60],
            ['Apr',  27.5,      45, 60],
            ['May',  27.5,      45, 60],
            ['Jun',  27.5,      45, 60],
            ['Jul',  27.5,      45, 60],
            ['Aug',  27.5,      45, 60],
        ]);

        var options = {
            title: 'Study Points',
            curveType: 'function',
            legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
    }
</script>

<div id="curve_chart"></div>

<br>
<br>
<br>

<?php require '../resources/views/partials/footer.php'; ?>

</body>
