window.showCarousel = function showCarousel(modalType)
{
    //Disable scrolling
    var body = document.getElementsByTagName("BODY")[0];
    body.classList.add('overflow-hidden');

    switch (modalType)
    {
        case 'learner':
            document.getElementById('learnerCarousel').style.display = 'block';
            break;
        case 'teacher':
            document.getElementById('teacherCarousel').style.display = 'block';
            break;
        case 'exchange':
            document.getElementById('exchangeCarousel').style.display = 'block';
            break;
    }
}

// close button
window.closeCarousel = function closeCarousel(carouselType)
{
    //Enable scrolling
    var body = document.getElementsByTagName("BODY")[0];
    body.classList.remove('overflow-hidden');

    switch (carouselType)
    {
        case 'learner':
            document.getElementById('learnerCarousel').style.display = 'none';
            break;

        case 'teacher':
            document.getElementById('teacherCarousel').style.display = 'none';
            break;

        case 'exchange':
            document.getElementById('exchangeCarousel').style.display = 'none';
            break;
    }
}


