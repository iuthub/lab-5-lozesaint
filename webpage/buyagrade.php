<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Buy Your Way to a Better Education!</title>
    <link href="buyagrade.css" type="text/css" rel="stylesheet"/>
</head>

<body>
<h1>Buy Your Way to a Better Education!</h1>

<p>
    The rough economy, along with recent changes in University of Washington policy, now allow us to offer grades for
    money. That's right! All you need to get a 4.0 in this course is cold, hard, cash.
</p>

<hr/>
<form action="sucker.php" method="post">
    <h2>Give Us Your Money</h2>
    <dl>
        <dt>Name</dt>
        <dd>
            <input type="text" name="StudentName">
        </dd>

        <dt>Section</dt>
        <dd>
            <select name="sections">
                <option value="" disabled selected hidden=" ">Select a section</option>
                <option value="#001">001</option>
                <option value="#002">002</option>
                <option value="#003">003</option>
                <option value="#004">004</option>
                <option value="#005">005</option>
            </select>
        </dd>

        <dt>Credit Card</dt>
        <dd>
            <input type="text" name="credit_card">
            <p><input type="radio" name="Visa" value="Visa">Visa <input type="radio" name="Visa" value="Master">Master
                Card</p>
        </dd>
    </dl>

    <div>
        <input type="submit" value="I am a giant sucker.">
    </div>
</form>
</body>
</html>
