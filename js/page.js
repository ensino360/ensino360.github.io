function addPost() {
    var userName = document.getElementById("userName").value;
    var postContent = document.getElementById("postContent").value;

    if (userName.trim() === "" || postContent.trim() === "") {
        alert("Por favor, preencha todos os campos antes de publicar.");
        return;
    }

    var postDiv = document.getElementById("post");
    postDiv.style.display = "none";

    var currentDate = new Date();
    var dateString = currentDate.toLocaleDateString();
    var timeString = currentDate.toLocaleTimeString();

    var postHTML = `
        <div class="post">
            <p><strong>${userName}</strong>: ${postContent}</p>
            <small>Postado em ${dateString} às ${timeString}</small>
            <div class="comments">
                <input type="text" class="commentUserName" placeholder="Seu Nome">
                <textarea class="commentContent" placeholder="Deixe seu comentário..."></textarea>
                <button onclick="addComment(this)">Comentar</button>
            </div>
            <div class="postComments"></div>
        </div>
    `;

    document.getElementById("comments").insertAdjacentHTML('afterbegin', postHTML);
}

function addComment(button) {
    var commentUserName = button.previousElementSibling.previousElementSibling.value;
    var commentContent = button.previousElementSibling.value;

    if (commentUserName.trim() === "" || commentContent.trim() === "") {
        alert("Por favor, preencha todos os campos antes de comentar.");
        return;
    }

    var currentDate = new Date();
    var dateString = currentDate.toLocaleDateString();
    var timeString = currentDate.toLocaleTimeString();

    var commentHTML = `
        <div class="comment">
            <p><strong>${commentUserName}</strong>: ${commentContent}</p>
            <small>Comentado em ${dateString} às ${timeString}</small>
        </div>
    `;

    button.parentElement.nextElementSibling.insertAdjacentHTML('beforeend', commentHTML);
}

function addPost() {
    var userName = document.getElementById("userName").value;
    var postContent = document.getElementById("postContent").value;
    var imageInput = document.getElementById("imageInput");

    if (userName.trim() === "" || postContent.trim() === "") {
        alert("Por favor, preencha todos os campos antes de publicar.");
        return;
    }

    var postDiv = document.getElementById("post");
    postDiv.style.display = "none";

    var currentDate = new Date();
    var dateString = currentDate.toLocaleDateString();
    var timeString = currentDate.toLocaleTimeString();

    var imageHTML = "";
    if (imageInput.files.length > 0) {
        var imageURL = URL.createObjectURL(imageInput.files[0]);
        imageHTML = `<img src="${imageURL}" alt="Imagem do Post">`;
    }

    var postHTML = `
        <div class="post">
            <p><strong>${userName}</strong>: ${postContent}</p>
            ${imageHTML}
            <small>Postado em ${dateString} às ${timeString}</small>
            <div class="comments">
                <input type="text" class="commentUserName" placeholder="Seu Nome">
                <textarea class="commentContent" placeholder="Deixe seu comentário..."></textarea>
                <button onclick="addComment(this)">Comentar</button>
            </div>
            <div class="postComments"></div>
        </div>
    `;

    document.getElementById("comments").insertAdjacentHTML('afterbegin', postHTML);
}
