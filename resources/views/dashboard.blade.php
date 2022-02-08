<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Dashboard of school information</title>
</head>

<body class="grid-container">
<ul class="navbar">
    <li>
        <nav>Links:</nav>
    </li>
    <li class="active">
        <nav><a href="/" class="different-page">Home</a></nav>
    </li>
    <li class="active">
        <nav><a href="profile" class="different-page">Profile</a></nav>
    </li>
    <li class="active">
        <nav><a href="dashboard" class="current-page">Dashboard</a></nav>
    </li>
    <li class="active">
        <nav><a href="faq" class="different-page">FAQ</a></nav>
    </li>
    <li class="active">
        <nav><a href="blog" class="different-page">Blog</a></nav>
    </li>
    <li class="active">
        <nav><a href="aside" class="different-page">Aside</a></nav>
    </li>
</ul>
<p class="footer">Gemaakt door:<br> Mitchel Goedegebuure</p>
<main>
    <h1>Dashboard</h1>
</main>

<table>
    <article>
        <tr>
            <th>Quartile</th>
            <th>Course</th>
            <th>EC</th>
            <th>Exam</th>
            <th>Grade</th>
        </tr>
        <tr>
            <td rowspan="3">1</td>
            <td>Programme and Career Orientation</td>
            <td>2,5</td>
            <td>Assesment exam</td>
            <td>N/A</td>
        </tr>
        <tr>
            <td>Computer Science Basics</td>
            <td>5</td>
            <td>Written Exam</td>
            <td>N/A</td>
        </tr>
        <tr>
            <td>Programming Basics</td>
            <td>5</td>
            <td>Case study exam</td>
            <td>N/A</td>
        </tr>
        <tr>
            <td rowspan="2">2</td>
            <td rowspan="2">Object Oriented Programming</td>
            <td rowspan="2">10</td>
            <td>Case study</td>
            <td rowspan="2">N/A</td>
        </tr>
        <tr>
            <td>Project</td>
        </tr>
        <tr>
            <td rowspan="4">3</td>
            <td rowspan="1">Framework Development 1</td>
            <td>5</td>
            <td>Case Study</td>
            <td rowspan="1">N/A</td>
        </tr>
        <tr>
            <td rowspan="3">Framework Project 1</td>
            <td rowspan="3">7,5</td>
            <td>Project</td>
            <td rowspan="3">N/A</td>
        </tr>
        <tr>
            <td>Assesment</td>
        </tr>
        <tr>
            <td>Report</td>
        </tr>
        <tr>
            <td rowspan="2">4</td>
            <td rowspan="2">Portfolio</td>
            <td rowspan="2">10</td>
            <td>Project</td>
            <td rowspan="2">N/A</td>
        </tr>
        <tr>
            <td>Assessment</td>
        </tr>
    </article>
</table>

<label for="ec" class="progressec">Route naar geen NBSA</label>
<progress id="ec" class="progressec" value="1" max="45"></progress>

</body>

</html>
