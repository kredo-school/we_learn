// window.next = function next(modalType, currentModal)
// {
//     switch (modalType)
//     {
//         case 'learner':
//             document.getElementById('learnerModal' + currentModal).style.display = 'none';
//             document.getElementById('learnerModal' + (currentModal + 1)).style.display = 'block';
//             break;
//         case 'teacher':
//             // open teacher modal
//             break;
//     }
// }

// window.back = function back(modalType, currentModal)
// {
//     switch (modalType)
//     {
//         case 'learner':
//             document.getElementById('learnerModal' + currentModal).style.display = 'none';
//             document.getElementById('learnerModal' + (currentModal - 1)).style.display = 'block';
//             break;
//         case 'teacher':
//             // open teacher modal
//             break;
//     }

// }

window.showCarousel = function showCarousel(modalType)
{
    //Disable scrolling
    var body = document.getElementById('body');
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
    var body = document.getElementById('body');
    body.classList.remove('overflow-hidden');

    switch (carouselType)
    {
        case 'learner':
            document.getElementById('learnerCarousel').style.display = 'none';
            // document.getElementById('learnerModal2').style.display = 'none';
            // document.getElementById('learnerModal3').style.display = 'none';
            break;

        case 'teacher':
            document.getElementById('teacherCarousel').style.display = 'none';
            break;

        case 'exchange':
            document.getElementById('exchangeCarousel').style.display = 'none';
            break;
    }
}


