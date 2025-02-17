<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>قلعة السنة</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Amiri&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="logo">
            <img src="logo.png" alt="Logo" class="logo-image">
            <h1>قلعة السنة</h1>
        </div>
        <nav>
            <ul>
                <li><a href="#home">الرئيسية</a></li>
                <li><a href="#fatwas">الفتاوى</a></li>
                <li><a href="#lessons">الدروس</a></li>
                <li><a href="#quran">القرآن الكريم</a></li>
                <li><a href="https://discord.gg/NMTT5PwN8B" target="_blank">الديسكورد</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="home">
            <h2>أحدث المقالات</h2>
            <?php
            $stmt = $pdo->query("SELECT * FROM articles ORDER BY created_at DESC LIMIT 5");
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<div class='article'>";
                echo "<img src='article_image.jpg' alt='Article Image' class='article-image'>";
                echo "<h3>" . htmlspecialchars($row['title']) . "</h3>";
                echo "<p>" . substr(htmlspecialchars($row['content']), 0, 150) . "...</p>";
                echo "<a href='#'>اقرأ المزيد</a>";
                echo "</div>";
            }
            ?>
        </section>

        <section id="fatwas">
            <h2>الفتاوى</h2>
            <div class="article">
                <h3>فتوى 1</h3>
                <p>شرح الفتوى الأولى هنا مع تفاصيل دقيقة.</p>
                <a href="#">اقرأ المزيد</a>
            </div>
            <div class="article">
                <h3>فتوى 2</h3>
                <p>شرح الفتوى الثانية مع تفاصيل.</p>
                <a href="#">اقرأ المزيد</a>
            </div>
        </section>

        <section id="lessons">
            <h2>الدروس</h2>
            <div class="article">
                <h3>درس 1</h3>
                <p>تفاصيل الدرس الأول وشرح الدروس.</p>
                <a href="#">شاهد الدرس</a>
            </div>
            <div class="article">
                <h3>درس 2</h3>
                <p>تفاصيل الدرس الثاني.</p>
                <a href="#">شاهد الدرس</a>
            </div>
        </section>

        <section id="quran">
            <h2>القرآن الكريم</h2>
            <div class="article">
                <h3>سورة الفاتحة</h3>
                <p>تفسير وتوضيح للآيات الكريمة من سورة الفاتحة.</p>
                <a href="#">اقرأ المزيد</a>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 قلعة السنة. جميع الحقوق محفوظة.</p>
    </footer>
</body>
</html>