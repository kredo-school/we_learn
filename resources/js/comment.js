window.show = function show()
{
    const commentForm = document.getElementById('comment-form');

    if (commentForm.style.display === 'none') {
        commentForm.style.display = 'block';
    } else {
        commentForm.style.display = 'none';
    }
}
