<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="noindex, nofollow">
        <meta name="description" content="Student records system to track student information including grades">
        <title>Student Records - Lakehead University</title>
        <!-- custom css -->
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <!-- header -->
        <header>
            <div class="header-content">
                <!-- logo and university name  -->
                <div class="logo-and-title">
                    <a href="index.php"><img src="../img/Lakehead-University-Logo.png" alt="Lakehead University Logo" class="logo"></a>
                    <div class="university-title">
                        <h1>Lakehead University</h1>
                        <p>Student Records</p>
                    </div>
                </div>

                <!-- nav links (dummy links for most li except for add student) -->
                <nav>
                    <ul>
                        <li><a href="index.php" title="Dummy link for design purposes">Home</a></li>
                        <li><a href="index.php" class="active">Add Student</a></li>
                        <li><a href="index.php" title="Dummy link for design purposes">About</a></li>
                        <li><a href="index.php" title="Dummy link for design purposes">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <!-- main content and form-->
        <main>
            <section class="intro-section">
                <h1>Welcome to Lakehead University Student Records</h1>
                <p>Your portal to manage and track student information including grades.</p>
            </section>

            <section id="form" class="form-section">
                <h2>Add Student Information</h2>
                <form method="post" action="index.php">
                    <div class="form-group">
                        <label for="input1">First Name</label>
                        <input type="text" name="firstName" id="input1" required placeholder="Enter First Name">
                    </div>

                    <div class="form-group">
                        <label for="input2">Last Name</label>
                        <input type="text" name="lastName" id="input2" required placeholder="Enter Last Name">
                    </div>

                    <div class="form-group">
                        <label for="input3">Year</label>
                        <input type="number" name="year" id="input3" required placeholder="Enter Year of Study" min="1" max="6">
                    </div>

                    <div class="form-group">
                        <label for="input4">Email</label>
                        <input type="email" name="email" id="input4" required placeholder="Enter Email">
                    </div>

                    <div class="form-group">
                        <label for="input5">Average</label>
                        <input type="number" name="average" id="input5" step="0.1" required placeholder="Enter Average Grade" min="0" max="100">
                    </div>

                    <button type="submit" class="submit-btn">Add Student</button>
                </form>

                <div class="submit-message">
                    <?php
                        require_once('database.php');
                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            $firstName = $database->sanitize($_POST['firstName']);
                            $lastName = $database->sanitize($_POST['lastName']);
                            $year = $database->sanitize($_POST['year']);
                            $email = $database->sanitize($_POST['email']);
                            $average = $database->sanitize($_POST['average']);

                            $res = $database->create($firstName, $lastName, $year, $email, $average);
                            if ($res) {
                                echo "<p>Student Added Successfully!</p>";
                            } else {
                                echo "<p>Error: Could not add student.</p>";
                            }
                        }
                    ?>
                </div>
            </section>

            <!-- random section for design purposes -->
            <section class="lorem-section">
                <h2>Additional Information</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa.</p>
            </section>
        </main>

        <!-- footer -->
        <footer>
            <p>&copy; 2025 Lakehead University. All rights reserved.</p>
        </footer>
    </body>
</html>
