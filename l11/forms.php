<?php
require __DIR__ .'/header.php';
?>
<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Menu</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

<main class="container">
    <div class="bg-light p-5 rounded">
        <form>
            <div>
                <label for="username" class="form-label">Name</label>
                <input type="text" name="username" id="username" class="form-control">
            </div>

            <div>
                <label class="form-label">Gender</label>
                <div class="form-check">
                    <input type="radio" name="gender" value="male" id="gender-male" class="form-check-input">
                    <label for="gender-male" class="form-check-label">Male</label>
                </div>
                <div class="form-check">
                    <input type="radio" name="gender" value="female" id="gender-female" class="form-check-input">
                    <label for="gender-female" class="form-check-label">Female</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="programming_lenguage" class="form-label">Programming lenguage</label>
                <select name="programming_lenguage" id="programming_lenguage" class="form-select">
                <optgroup label="backend">
                    <option value="php">PHP</option>
                    <option value="python">Python</option>
                    <option value="java">Java</option>
                </optgroup>
                <optgroup label="frontend">
                    <option value="html">HTML</option>
                    <option value="css">CSS</option>
                    <option value="javascript">JavaScript</option>
                </optgroup>
                </select>

            </div>
            <div class="mb-3">
                <label for="comment" class="form-label">Your's comments</label>
                <textarea name="comment" id="comment" class="form-control"></textarea>
            </div>
                <button type="button" class="btn btn-primary">Send</button>
        </form>
    </div>
</main>
<?php
require __DIR__ .'/footer.php';
?>