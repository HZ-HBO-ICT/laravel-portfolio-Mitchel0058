@extends('layout');
@section('content')
<body class="grid-container">
<main>
    <h1>Dashboard</h1>
</main>

<table>
    <article>
        @foreach($grades as $grade)
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
            <td>8.4</td>
        </tr>
        <tr>
            <td>Computer Science Basics</td>
            <td>5</td>
            <td>Written Exam</td>
            <td>6.9</td>
        </tr>
        <tr>
            <td>Programming Basics</td>
            <td>5</td>
            <td>Case study exam</td>
            <td>6.0</td>
        </tr>
        <tr>
            <td rowspan="2">2</td>
            <td rowspan="2">Object Oriented Programming</td>
            <td rowspan="2">10</td>
            <td>Case study</td>
            <td rowspan="2">7.7</td>
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
<progress id="ec" class="progressec" value="12.5" max="45"></progress>

</body>
@endsection
