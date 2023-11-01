let slideShow = document.getElementsByName('slideshow-container')
let slideId = []
var slideIndex = [];

for (let i = 0; i < slideShow.length; i++) {
    let slideShowContainer = document.querySelectorAll("#mySlides" + (i + 1))

    if (slideShowContainer.length === 1) {
        let prevButton = document.getElementById('prev' + (i + 1))
        let nextButton = document.getElementById('next' + (i + 1))

        prevButton.setAttribute('class', 'hidden')
        nextButton.setAttribute('class', 'hidden')

    }

    slideId.push("mySlides" + (i + 1))
    slideIndex.push(1)
    showSlides(1, i)
}

function plusSlides(n, no) {
    showSlides(slideIndex[no] += n, no);
}

function showSlides(n, no) {
    var i;
    var x = document.querySelectorAll('#' + slideId[no]);
    if (n > x.length) {
        slideIndex[no] = 1
    }
    if (n < 1) {
        slideIndex[no] = x.length
    }
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    x[slideIndex[no] - 1].style.display = "block";
}

function showModal(target_modal) {
    let modal = document.getElementById(target_modal)
    let main_container = document.getElementById('main-container')

    main_container.setAttribute('class', 'hidden')
    modal.setAttribute('class', 'flex lg:items-center justify-center w-screen min-h-screen overflow-y-scroll bg-black bg-opacity-80 pt-5')
}

function removeModal(target_modal) {
    document.body.setAttribute('class', 'w-screen min-h-screen overflow-x-hidden');
    let main_container = document.getElementById('main-container')

    main_container.setAttribute('class', 'w-full flex flex-col items-center gap-3 mt-2 lg:mt-0 max-w-[2500px] lg:pt-5')
    let modal = document.getElementById(target_modal)
    modal.setAttribute('class', 'hidden')
}

const status_select = document.getElementById('status');
const date_input = document.getElementById('date-input');
const date = document.getElementById('date')

status_select.addEventListener('change', function () {
    if (status_select.value === 'busy') {
        date_input.setAttribute('class', 'w-full')
        date.setAttribute('name', 'available_at')
        date.required = true
    } else {
        date_input.setAttribute('class', 'hidden')
        date.value = null
        date.removeAttribute('name')
        date.required = false
    }
});

function showImages(index){
    let slideshow = document.getElementById("slideshow" + index)
    let slidebutton = document.getElementById('image-button' + index)

    if(slideshow.classList.contains('hidden')){
        slidebutton.innerText = 'Ocultar'
        return slideshow.setAttribute('class', 'lg:block relative lg:w-[30%] lg:pl-2')
    }
    slidebutton.innerText = 'Ver Fotos'
    return slideshow.setAttribute('class', 'hidden lg:block relative lg:w-[30%] lg:pl-2')
}

function deleteForm(form_index, name){
    let delete_confirmation_modal = document.getElementById('delete-modal');
    let delete_button = document.getElementById('delete-button')
    let item_name = document.getElementById('item_name')
    item_name.innerText = name
    delete_confirmation_modal.setAttribute('class', 'block fixed z-10 top-0 left-0 w-screen h-screen')
    delete_button.setAttribute('onclick', `document.getElementById('deleteForm${form_index}').submit()`)
}
