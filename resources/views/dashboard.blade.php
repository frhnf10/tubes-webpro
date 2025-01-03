<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard UReadStory</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/dashboardstyle.css">
</head>

<body>
    <header>
        <div class="navbar">
            <div class="container-fluid">
                <div class="logo navbar-brand">UReadStory</div>
                <div class="category">
                    <select class="form-select">
                        <option>Kategori</option>
                    </select>
                </div>
                <div class="search-bar ms-3">
                    <input type="text" class="form-control" placeholder="Jelajahi">
                </div>
                <button class="btn btn-outline-light ms-3 add-book">Tambah Buku +</button>
                <div class="profile-container ms-auto">
                    <div class="profile d-flex align-items-center">
                        <img src="image/profil.png" alt="Foto Profil" class="profile-pic rounded-circle me-2">
                        <span>@siti_marilina</span>
                        <div class="dropdown-icon ms-2">▼</div>
                    </div>
                </div>
            </div>
        </div>
    </header>



    <main class="container my-5">
        <h1 class="text-left mb-4">Selamat Datang</h1>
        <div class="row row-cols-1 row-cols-md-3 g-2 book-grid">
            <div class="col">
                <button class="book-item w-100 p-0 border-0 bg-transparent" onclick="openBookPreview()">
                    <div class="book-cover bg-secondary mx-auto mb-2"></div>
                    <p class="text-center">Buku</p>
                </button>
            </div>
            <div class="col">
                <button class="book-item w-100 p-0 border-0 bg-transparent" onclick="openBookPreview()">
                    <div class="book-cover bg-secondary mx-auto mb-2"></div>
                    <p class="text-center">Buku</p>
                </button>
            </div>
            <div class="col">
                <button class="book-item w-100 p-0 border-0 bg-transparent" onclick="openBookPreview()">
                    <div class="book-cover bg-secondary mx-auto mb-2"></div>
                    <p class="text-center">Buku</p>
                </button>
            </div>
            <div class="col">
                <button class="book-item w-100 p-0 border-0 bg-transparent" onclick="openBookPreview()">
                    <div class="book-cover bg-secondary mx-auto mb-2"></div>
                    <p class="text-center">Buku</p>
                </button>
            </div>
            <div class="col">
                <button class="book-item w-100 p-0 border-0 bg-transparent" onclick="openBookPreview()">
                    <div class="book-cover bg-secondary mx-auto mb-2"></div>
                    <p class="text-center">Buku</p>
                </button>
            </div>
            <div class="col">
                <button class="book-item w-100 p-0 border-0 bg-transparent" onclick="openBookPreview()">
                    <div class="book-cover bg-secondary mx-auto mb-2"></div>
                    <p class="text-center">Buku</p>
                </button>
            </div>
            <div class="col">
                <button class="book-item w-100 p-0 border-0 bg-transparent" onclick="openBookPreview()">
                    <div class="book-cover bg-secondary mx-auto mb-2"></div>
                    <p class="text-center">Buku</p>
                </button>
            </div>
            <div class="col">
                <button class="book-item w-100 p-0 border-0 bg-transparent" onclick="openBookPreview()">
                    <div class="book-cover bg-secondary mx-auto mb-2"></div>
                    <p class="text-center">Buku</p>
                </button>
            </div>
            <div class="col">
                <button class="book-item w-100 p-0 border-0 bg-transparent" onclick="openBookPreview()">
                    <div class="book-cover bg-secondary mx-auto mb-2"></div>
                    <p class="text-center">Buku</p>
                </button>
            </div>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 UReadStory</p>
        <div class="footer-links">
            <a href="#">Privacy Policy</a>
            <a href="#">Help</a>
        </div>
    </footer>

    <!-- Preview Pop-up -->
    <div class="preview-overlay" id="previewOverlay">
        <div class="preview-container">
            <div class="close-preview" onclick="closeBookPreview()">×</div>
            <div class="book-cover"></div>
            <div class="form-group">
                <label for="genre">Genre:</label>
                <input type="text" id="genre" value="Mystery, Fantasy, Action" readonly>
            </div>
            <div class="form-group">
                <label for="author">Pengarang:</label>
                <input type="text" id="author" value="Arthur Conan Doyle" readonly>
            </div>
            <div class="form-group">
                <label for="synopsis">Sinopsis:</label>
                <textarea id="synopsis" rows="4" readonly>Lorem ipsum dolor sit amet.</textarea>
            </div>
            <div class="form-group">
                <label for="published-year">Tahun Terbit:</label>
                <input type="text" id="published-year" value="1999" readonly>
            </div>
            <div class="btn-group">
                <button class="btn-read">Baca</button>
                <button class="btn-add">Tambah</button>
            </div>
        </div>
    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <script>
        function openBookPreview() {
            document.getElementById("previewOverlay").style.display = "flex";
        }

        function closeBookPreview() {
            document.getElementById("previewOverlay").style.display = "none";
        }
    </script>
</body>
</html>
