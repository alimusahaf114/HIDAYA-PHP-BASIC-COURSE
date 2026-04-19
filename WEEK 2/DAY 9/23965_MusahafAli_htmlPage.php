<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All HTML Tags Practice</title>
</head>

<body>


    <h1>HTML Practice Webpage</h1>
    <p>This page demonstrates multiple HTML tags</p>



    <a href="#">Home</a> |
    <a href="#">About</a> |
    <a href="#">Contact</a>



    <section>
        <h2>Text Formatting</h2>
        <p>This is a <b>bold</b>, <i>italic</i>, <u>underlined</u> text.</p>
        <p><strong>Important</strong> and <em>emphasized</em> text.</p>
        <p><mark>Highlighted</mark> text.</p>
        <p>H<sub>2</sub>O and x<sup>2</sup></p>
        <p><small>Small text</small></p>
    </section>

    <section>
        <h2>Lists</h2>

        <h3>Unordered List</h3>
        <ul>
            <li>Item 1</li>
            <li>Item 2</li>
        </ul>

        <h3>Ordered List</h3>
        <ol>
            <li>Step 1</li>
            <li>Step 2</li>
        </ol>

        <h3>Definition List</h3>
        <dl>
            <dt>HTML</dt>
            <dd>Markup language</dd>
        </dl>
    </section>

    <section>
        <h2>Links & Media</h2>
        <a href="https://www.google.com" target="_blank">Visit Google</a><br><br>

        <img src="https://via.placeholder.com/150" alt="Sample Image">

        <br><br>

        <video width="250" controls>
            <source src="" type="video/mp4">
            Your browser does not support video.
        </video>

        <br><br>

        <audio controls>
            <source src="" type="audio/mp3">
            Your browser does not support audio.
        </audio>
    </section>

    <!-- Table -->
    <section>
        <h2>Table</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Age</th>
            </tr>
            <tr>
                <td>Ali</td>
                <td>20</td>
            </tr>
            <tr>
                <td>Ahmed</td>
                <td>22</td>
            </tr>
        </table>
    </section>

    <!-- Form -->
    <section>
        <h2>Form</h2>
        <form>
            <label>Name:</label><br>
            <input type="text" placeholder="Enter name"><br><br>

            <label>Email:</label><br>
            <input type="email"><br><br>

            <label>Password:</label><br>
            <input type="password"><br><br>

            <label>Gender:</label><br>
            <input type="radio" name="gender"> Male
            <input type="radio" name="gender"> Female<br><br>

            <label>Skills:</label><br>
            <input type="checkbox"> HTML
            <input type="checkbox"> CSS<br><br>

            <label>City:</label><br>
            <select>
                <option>Karachi</option>
                <option>Lahore</option>
            </select><br><br>

            <textarea placeholder="Write message"></textarea><br><br>

            <input type="submit" value="Submit">
        </form>
    </section>



</body>
</html>