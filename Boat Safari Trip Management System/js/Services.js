const btn = document
    .querySelector('.read-more-btn');

const text = document
    .querySelector('.card-read-more');

const cardHolder = document
    .querySelector('.card-holder');

cardHolder
    .addEventListener('click', e => {

        const current = e.target;

        const isReadMoreBtn = current.className.includes('read-more-btn');

        if (!isReadMoreBtn)
            return;

        const currentText = e.target.parentNode.querySelector('.card-read-more');

        currentText.classList.toggle('card-read-more--open');

        current.textContent = current.textContent.includes('Read More') ? 'Read Less' : 'Read More';

    });