
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Teacher's Computer Science Projects Showcase</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #f5f7fa;
            margin: 0;
            padding: 0;
            color: #222;
        }
        header {
            background: #3a7bd5;
            background: linear-gradient(90deg, #3a7bd5 0%, #3a6073 100%);
            color: #fff;
            padding: 2rem 0 1rem 0;
            text-align: center;
        }
        header h1 {
            margin: 0;
            font-size: 2.5rem;
        }
        header p {
            font-size: 1.2rem;
            margin-top: 0.5rem;
        }
        main {
            max-width: 900px;
            margin: 2rem auto;
            padding: 0 1rem;
        }
        .projects-section {
            margin-top: 2rem;
        }
        .project-card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(60, 90, 140, 0.07);
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            transition: box-shadow 0.2s;
        }
        .project-card:hover {
            box-shadow: 0 4px 24px rgba(60, 90, 140, 0.16);
        }
        .project-title {
            font-size: 1.3rem;
            font-weight: bold;
            color: #2a4d69;
        }
        .project-student {
            font-size: 1rem;
            color: #4a90e2;
        }
        .project-description {
            margin: 0.5rem 0;
            color: #333;
        }
        .project-links a {
            text-decoration: none;
            color: #3a7bd5;
            margin-right: 1rem;
        }
        .add-project-btn {
            display: inline-block;
            background: #3a7bd5;
            color: #fff;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            cursor: pointer;
            margin-top: 1rem;
            transition: background 0.2s;
        }
        .add-project-btn:hover {
            background: #2a4d69;
        }
        @media (max-width: 600px) {
            header h1 {
                font-size: 1.6rem;
            }
            .project-card {
                padding: 1rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Computer Science Student Projects</h1>
        <p>Curated by <span id="teacherName">[Teacher Name]</span><br>
        Celebrating the creativity and skill of our students!</p>
    </header>
    <main>
        <section class="projects-section">
            <!-- Example Project Cards -->
            <div class="project-card">
                <div class="project-title">AI-Powered Chatbot</div>
                <div class="project-student">by Alice Johnson</div>
                <div class="project-description">
                    A conversational AI chatbot that assists users with daily tasks using natural language processing.
                </div>
                <div class="project-links">
                    <a href="https://github.com/alicejohnson/ai-chatbot" target="_blank">View Code</a>
                    <a href="https://ai-chatbot-demo.com" target="_blank">Live Demo</a>
                </div>
            </div>
            <div class="project-card">
                <div class="project-title">Sorting Visualizer</div>
                <div class="project-student">by Ben Kumar</div>
                <div class="project-description">
                    An interactive web app that visually demonstrates various sorting algorithms step by step.
                </div>
                <div class="project-links">
                    <a href="https://github.com/benkumar/sorting-visualizer" target="_blank">View Code</a>
                    <a href="https://benkumar.github.io/sorting-visualizer/" target="_blank">Live Demo</a>
                </div>
            </div>
            <div class="project-card">
                <div class="project-title">Personal Portfolio Website</div>
                <div class="project-student">by Chloe Lee</div>
                <div class="project-description">
                    A responsive portfolio site showcasing projects, skills, and resume for job applications.
                </div>
                <div class="project-links">
                    <a href="https://github.com/chloelee/portfolio" target="_blank">View Code</a>
                    <a href="https://chloelee.dev" target="_blank">Live Demo</a>
                </div>
            </div>
            <!-- Add more project cards as needed -->
        </section>
        <button class="add-project-btn" onclick="alert('Feature coming soon!')">Add New Project</button>
    </main>
    <script>
        // Replace with actual teacher's name if available
        document.getElementById('teacherName').textContent = "Mrs. Smith";
    </script>
</body>
</html>
