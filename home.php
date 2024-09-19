<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Source Era Dashboard</title>
   <link rel="stylesheet" href="home.css">
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        
        <ul>
            <li><a href="#">🏠 Home</a></li>
            <li><a href="#">📚 Courses</a></li>
            <li><a href="#">📝 Quizzes</a></li>
            <li><a href="#">📜 About Us</a></li>
			<li><a href="#">📞 Contact Us</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="content-header">
            <h1>Welcome to Source Era!!</h1>
            <p>Select a language to start learning.</p>
        </div>

        <div class="cards">
            <?php
            // Array of programming languages with descriptions
            $languages = [
                "C" => "Learn about system programming and low-level concepts with C.",
                "C++" => "Explore object-oriented programming and advanced features in C++.",
				"SQL" => "Manage and manipulate databases efficiently with SQL.",
                "Python" => "Dive into a versatile language used for web development, data science, and more.",
                ".NET" => "Understand the powerful framework used for building enterprise-level applications.",
                "PHP" => "Learn server-side scripting for web development with PHP.",
                "HTML" => "Master the structure of web pages with Hypertext Markup Language.",
                "CSS" => "Style your websites and learn about responsive design with CSS.",
                "JavaScript" => "Enhance interactivity and create dynamic web applications with JavaScript.",
                "Shell Scripting" => "Automate tasks and manage systems with Shell Scripting.",
                "Java" => "Build robust applications with platform-independent Java.",
				"Django" => "Build robust web applications quickly with Django, a Python web framework.",
				"Web Development" => "Build and maintain websites by mastering both front-end and back-end technologies.",
				"Data Science" => "Analyze and interpret complex data to inform decision-making using statistical and computational methods.",

            ];

            // Loop through each language and generate a card
            foreach ($languages as $language => $description) {
                echo "<div class='card'>
                        <h3>$language</h3>
                        <p>$description</p>
                      </div>";
            }
            ?>
        </div>
    </div>

</body>
</html>
