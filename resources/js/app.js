// require('./bootstrap');

// exchange category chat
const showFormBtn = document.getElementById('show-form-btn');
const commentForm = document.getElementById('comment-form');

showFormBtn.addEventListener('click', () => {
    if (commentForm.style.display === 'none') {
        commentForm.style.display = 'block';
    } else {
        commentForm.style.display = 'none';
    }
});

